<?php

namespace App\Http\Controllers\Appp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('appp.index');
    }

    public function about(){
        return view('appp.about');
    }

    public function scholarships(){
        return view('appp.scholarships');
    }

    public function contact(){
        return view('appp.contact');
    }
}
