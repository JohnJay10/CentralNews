<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Politics;
use App\LatestNews;
use App\Sport;

class PagesController extends Controller
{
    public function index(){
        // return view('pages.index');
        $politics = Politics::paginate(3);
        $latestnews = LatestNews::latest()->paginate(3);
        $sport = Sport::latest()->paginate(3);
        return view('pages.index',compact('politics', 'latestnews', 'sport'));   
    }

    public function sport(){
        return view('pages.sport');
    }

    public function politics(){
        return view('pages.politics');
    }

    public function contact(){
        return view('pages.contact');
    }

    
    // public function politicsview(){
    //     return view('politicsview');
    // }
}
