<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function courses(){
        return view('pages.courses');
    }

    public function teachers(){
        return view('pages.teachers');
    }

    public function events(){
        return view('pages.events');
    }

    public function contact(){
        return view('pages.contact');
    }




}
