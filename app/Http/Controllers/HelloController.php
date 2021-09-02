<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            'title'=>null,
            'endline'=>'もう一つはここに出ます',
        ];
        return view('hello.input', $data);
    }
    public function post(Request $request)
    {
        $validate_rule=[
            'title'=>'required',
            'endline'=>'required'
        ];
        $this->validate($request, $validate_rule);
        $title = $request->title;
        $endline = $request->endline;
        $data = [
            'title'=>'POSTは成功しました。titleは'.$title.'です。',
            'endline'=>'もう一つの値は'.$endline.'です',
        ];
        return view('hello.output', $data);
    }
}
