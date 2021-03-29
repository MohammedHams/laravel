<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TestController extends Controller
{


    public function __construct()
    {

    }
    public function getTeachers(){
     return   Teacher::get();
    }
    Public function storeTeacher(){
        Teacher::create([
            'Name'=>'Ahmad',
            'ID'=>'2',
            'Level'=>'10'

        ]);}
        Public function create(){
            return view('teachers.create');
        }
    Public function store(Request $request){
       $rules= [
            'ID'=>'required|max:100|numeric|unique',
            'Name'=>'required',
            'Level'=>'required',

        ];
        $validator=\Illuminate\Support\Facades\Validator::make($request->all(),$rules,[
            'ID.required'=>'hello',
            'Name.numeric'=>'hello numeric'
        ]);
        if ($validator->fails()){
            return $validator ->errors();
        }
    Teacher::create([
        'ID' =>$request->ID,
        'Name' =>$request->Name,
        'Level' =>$request->Level,


    ]);
        return 'saved success';

  }


}
