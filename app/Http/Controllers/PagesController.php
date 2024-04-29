<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\Teacher;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $news = News::all(); 
        $teachers = Teacher::all();
        return view('pages.index', compact('news', 'teachers'));
    }

    public function courses(){
        return view('pages.courses');
    }

    public function teachers(){
        $teachers = Teacher::all();
        return view('pages.teachers', compact('teachers'));
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('pages.show', compact('news'));
    }

    public function events(){
        $news = News::all(); // Assuming you have a News model
        return view('pages.events', compact('news'));
    }



    public function contact(){
        return view('pages.contact');
    }

    public function login(){
        return view('auth.login');
    }




}
