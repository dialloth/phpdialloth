@extends('layouts/main')

@section('content')

<h3 style = 'color: red';>{{$post->post_title }}<small>: Ecrit par {{$post->author->name}} {{$post->post_date}}</small></h3>
<img  class="thumb" src="https://newsinafrica.co/wp-content/uploads/2018/01/web.jpg">
  {{ $post->post_content }}
  <div class="clallut">
  <ul class = "Menu simple">
{{--}}<li><a href="#">Author: {{ $post->post_author }}</a></li>
{{--<li><a href="#">Comments : aucun commentaire  </a></li> --}}


    @foreach($post->comments as $comment)
      <div>
        {{$comment->comment_name}}
        <br/>{{$comment->comment_content}}
      </div>
    @endforeach

    <form action="{{ url('/comment')}}" method="POST">
      {{ csrf_field() }}
      <input type="hidden" name="post_id" value="{{$post->id}}">
      <div class="form-group">
        <input type="text" class="form-control {{ $errors->has('comment_name') ? 'is-invalid' : '' }}"
               name="comment_name" id="comment_name" placeholder=" Votre prénom "
               value="{{ old('contact_name') }}"> {!! $errors->first('comment_name', '
                            <div class="invalid-feedback">:message</div>') !!}
      </div>
      <div class="form-group">
        <input type="email" class="form-control {{ $errors->has('comment_email') ? 'is-invalid' : '' }}"
               name="comment_email" id="comment_email" placeholder=" Votre email"
               value="{{ old('comment_email') }}"> {!! $errors->first('comment_email', '
            <div class="invalid-feedback">:message</div>') !!}
      </div>
      <div class="form-group">
        <textarea class="form-control {{ $errors->has('comment_content') ? 'is-invalid' : '' }}"
                  name="comment_content" id="comment_content" placeholder="Votre commentaire">{{ old('comment_content') }}
        Votre commentaire</textarea> {!! $errors->first('comment_content', '
         <div class="invalid-feedback">:comment</div>') !!}
      </div>
      <button type="submit" class="btn"> Envoyer !</button>
    </form>

@endsection
