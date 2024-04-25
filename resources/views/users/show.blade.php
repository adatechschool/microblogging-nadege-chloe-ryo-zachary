<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<x-app-layout>
<body>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">{{ $user->name }}</h1>
        <p>{{ $user->email }}</p>
        <p>{{$user->biography}}</p>
        <button><x-nav-link :href="route('posts.create')" :active="request()->routeIs('posts.create')">
            {{ __('New post') }}
        </x-nav-link></button>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @foreach ($user->posts as $post ) 
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
<div class="posts">
      <h2>{{$post->title}}</h2>
      <p>{{$post->content}}</p>   
</div>  
</div>
    @endforeach
</div>
</div>

</body>
</x-app-layout>
</html>