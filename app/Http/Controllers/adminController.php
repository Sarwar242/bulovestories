<?php

namespace App\Http\Controllers;
use App\Story;
use Illuminate\Http\Request;

class adminController extends Controller
{
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
