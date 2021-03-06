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

    public function scholarships_details(){
        return view('appp.scholarships-details');
    }

    public function faq(){
        return view('appp.faq');
    }

    public function contact(){
        return view('appp.contact');
    }

    public function team(){
        return view('appp.team');
    }

    public function testimonials(){
        return view('appp.testimonials');
    }
}
