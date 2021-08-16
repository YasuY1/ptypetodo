<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatsdoController extends Controller
{
    public function index()
    {
        return view('input');
    }
    // use illuminate\Support\Facades\DB;
    // public function post(Request $request)
    // {
    //     $title = $request->title;
    //     $data = ['title'=>'タイトルは'.$title.'です！',];
    //     return view('input', $data);
    // }
}
