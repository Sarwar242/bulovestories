<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Auth;
use Illuminate\Support\Facades\DB;

class bulovestoriesController extends Controller
{
    public function index()
    {
        $story = Story::orderBY('updated_at', 'desc')->where('review', 1)->get();

        return view('index')->with('stories', $story);
    }
    public function topstories()
    {
        return view('topstories');
    }
    public function confessions()
    {
        return view('confessions');
    }
    public function sharestory()
    {
        return view('sharestory');
    }
    public function dashboard()
    {
        $id = auth()->user()->id;

        /*  $id = Auth::user()->id; */

        $story = DB::table('stories')->where('user_id', $id)
            ->orderBY('created_at', 'desc')->get();

        return view('dashboard')->with('stories', $story);
    }
    public function faq()
    {
        return view('faq');
    }
    public function about()
    {
        return view('about');
    }

}