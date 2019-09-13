<?php

namespace App\Http\Controllers;
use App\Models\UnderReview;
use Illuminate\Http\Request;

class underreviewController extends Controller
{
     public function store(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'story' => 'required',
        ]);

        $Story = new UnderReview;
        $Story->user_id = $id;
        $Story->title = $request->title;
        $Story->loves = 0;
        $Story->story = $request->story;
        $Story->save();
        return redirect()->route('index');
    }
}
