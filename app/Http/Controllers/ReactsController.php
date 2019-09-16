<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class ReactsController extends Controller
{

    // public function store(Request $request, $story_id)
    // {
    //     dd($story_id);

    //     $loveCheck = Love::where([
    //         'user_id' => Auth::id(),
    //         'story_id' => $story_id])->first();

    //     if ($loveCheck) {
    //         Love::where([
    //             'user_id' => Auth::id(),

    //             'story_id' => $story_id])->delete();
    //         return 'deleted';
    //     } else {
    //         $love = new Love;

    //         $love->user_id = Auth::id();
    //         $love->story_id = $story_id;
    //         $love->save();
    //         return 'success';

    //     }

    // }
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
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}