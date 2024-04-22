@extends('layouts.app')

@section('content')
    <h1 class="text-white">Name: {{ $user->name }}</h1>
    <p class="text-white">Email: {{ $user->email }}</p>
@endsection
