<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function product(){
        return view('product');
    }
    public function news($news){
        return view('news', ['news' => $news]);
    }
    public function program(){
        return view('program');
    }
    public function about_us(){
        return view('about_us');
    }
    public function index(){
        return view('contact-us');
    }
}
