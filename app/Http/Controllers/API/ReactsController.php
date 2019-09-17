<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Love;
use App\Models\Story;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class ReactsController extends Controller
{

    public function store($storyId)
    {
        $story = Story::where('id', '=', $storyId)->first();

        $loveCheck = Love::where([['story_id', '=', $storyId],
            ['user_id', '=', Auth::user()->id]])->first();

        if ($loveCheck) {
            if ($story->loves >= 1) {
                $story->loves -= 1;
                $story->save();
            }
            $love = Love::where('story_id', $storyId)
                ->where('user_id', Auth::user()->id)->delete();

        } else {
            $story->loves += 1;
            $story->save();
            $love = new Love;
            $love->user_id = Auth::user()->id;
            $love->story_id = $storyId;
            $love->save();
        }

        return redirect()->route('newsfeed', $storyId);

    }
    public function postLike($storyId)
    {
        $story = Story::where('id', '=', $storyId)->first();

        if (!$story->likes->contains(Auth::user()->id)) {
            $story->likes()->attach(Auth::user()->id, [
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

        }
        return response()->json(['story_liked' => true], 201);

    }

    public function deleteLikeCafe($storyId)
    {
        $story = Story::where('id', '=', $storyId)->first();

        $story->likes()->detach(Auth::user()->id);

        return response(null, 204);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajaxRequest(Request $request)
    {

        $story = Story::find($request->id);
        $response = auth()->user()->toggleLike($story);

        return response()->json(['success' => $response]);
    }

}