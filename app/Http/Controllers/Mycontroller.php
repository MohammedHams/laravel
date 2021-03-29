<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class Mycontroller extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth');
    }

    public function Minefun()
    {
        return 'myfun';
    }
    public function Minefun2()
    {
        return 'myfun';
    }
    public function getIndex()
    {
        $obj = new \stdClass();
        $obj -> name = 'ahmed';
        $obj -> id = '1';
        $obj -> age = '24';

        return view('welcome', compact('obj'));
    }


};
