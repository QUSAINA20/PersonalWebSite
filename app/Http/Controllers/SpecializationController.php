<?php

namespace App\Http\Controllers;

use App\Models\Specilizion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpecializationController extends Controller
{

    //********* get all speciliztion *********//
    public function index()
    {
      $specils = Specilizion::all();

      return view('admin.specialization.index', compact( 'specils'));
    }



    //********* create new speciliztion *********//

    public function create()
    {
        return view('admin.specialization.create');
    }

    public function store(Request $request)
    {
      $request->validate(
      [
        'title'    => 'required|min:2|max:30|string',
        'body' => 'required|min:2|max:250|string',
      ]);

      Specilizion::create(
      [
        'title'    => $request->input('title'),
        'body' => $request->input('body'),
    ]);
    return redirect()->route('specials.index')
    ->with('success', 'Specials created successfully.');
    // compact("id")
    }

    //********* update specilizion by id *********//
    public function update(Request $request,$id){

        DB::table('specilizions')->where('id',$id)->update([
            'title' =>$request->title,
            'body' => $request->body
        ]);

                return redirect()->route('specials.index')
                ->with('success', 'Specials updated successfully.');
        }
  public function show($id){
    $specil = Specilizion::findorFail($id);
    return view('admin.specialization.show', compact('specil'));
  }

    public function edit( $id)
{
    $specil = Specilizion::findorFail($id);
    return view('admin.specialization.edit', compact('specil'));
}


    //********* delete specilizion by id *********//
    public function destroy($id)
    {
       return redirect()->back()->with('status', Specilizion::find($id)->delete() ? "تم الحذف بنجاح" : 'يبدو أن هناك مشكلة');
    }

}

