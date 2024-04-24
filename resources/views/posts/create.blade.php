<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New post</title>
</head>
<body>
    <h1>New post</h1>

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
            <x-text-input id="content" name="content" type="text" class="mt-1 block w-full"  autofocus autocomplete="content" />
            <x-input-error class="mt-2" :messages="$errors->get('content')"/>
        </div>
    
        <button type='submit'>Send</button>
    </form>
</body>
</html>