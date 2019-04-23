@extends('layouts.main')

@section('content')

<!DOCTYPE html>
<html>
<body>


<h3 style="text-align: center;">Contactez-nous </h3>

<p> <em> Vous avez une question ou une proposition à nous faire sur nos produits ou sur nos services?
Ce <strong> formulaire </strong> est là pour ça ! Nos équipes vous répondront dans les plus brefs delais ! </p>

    <form action="{{ url('/contact') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" class="form-control {{ $errors->has('contact_name') ? 'is-invalid' : '' }}" name="contact_name" id="contact_name" placeholder="Votre nom"
                   value="{{ old('contact_name') }}"> {!! $errors->first('contact_name', '
                            <div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <input type="email" class="form-control {{ $errors->has('contact_email') ? 'is-invalid' : '' }}" name="contact_email" id="contact_email" placeholder="Votre email"
                   value="{{ old('contact_email') }}"> {!! $errors->first('contact_email', '
            <div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <textarea class="form-control {{ $errors->has('contact_message') ? 'is-invalid' : '' }}" name="contact_message" id="contact_message" placeholder="Votre message">{{ old('contact_message') }}</textarea>                            {!! $errors->first('contact_message', '
         <div class="invalid-feedback">:message</div>') !!}
        </div>
        <button type="submit" class="btn"> Envoyer !</button> 
    </form>
     <style>
        btn {
          color: #fff;
          background-color:#ff7a00;
          padding: 6px 10px;
          border-radius: 3px;
}
        btn:hover {
          color: #fff;
        background-color:#02b8dd;
}
  </style>

    </body></html>
    
 <!-- @foreach ($Contacts as $contact)
        <ul>{{ $contact->contact_name }}</ul>
   @endforeach  -->
   
@endsection

