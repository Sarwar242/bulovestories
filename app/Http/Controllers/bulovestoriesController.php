<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bulovestoriesController extends Controller
{
  public function index(){
    return view('index');
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
