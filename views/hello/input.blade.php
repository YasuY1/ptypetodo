@extends('layouts.ptodo')
@section('otherstyle')
<link rel="stylesheet" href="styles/inputPage.css">
@endsection
@section('main')
  @if(count($errors)>0)
    <div class="errorModal">
      <ul>
        @if($errors->has('title') && $errors->has('endline'))
          <script>alert('入力が何もされていません');</script>
        @elseif($errors->has('title'))
          <script>alert('タイトルを入力してください');</script>
        @elseif($errors->has('endline'))
          <script>alert('日付が指定されていません');</script>
        @endif
      </ul>
    </div>
  @endif
  
    <form method="POST" action="hello">
      {{ csrf_field() }}
      <label for="titlebox_class" class="titletitle">タイトル</label>
        <input type="text" name="title" class="titlebox" value={{$title}}>
      <label for="titlebox_class" class="endlinetitle">期限</label>
        <input type="date" name="endline" class="endlinebox">
      <input type="submit" class="submitbtn">
    </form>
@endsection