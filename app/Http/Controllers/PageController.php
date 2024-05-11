<?php

namespace App\Http\Controllers;
use App\Models\University;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $topUniversities = University::orderBy('marks', 'desc')->take(3)->get();
        return view("index", compact("topUniversities"));
    }


    public function about() {
        return view("about");
    }

    public function contact() {
        return view("contact");
    }

    public function schools() {
        return view("schools");
    }

    public function team() {
        return view("team");
    }

    public function testimonial() {
        return view("testimonial");
    }

    public function page404() {
        return view("page404");
    }

    public function raking() {
        return view("raking");
    }

    public function admin_dashboard() {
        return view("admin.admin_dashboard");
    }

    public function schools_list() {
        return view("admin.schools_list");
    }
}
