<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sport;
use App\LatestNews;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sport = Sport::latest()->paginate(3);
        $latestnews = LatestNews::latest()->paginate(3);
         return view('sport.index', compact('sport', 'latestnews'))  
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
        //  $politics->user_id = auth()->user()->id;
         $sport ->title =$request->input('title');
          $sport->body = $request->input('body');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
