<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\TestRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(Request $request)
    {
        if(isset($request->id)){
            $param = ['id'=>$request->id];
            $items = DB::select('selct * from test where id = :id',$param);
        }else{
            $items = DB::select('select * from test');
        }
        return view('test',['items'=>$items]);
    }

    public function post(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'mail'=>'email',
            'age'=>'numeric|between:0,150',
        ]);
        if($validator->fails()){
            return redirect('test')->withErrors($validator)->withInput();
        }
        return view('test',['msg'=>'正しく入力されました！']);
    }

    public function edit(Request $request){
        $param = ['id'=> $request->id];
        $item = DB::select('select * from test where id = :id',$param);
        return view('testedit',['from'=>$item[0]]);
    }

    public function update(Request $request){
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::update('update test set name =:name, mail = :mail, age= :age where id=: id',$param);
        return redirect('test');
    }
}
