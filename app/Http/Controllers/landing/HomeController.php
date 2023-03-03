<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('landing.home.index');
    }

    public function about()
    {
        return view('landing.about.index');
    }
    public function blog()
    {
        return view('landing.blog.index');
    }
    public function service()
    {
        return view('landing.service.index');
    }
    public function contact()
    {
        return view('landing.contact.index');
    }
    public function blogDetails($id)
    {
        $blog = Blog::where("id", $id)->first();
        return view('landing.blog.blog-details', compact('blog'));
    }
}
