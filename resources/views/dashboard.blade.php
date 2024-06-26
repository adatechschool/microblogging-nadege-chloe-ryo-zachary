<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Bonjour !") }}
                    <iframe src="https://giphy.com/embed/bcKmIWkUMCjVm" width="480" height="349" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/animated-hello-waving-bcKmIWkUMCjVm"></a></p>
                </div>

            </div>
             
        </div>
        
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
    @foreach ($posts as $post )
    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
    <div class="bg-white py-24 sm:py-32">
         <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <article class="flex max-w-xl flex-col items-start justify-between">
                <div class="flex items-center gap-x-4 text-xs">
                  <time datetime="2020-03-16" class="text-gray-500">{{$post->created_at}}</time>
                </div>
                <div class="group relative">
                  <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      {{$post->title}}
                    </a>
                  </h3>
                  <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{$post->content}}</p>
                </div>
                <div class="relative mt-8 flex items-center gap-x-4">
                  <div class="text-sm leading-6">
                    <p class="font-semibold text-gray-900">
                      <a href="#">
                        <span class="absolute inset-0"></span>
                        {{$post->user->name}}
                      </a>
                    </p>
                  </div>
                </div>
              </article>
            </div>
            </div>
            </div>
            </div>
              @endforeach
          </div>

</x-app-layout>
