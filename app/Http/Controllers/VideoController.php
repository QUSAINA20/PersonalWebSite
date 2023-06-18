<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.video.index', compact("videos"));
    }

    public function create()
    {
        return view('admin.video.create');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'section' => 'required',
            'link' => 'required'
        ]);

        $video = video::create($validation);

        return redirect()->route('video.show', compact("video"))
            ->with('success', 'Video created successfully.');
    }

    public function show(Video $video)
    {
        return view('admin.video.show', compact('video'));
    }

    public function edit(Video $video)
    {
        return view('admin.video.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {

        $request->validate([
            'name' => 'required',
            'section' => 'required',
            'link' => 'required',

        ]);

        $video->name = $request->input('name');
        $video->section = $request->input('section');
        $video->link = $request->input('link');



        $video->save();

        return redirect()->route('video.index')
            ->with('success', 'Video updated successfully.');
    }

    public function destroy(Video $video)
    {
        $video->delete();

        return redirect()->route('video.index')
            ->with('success', 'Video deleted successfully.');
    }
}
