@extends('layouts.app')

@section('content')
    <h1 class="text-white">Titre: {{ $post->titre }}</h1>
    <p class="text-white">content: {{ $post->contenu }}</p>
@endsection
