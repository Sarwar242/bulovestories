<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Story;

class bulovestoriesController extends Controller
{
  public function index(){
   $story = Story::all();
        return view('index')->with('stories', $story);
  }
  public function topstories(){
    return view('topstories');
  }
  public function notifications(){
    return view('notifications');
  }
  public function sharestory(){
    return view('sharestory');
  }
  public function dashboard(){
    return view('dashboard');
  }
  public function faq(){
    return view('faq');
  }
  public function about(){
    return view('about');
  }

}
