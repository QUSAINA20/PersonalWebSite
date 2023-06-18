<?php

namespace App\Http\Controllers;

use App\Models\Specialization;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    public function index()
    {
        $specializations = Specialization::query()->get();
        return view('admin.specialization.index', compact("specializations"));
    }

    public function create()
    {
        return view('admin.specialization.create');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
        ]);

        $specialization = Specialization::create($validation);

        return redirect()->route('specialization.show', compact("specialization"))
            ->with('success', 'Specialization created successfully.');
    }

    public function show(Specialization $specialization)
    {
        return view('admin.specialization.show', compact('specialization'));
    }

    public function edit(Specialization $specialization)
    {
        return view('admin.specialization.edit', compact('specialization'));
    }

    public function update(Request $request, Specialization $specialization)
    {
        $request->validate([
            'body' => 'string',
            'title' => 'string',
        ]);

        $specialization->title = $request->input('title');
        $specialization->body = $request->input('body');

        $specialization->save();

        return redirect()->route('specialization.index')
            ->with('success', 'Specialization updated successfully.');
    }

    public function destroy(Specialization $specialization)
    {
        $specialization->delete();

        return redirect()->route('specialization.index')
            ->with('success', 'Specialization deleted successfully.');
    }
}
