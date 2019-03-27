@extends('layouts.main')
@section('content')
    <p style ='color: black';>Merci, votre message a été bien envoyé à l'administrateur du site.
    Vous recevrez une réponse rapidement !

    <p style="text-align: center;"><strong><em>Listes de personnes qui nous ont contacté </strong></em></p>

    @foreach ($Contacts as $contact)
        <ul> <a href="#">{{ $contact->contact_name }}</a></ul>
   @endforeach 
@endsection