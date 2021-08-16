@extends('layouts.ptodo')
@section('main')
  <main>
    <form method="POST" action="hello">
      {{ csrf_field() }}
      <label for="titlebox_class" class="titletitle">タイトル</label>
        <input type="text" name="title" class="titlebox">
      <label for="titlebox_class" class="endlinetitle">期限</label>
        <input type="text" name="endline" class="endlinebox">
      <input type="submit" class="submitbtn">
    </form>
    <!-- 後でカット -->
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