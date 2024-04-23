@extends('layouts.app')

@section('content')
    <h1 class="text-white">Name: {{ $user->name }}</h1>
    <p class="text-white">Email: {{ $user->email }}</p>
    <p class="text-white">bio: {{ $user->bio }}</p>
    
    @foreach ($user->posts as $post)
    <br>
    <p class="text-white">Titre :{{ $post->titre }}</p>
    <p class="text-white">content: {{ $post->contenu }}</p>
    @endforeach
@endsection
