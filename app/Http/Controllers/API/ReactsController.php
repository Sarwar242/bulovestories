<?php

namespace App\Http\Controllers\API;

use App\Models\Story;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class ReactsController extends Controller
{

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