<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Session;
use App\Politics;
use App\LatestNews;

class PoliticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except'=> ['index','show']]);
    }


    public function politicsview(){
        // $politics = Politics::all();
        // return view('politicsview',['politics'=> $politics]);

        // $politics = Politics::latest()->paginate(3);
        // return view('politicsview', compact('politics'))
        // ->with('i', (request()->input('page', 1) - 1) *3);

        $politics = Politics::paginate(3);
        return view('politicsview',compact('politics'));
        
    }   


    public function index()
    {
         $politics = Politics::latest()->paginate(3);
         $latestnews = LatestNews::latest()->paginate(3);
         return view('politics.index', compact('politics', 'latestnews'))  
         ->with('i', (request()->input('page', 1) - 1) *3);


        // $politics = Politics::all();
        // return view('politics.index',['politics'=> $politics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('politics.create');
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
            'preview'=> 'required',
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
        
         $politics = new Politics;
        //  $politics->user_id = auth()->user()->id;
         $politics ->title =$request->input('title');
          $politics->body = $request->input('body');
          $politics->preview = $request->input('preview');
          $politics->user_id = auth()->user()->id;
          $politics->image =$fileNameToStore;
        
          $politics-> save();
          return redirect('/politics/create')->with ('success','Politics Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $politics = Politics::find($id);
        return view ('politics.show')->with('politics',$politics);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $politics = Politics::find($id);
        return view ('politics.edit')->with('politics',$politics);
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


         $politics = Politics::findOrFail($id);
         $politics->user_id = auth()->user()->id;
         $politics ->title =$request->input('title');
          $politics->body = $request->input('body');
          $politics->preview = $request->input('preview');

          if($request->hasFile('image')){
            $politics->image = $fileNameToStore;
            }
  
          
          $politics-> save();
          return redirect('/politicsview')->with ('success','Politics Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       $politic = Politics::find($id);
       $politic->delete();

       return redirect('politicsview')->with ('success','Politics Successfully Deleted');

    }
}
