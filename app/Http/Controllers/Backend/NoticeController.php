<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function store()
    {
        return view('admin.post');
    }
    public function insert(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'details' => 'required',
        ]);

        $notice = new Notice;
        $notice->admin_id = session('adminId');
        $notice->title = $request->title;
        $notice->details = $request->details;
        $notice->save();

        return redirect()->route('homeadmin');

    }
}