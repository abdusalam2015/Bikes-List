<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        $title = 'Welcome to ATCO';
       
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $data = array(
            'title' => 'services',
            'services' => ['Import Toys & Bicycles From Chines','Find The best Price','
            Dealing with several factories','Find The best quality in a very short time']
        );
        return view('pages.services')->with($data);
    }
}
