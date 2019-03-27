@extends('layouts/main')

@section('content')
<h1> Ici, c'est la page articles ! </h1>
<ul>
	
@foreach ( $posts as $post )
	<p style = 'color: red';>
		<a href="\blog3old\public\articles\{{$post->post_name}}">{{ $post->post_title }}</a></p>
 <ul>{{ $post->post_content }}</ul> 
</ul>
@endforeach


@endsection
