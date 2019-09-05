<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Story;

class StoryController extends Controller
{
    public function store(Request $request,$id){
        $this->validate($request,[
            'title' => 'required',
            'story' => 'required',
        ]);

        $Story = new Story;
        $Story->user_id=$id;
        $Story->title=$request->title;
        $Story->story=$request->story;
        $Story->save();
        return redirect()->route('index');
    }

     public function ShowStory(){
         $story = Story::all();
        return view('index')->with('stories', $story);
     }
}
