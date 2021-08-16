@extends('layouts.testTP')

@section('title','ミドルウェアテスト用')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>コンテンツの本文</p>
  <p>これは、<middleware>google.com</middleware>へのリンクです。</p>
  <p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです。</p>
@endsection

@section('footer')
copyright
@endsection