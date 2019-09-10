<?php

namespace App\Http\Controllers;

use App\Models\Story;
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
        $Story->rating = 0;
        $Story->story = $request->story;
        $Story->save();
        return redirect()->route('index');
    }

    public function readmore($id)
    {
        $story = Story::find($id);
        return view('readmore')->with('story', $story);
    }
    public function newsfeed($id)
    {
        $story = Story::find($id);
        return view('readmorenews')->with('story', $story);
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