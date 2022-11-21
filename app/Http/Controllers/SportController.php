<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sport;
use App\LatestNews;

class SportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=> ['index','show']]);
    }


    public function sportview(){
        // $politics = Politics::all();
        // return view('politicsview',['politics'=> $politics]);

        // $politics = Politics::latest()->paginate(3);
        // return view('politicsview', compact('politics'))
        // ->with('i', (request()->input('page', 1) - 1) *3);

        $sports = Sport::paginate(3);
        return view('sportview',compact('sports'));
        
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $sports = \App\Sport::paginate(3);
        $sports = Sport::latest()->paginate(3);
        $latestnews = LatestNews::latest()->paginate(3);
         return view('sport.index', compact('sports', 'latestnews'))  
         ->with('i', (request()->input('page', 1) - 1) *3);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sport.create');
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
        
         $sport = new Sport;
          $sport->user_id = auth()->user()->id;
         $sport ->title =$request->input('title');
          $sport->body = $request->input('body');
          $sport->preview = $request->input('preview');

          $sport->image =$fileNameToStore;
        
          $sport-> save();
          return redirect('/sport/create')->with ('success','Sport Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sport = Sport::find($id);
        return view ('sport.show')->with('sport',$sport);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sport = Sport::find($id);
        return view ('sport.edit')->with('sport',$sport);
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


         $sport = Sport::findOrFail($id);
         $sport->user_id = auth()->user()->id;
         $sport ->title =$request->input('title');
          $sport->body = $request->input('body');
          $sport->preview = $request->input('preview');

          if($request->hasFile('image')){
            $sport->image = $fileNameToStore;
            }
  
          
          $sport-> save();
          return redirect('/sportview')->with ('success','Sport Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
       $sports = Sport::find($id);
       $sports->delete();

       return redirect('sportview')->with ('success','Sport Successfully Deleted');
    }
}
