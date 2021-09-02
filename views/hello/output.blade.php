@extends('layouts.ptodo')
@section('otherstyle')
<link rel="stylesheet" href="styles/outputPage.css">
@endsection
@section('main')
    <div class="cutArea">
      <p>{{$title}}</p>
      <p>{{$endline}}</p>
      <table>
        <thead>
          <tr>
            <th>タイトル</th><th>期限</th><th></th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
@endsection