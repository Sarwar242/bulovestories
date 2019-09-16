<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Story;
use App\Models\User;
use Illuminate\Http\Request;

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
        $admin = Admin::all();

        return view('admin.admins')->with('admins', $admin);
    }
    public function members()
    {
        $users = User::all()
            ->where('status', 1);

        return view('admin.members')->with('users', $users);
    }
    public function inactivemembers()
    {
        $users = User::all()
            ->where('status', 0);

        return view('admin.members')->with('users', $users);

    }
    public function ShowStory()
    {
        $story = Story::all();
        return view('homeadmin')->with('stories', $story);
    }
    public function review()
    {
        $story = Story::all()->where('review', 0);
        return view('admin.underreview')->with('stories', $story);
    }
    public function reviewed()
    {
        $story = Story::all()->where('review', 1);
        return view('admin.reviewed')->with('stories', $story);
    }
    public function fullstory($id)
    {
        $story = Story::find($id);
        return view('admin.fullstory')->with('story', $story);
    }
    public function fullstoryreviewed($id)
    {
        $story = Story::find($id);
        return view('admin.fullstoryreviewed')->with('story', $story);
    }
    public function storyapprove(Request $request, $id)
    {
        $story = Story::find($id);
        $story->review = 1;
        $story->save();
        return redirect()->route('review');

    }
}