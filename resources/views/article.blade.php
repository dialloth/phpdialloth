@extends('layouts/main')

@section('content')

<h3 style = 'color: red';>{{$post->post_title }}<small>: Ecrit par {{$post->author->name}} {{$post->post_date}}</small></h3>
  {{ $post->post_content }}

@endsection
