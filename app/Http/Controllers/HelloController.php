<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            'title'=>'いまからPOSTを追加します。',
            'endline'=>'もう一つはここに出ます',
        ];
        return view('create', $data);
    }
    // use illuminate\Support\Facades\DB;
    public function post(Request $request)
    {
        $title = $request->title;
        $endline = $request->endline;
        $data = [
            'title'=>'POSTはせいこうしました。titleは'.$title.'です。',
            'endline'=>'もう一つの値は'.$endline.'です',
        ];
        return view('create', $data);
    }
}
