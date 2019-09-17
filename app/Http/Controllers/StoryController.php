<?php

namespace App\Http\Controllers;

use App\Models\Love;
use App\Models\Story;
use Auth;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'story' => 'required',
        ]);

        $Story = new Story;
        $Story->user_id = $id;
        $Story->title = $request->title;
        $Story->review = 0;
        $Story->story = $request->story;
        $Story->save();
        return redirect()->route('dashboard');
    }

    public function readmore($id)
    {

        $story = Story::find($id);
        return view('readmore')->with('story', $story);
    }
    public function newsfeed($id)
    {

        $story = Story::find($id);
        $love = Love::where('story_id', $id)
            ->where('user_id', Auth::user()->id)->first();
        if ($love) {
            $loveck = 1;
        } else {
            $loveck = 0;
        }
        return view('readmorenews')->with('story', $story)->with('lc', $loveck);
    }
    public function editstory($id)
    {
        $story = Story::find($id);
        return view('editstory')->with('story', $story);
    }

    public function updatestory(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'story' => 'required',
        ]);

        $Story = Story::find($id);
        $Story->title = $request->title;
        $Story->story = $request->story;
        $Story->save();
        return redirect()->route('dashboard');

    }
    public function delete($id)
    {
        $story = Story::find($id);
        $story->delete();
        return redirect()->route('dashboard');

    }

}