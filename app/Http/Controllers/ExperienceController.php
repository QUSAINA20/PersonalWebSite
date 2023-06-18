<?php

namespace App\Http\Controllers;


use App\Models\Experience;
use App\Http\Requests\ExperienceStore;
use App\Http\Requests\ExperienceUpdate;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = Experience::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.experience.index' , compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExperienceStore $request)
    {
        $validated = $request->validated();
        if($validated) {
            $experience= new Experience();
            $experience->title = $request->input('title');
            $experience->date = $request->input('date');
            $experience->content = $request->content;
            $experience->save();
        }
        toastr()->success('experience created successfully.');
        return redirect()->route('experience.show', compact("experience"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        return view('admin.experience.show', compact('experience'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        return view('admin.experience.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExperienceUpdate $request,Experience $experience)
    {
        $validated = $request->validated();
        if($validated) {

            $experience->title = $request->input('title');
            $experience->date= $request->input('date');
            $experience->content = $request->content;
            $experience->save();
        }
        toastr()->success('experience updated successfully.');
        return redirect()->route('experience.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Soft Delete
    public function SoftDelete($id)
    {
        $experience = Experience::find($id);
        $experience->delete();
        toastr()->success('experience moved to trash');
        return redirect()->route('experience.index');
    }

    //show trash
    public function trashExperiences()
    {
        $experiences = Experience::onlyTrashed()->orderBy('deleted_at', 'desc')->paginate(10);
        return view('admin.experience.trash' , compact('experiences'));
    }

    //restore from trached
    //function restore return true or false
    public function restore($id){
        $experience = Experience::onlyTrashed()->where('id' , $id)->first()->restore();
        toastr()->success('experience Restored Successfuly');
        return redirect()->route('experience.index');
    }

    //delete forever
    public function forceDelete($id)
    {
        $experience = Experience::onlyTrashed()->find($id);
        $experience->forcedelete();
        toastr()->success('experience deleted successfully.');
        return redirect()->route('experience.trash');

    }

}
