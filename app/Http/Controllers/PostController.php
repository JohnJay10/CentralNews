<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Illuminate\Support\Facades\Storage;
use Spatie\Image\Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
       
        return view('post.index')
        ->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *@return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $post = Post::create([
            'title'         => $request->title,
            'body'       => $request->post_content,
            'status'        => $request->status,
            'preview'       => $request->preview,
            'user_id'       => auth()->user()->id,
            'category_id'   => $request->category_id,
            'view_count'    => 0
        ]);

        if($request->hasFile('feature_image')){
            $post->addMedia($request->feature_image)
                ->toMediaCollection("feature_image");
        }

        return redirect()->route('post.index')
        ->with('success', "Post Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  Post  $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('post.edit', compact(['post', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update([
            'title'         => $request->input('title', $post->title),
            'body'       => $request->input('post_content', $post->body),
            'status'        => $request->input('status', $post->status),
            'preview'       => $request->input('preview', $post->preview),
            'user_id'       => auth()->user()->id,
            'category_id'   => $request->input('category_id', $post->category_id)
        ]);

        if($request->hasFile('feature_image')){
            $post->media()->delete();
            $post->addMedia($request->feature_image)
                ->toMediaCollection("feature_image");
        }

        return redirect()->route('post.index')
            ->with('success', "Post Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')
            ->with('success', "Post Deleted Successfully");
    }


    public function trashedPost()
    {
        $posts = Post::onlyTrashed()->get();
        return view('post.trash', compact('posts'));
    }

    public function restorePost($id)
    {
        Post::withTrashed()->where('id', $id)->restore();
        return redirect()
            ->route('post.index')
            ->with('success', "Post Restored");
    }

    public function forceDeletePost($id)
    {
        $post =  Post::withTrashed()->where('id', $id)->first();
       
        $post->forceDelete();
        return redirect()
            ->route('post.index')
            ->with('success', "Post Deleted successfully");
    }
    

    public function uploadPhoto(Request $request)
    {
        $original_name = $request->upload->getClientOriginalName();
        $filename_org = pathinfo($original_name, PATHINFO_FILENAME);
        $ext = $request->upload->getClientOriginalExtension();
        $filename = $filename_org.'_'.time().'.'.$ext;

        $request->upload->move(storage_path('app/public/blog/images'), $filename);

        $CKEditorFuncNum = $request->input('CKEditorFuncNum');

        $url = asset('storage/blog/images/'.$filename);
        $message = "Your Photo Uploaded";

        $res = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, `$url`, `$message`)</script>";
        @header("Content-Type: text/html; charset=utf-8");

        echo $res;

    }
}
