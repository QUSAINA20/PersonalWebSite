<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
 
    public function index()
    {
        $achievements = Achievement::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.achievement.index', compact('achievements'));
    }


    public function create()
    {
        return view('admin.achievement.create');
    }


    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|string|max:225',
            'body' => 'required|string',
            'date' => 'required'
        ]);
        Achievement::create($validation);


        return redirect()->route('achievement.index')
            ->with('success', 'achievement created successfully.');
    }

    public function show(Achievement $achievement)
    {
        return view('admin.achievement.show', compact('achievement'));
    }


    public function edit(Achievement $achievement)
    {
        return view('admin.achievement.edit', compact('achievement'));
    }

    public function update(Request $request, Achievement $achievement)
    {
        $request->validate([
            'name' => 'string|max:225',
            'body' => 'string',
            'date' => 'string'
        ]);
        $achievement->name = $request->name;
        $achievement->date = $request->date;
        $achievement->body = $request->body;
        $achievement->save();
        return redirect()->route('achievement.show', $achievement)
            ->with('success', 'achievement updated successfully.');
    }


    public function destroy(Achievement $achievement)
    {
        $achievement->delete();
        return redirect()->route('achievement.index')
            ->with('success', 'achievement deleted successfully.');
    }
}
