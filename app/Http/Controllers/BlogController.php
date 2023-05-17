<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'Home',
            'blogs' => Blog::all(),
        ]);
    }

    public function profil() 
    {
        return view('profil', [
            'title' => 'Profil'
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About'
        ]);
    }

    public function detail($id)
    {
        return view('detail', [
            'title' => 'Detail',
            'data' => Blog::find($id),
        ]);
    }
}
