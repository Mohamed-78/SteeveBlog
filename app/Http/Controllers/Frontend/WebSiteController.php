<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebSiteController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function firstService()
    {
        return view('frontend.first_service');
    }

    public function formation()
    {
        return view('frontend.formation');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function detailsBlog()
    {
        return view('frontend.details_blog');
    }

    public function podcast()
    {
        return view('frontend.podcast');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
