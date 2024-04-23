@extends('layouts.app')

@section('content')
    <h1 class="text-white">Name: {{ $user->name }}</h1>
    <p class="text-white">Email: {{ $user->email }}</p>
    <p class="text-white">bio: {{ $user->bio }}</p>


    <form method="post" action="{{ route('newPost') }}" style="max-width: 30rem" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="titre" :value="__('titre')" />
            <x-text-input id="titre" titre="titre" type="text" class="mt-1 block w-full" required autofocus autocomplete="titre" />
            <x-input-error class="mt-2" :messages="$errors->get('titre')" />
        </div>

        <div>
            <x-input-label for="contenu" :value="__('contenu')" />
            <x-text-area id="contenu" name="contenu" type="text" class="mt-1 block w-full" required autofocus autocomplete="contenu" />
            <x-input-error class="mt-2" :messages="$errors->get('contenu')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('new post') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
    
    @foreach ($user->posts as $post)
    <br>
    <p class="text-white">Titre :{{ $post->titre }}</p>
    <p class="text-white">content: {{ $post->contenu }}</p>
    @endforeach
@endsection
