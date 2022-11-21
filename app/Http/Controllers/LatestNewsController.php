<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LatestNews;
use App\Politics;

class LatestNewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=> ['index','show']]);
    }



    public function latestnewsview(){
        // $politics = Politics::all();
        // return view('politicsview',['politics'=> $politics]);

        // $politics = Politics::latest()->paginate(3);
        // return view('politicsview', compact('politics'))
        // ->with('i', (request()->input('page', 1) - 1) *3);

        $latestnews = LatestNews::paginate(3);
        return view('latestnewsview',compact('latestnews'));
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latestnews = LatestNews::latest()->paginate(3);
        return view('politics.index', compact('latestnews'))
        ->with('i', (request()->input('page', 1) - 1) *3);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('latestnews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'body' =>'required',
            'preview' =>'required',
            'image' =>'image|nullable|max:1999|required', 
        ]);

        /**Handle File Upload */


        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename .'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/image', $fileNameToStore);
        }else{
            $fileNameToStore ='noimage.jpeg';
        }
        
         $latestnews = new LatestNews;
        //  $latestnews->user_id = auth()->user()->id;
         $latestnews ->title =$request->input('title');
          $latestnews->body = $request->input('body');
          $latestnews->preview = $request->input('preview');
          $latestnews->image =$fileNameToStore;
        
          $latestnews-> save();
          return redirect('/latestnews/create')->with ('success','LatestNews Successfully Created');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $latestnews = LatestNews::find($id);
        return view ('latestnews.edit')->with('latestnews',$latestnews);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'body' =>'required',
            'preview'=> 'required',
            'image' =>'image|nullable|max:1999', 
        ]);

        /**Handle File Upload */


        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename .'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/image', $fileNameToStore);
        }else{
            $fileNameToStore ='noimage.jpeg';
        }


         $latestnews = LatestNews::findOrFail($id);
         $latestnews->user_id = auth()->user()->id;
         $latestnews ->title =$request->input('title');
          $latestnews->body = $request->input('body');
          $latestnews->preview = $request->input('preview');

          if($request->hasFile('image')){
            $latestnews->image = $fileNameToStore;
            }
  
          
          $latestnews-> save();
          return redirect('/latestnewsview')->with ('success','Latest News Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $latestnews = LatestNews::find($id);
       $latestnews->delete();

       return redirect('latestnewsview')->with ('success','Latestnews Successfully Deleted');
    }
}
