<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clients = Client::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $info = $request->validate(
            ['name' => 'required|string']);
           $client = Client::create($info);
            if ($request->hasFile('image')) {
                $client->addMediaFromRequest('image')->toMediaCollection('images');
            }
            return redirect()->route('clients.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
      return view('admin.clients.show', ['client' => $client]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)

    {
        return view('admin.clients.edit', ['client' => $client]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Client $client, Request $request)
    {
        $request->validate(
            ['name' => 'string']);
            $client->name = $request->name;
            if ($request->hasFile('image')) {
                $client->clearMediaCollection('images');
                $client->addMediaFromRequest('image')->toMediaCollection('images');
            }
            $client->save();
            return redirect()->route('clients.update', $client)->with('success','Client info was updated');
            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('success','client was deleted');

    }
}
