@extends('layouts/main')

@section('content')
<h1> Ici, c'est la page articles ! </h1>
<ul>
	
@foreach ( $posts as $post )
	<h3 style = 'color: red';>
		<a href="\blog3\public\articles\{{$post->post_name}}">{{ $post->post_title }}</a></h3>
  <ul>{{ $post->post_content }}</ul>
</ul>
@endforeach


@endsection
