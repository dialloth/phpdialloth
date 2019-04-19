@extends('layouts/main')

@section('content')
    <h2 style = 'color:red';>Ici c'est la page d'accueil </h2>
    <p> Retrouvez <strong><em>les trois derniers articles de mon blog </strong> </em>: </p>
    @foreach ( $posts as $post )
        <h3 style = 'color: red';>
            <a href="\blog3old\public\articles\{{$post->post_name}}">{{ $post->post_title }}</a></h3>
        <ul>{{ $post->post_content }}</ul>
        </ul>
    @endforeach
@endsection