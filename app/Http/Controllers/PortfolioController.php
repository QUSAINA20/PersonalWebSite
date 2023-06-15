<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio.index', compact("portfolios"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'section' => 'required',
            'image' => ['required', 'image', 'file'],
            'link' => 'required'
        ]);

        $portfolio = Portfolio::create($validation);
        if ($request->hasFile('image')) {
            $portfolio->addMediaFromRequest('image')->toMediaCollection('images');
        }
        return redirect()->route('portfolio.show', compact("portfolio"))
            ->with('success', 'portfolio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view('admin.portfolio.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {

        $request->validate([
            'name' => 'required',
            'section' => 'required',
            'link' => 'required',
            'image' => ['image', 'file'],
        ]);

        $portfolio->name = $request->input('name');
        $portfolio->section = $request->input('section');
        $portfolio->link = $request->input('link');

        if ($request->hasFile('image')) {
            $portfolio->clearMediaCollection('images');
            $portfolio->addMediaFromRequest('image')->toMediaCollection('images');
        }

        $portfolio->save();

        return redirect()->route('portfolio.index')
            ->with('success', 'Portfolio updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        return redirect()->route('portfolio.index')
            ->with('success', 'Portfolio deleted successfully.');
    }
}
