<?php

namespace App\Http\Controllers;

use App\Models\Biography;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class BiographyController extends Controller
{
    public function index()
    {
        $biographies = Biography::query()->get();
        return view('admin.biography.index', compact("biographies"));
    }

    public function create()
    {
        return view('admin.biography.create');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'body' => 'required|string',
            'image' => 'required|image|file',
        ]);

        $biography = Biography::create($validation);
        if ($request->hasFile('image')) {
            $biography->addMediaFromRequest('image')->toMediaCollection('images');
        }

        return redirect()->route('biography.show', compact("biography"))
            ->with('success', 'Biography created successfully.');
    }

    public function show(Biography $biography)
    {
        return view('admin.biography.show', compact('biography'));
    }

    public function edit(Biography $biography)
    {
        return view('admin.biography.edit', compact('biography'));
    }

    /**
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function update(Request $request, Biography $biography)
    {
        $request->validate([
            'body' => 'string',
            'image' => 'image|file',
        ]);

        $biography->body = $request->input('body');

        if ($request->hasFile('image')) {
            $biography->clearMediaCollection('images');
            $biography->addMediaFromRequest('image')->toMediaCollection('images');
        }

        $biography->save();

        return redirect()->route('biography.index')
            ->with('success', 'Biography updated successfully.');
    }

    public function destroy(Biography $biography)
    {
        $biography->delete();

        return redirect()->route('biography.index')
            ->with('success', 'Biography deleted successfully.');
    }
}
