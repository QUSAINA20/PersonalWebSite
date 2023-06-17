<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SpecializationResource;
use Illuminate\Http\Request;
use App\Models\Specilizion;
use Illuminate\Support\Facades\Validator;

class SpecializationController extends Controller
{
    use ApiResponseTrait;
    public function index(){
        // $specls = Specilizion::get();
        $specls = SpecializationResource::collection(Specilizion::get());
        return $this->apiResponse($specls,'ok',200);
    }
    public function show($id){
        $specls = Specilizion::find($id);
        if($specls){
            return $this->apiResponse(new SpecializationResource($specls),'ok',200);
        }
        return $this->apiResponse(null,'Specialization Not Found',404);
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:specilizions|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->apiResponse(null,$validator->errors(),400);
        }

        $specls = Specilizion::create($request->all());
        if($specls){
            return $this->apiResponse(new SpecializationResource($specls),'Saved',201);
        }
        return $this->apiResponse(null,'Specialization did not Save',400);
    }

    public function update(Request $request,$id){
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:specilizions|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->apiResponse(null,$validator->errors(),400);
        }

        $specls = Specilizion::find($id);

        if(!$specls){
            return $this->apiResponse(null,'Specialization Not Found',404);
        }

        $specls->update($request->all());
        if($specls){
            return $this->apiResponse(new SpecializationResource($specls),'updated',201);
        }

        return $this->apiResponse(null,'Specialization Not Found',404);
    }

    public function destory($id){
        $specls = Specilizion::find($id);
        if(!$specls){
            return $this->apiResponse(null,'Specialization Not Found',404);
        }
        $specls->delete($id);
        if($specls){
            return $this->apiResponse(null,'The Sepecialization is deleted',200);
        }
    }
}
