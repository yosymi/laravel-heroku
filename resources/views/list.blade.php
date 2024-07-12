<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
@extends('layouts.base')
@section('title', '書籍リスト')
@section('main')
<h2>書籍リスト</h2>
<p>書籍の新規登録は<a href="/create">こちら</a></p>
<table class="table">
  <tr>
    <th>書名</th>
    <th>価格</th>
    <th>出版社</th>
    <th>刊行日</th>
    <th></th>
  </tr>
  @foreach($records as $record)
  <tr>
    <td>{{$record->title}}</td>
    <td>{{$record->price}}円</td>
    <td>{{$record->publisher}}</td>
    <td>{{$record->published}}</td>
    <td>
      <a href="{{$record->id}}/edit">編集</a>|
      <a href="{{$record->id}}">削除</a>
    </td>
  </tr>
  @endforeach
@endsection