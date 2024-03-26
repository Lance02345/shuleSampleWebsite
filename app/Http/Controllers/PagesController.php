<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $news = News::all(); // Assuming you have a News model
        return view('pages.index', compact('news'));
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

    public function login(){
        return view('auth.login');
    }




}
