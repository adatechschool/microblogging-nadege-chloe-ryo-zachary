<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New post</title>
</head>
<x-app-layout>
<body>
    <x-slot name="header">
    <h1>New post</h1>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
    <form method="post" action="{{url('/new-post') }}">
        @csrf
        <input type="hidden" name='user_id' value="{{ Auth::user()->id}}">
        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"  autofocus autocomplete="title" />
            <x-input-error class="mt-2" :messages="$errors->get('title')" />
        </div>
    
        <div>
            <x-input-label for="content" :value="__('Content')" />
            <x-text-area id="content" name="content" type="text" class="mt-1 block w-full"  autofocus autocomplete="content" />
            <x-input-error class="mt-2" :messages="$errors->get('content')"/>
        </div>
    
        <button type='submit'>Send</button>
    </form>
</div>
</div>
</div>
</body>
</x-app-layout>
</html>