<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Story;

class AdminsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function homeadmin()
    {
        $story = Story::orderBY('updated_at', 'desc')->get();
        return view('admin/homeadmin')->with('stories', $story);

    }
    public function confessionpage()
    {
        return view('admin/confessionpage');
    }
    public function admins()
    {
        return view('admin/admins');
    }
    public function members()
    {
        return view('admin/members');
    }
    public function ShowStory()
    {
        $story = Story::all();
        return view('homeadmin')->with('stories', $story);
    }
}