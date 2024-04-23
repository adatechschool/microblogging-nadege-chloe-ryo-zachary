<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <h1>{{ $user->name }}</h1>
    <p>{{ $user->email }}</p>
    <p>{{$user->biography}}</p>
    <button><x-nav-link :href="route('posts.create')" :active="request()->routeIs('posts.create')">
        {{ __('New post') }}
    </x-nav-link></button>

    @foreach ($user->posts as $post ) 
<div class="posts">
      <h2>{{$post->title}}</h2>
      <p>{{$post->content}}</p>   
</div>  
    @endforeach

</body>
</html>