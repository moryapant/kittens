<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('header')

    <body class="bg-gray-200">

@include('navbar')

{{-- main --}}
<div class="mt-12">

    {{-- main Wallpaper --}}

    {{-- {{dd(Request::url())}} --}}

    @if(Route::current()->getName() == 'video')
   
<div class="w-max max-w-full mx-auto p-2">
    <img src="/img/wallv.png" alt="">
</div>

@elseif(Route::current()->getName() == 'review')

<div class="w-max max-w-full mx-auto p-2">
    <img src="/img/wallr.png" alt="">
</div>
@elseif(Route::current()->getName() == 'jerkoff')
<div class="w-max max-w-full mx-auto p-2">
    <img src="/img/wallf.png" alt="">
</div>

@else
<div class="w-max max-w-full mx-auto p-2">
    <img src="/img/walla.png" alt="">
</div>


@endif


   {{-- main featured Image --}}
@include('featured')
    {{-- main featured Image --}}

   {{-- main news Image --}}
   @include('news')
   {{-- main news Image --}}




</div>






@include('uppersection')

    <div class="container mx-auto">
        <div class="flex w-960 mx-auto">
            <div class="w-2/3">
                <div class="py-2">

                @foreach($posts as $post )
                    <div class="flex border border-grey-light-alt hover:border-grey rounded bg-white cursor-pointer">
                        <div class="w-1/12 flex flex-col text-center pt-2">
                            <i class="fas fa-arrow-alt-circle-up fa-2x text-gray-300"></i>
                            <span class="text-xs font-semibold my-1">20k</span>
                            <i class="fas fa-arrow-alt-circle-down fa-2x text-red-500"></i>
                        </div>
                        <div class="w-11/12 pt-2">
                            <div class="flex items-center text-xs mb-2">
                                <a href="/{{ $post->topic->first()->slug }}" class="font-semibold no-underline hover:underline text-black flex items-center">

                                    @if($post->topic->first()->slug =='video' )
                                    <img class="rounded-full border h-8 w-8 object-fit" src="/img/logo5.png">
                                    @elseif($post->topic->first()->slug =='review')
                                    <img class="rounded-full border h-8 w-8 object-fit" src="/img/logo6.png">
                                    @else
                                    <img class="rounded-full border h-8 w-8 object-fit" src="/img/logo7.png">
                                    @endif

                                    <span class="ml-2">b/{{ $post->topic->first()->name }}</span>
                                </a>
                                <span class="text-grey-light mx-1 text-xxs">•</span>
                                <span class="text-grey">Posted by</span>
                                <a href="#" class="text-grey mx-1 no-underline hover:underline">u/{{$post->user->name}}</a>
                                <span class="text-grey mr-2">{{$post->created_at->diffForHumans()}}</span>


                                <span class="text-white bg-blue-400 rounded-lg p-1 justify-right">{{$post['views']->count() }} views</span>

                            </div>
                        <div class="">
                                <a href="/post/{{ $post->slug }}" class="text-lg font-medium mb-1 capitalize"></h2>{{$post->title}}</a>

                            @foreach($post['tags']->pluck('slug') as $key => $slug)


                                    <span class="text-xs font-semibold p-2 bg-gray-500 rounded-full items-center ml-2 mb-4 inline-flex text-white"> {{ $slug }}</span>



                            @endforeach
                        </div>



                        @foreach($post['topic']->pluck('name') as $key => $name)
                            @if($name == 'Review')
                            <a href="/post/{{ $post->slug }}"> 
                                <div class="items-center">
                                <img class="object-cover max-h-auto mx-auto p-1 w-full" src="{{$post->featured_image}}" alt="">
                            </div>
                            </a>

                            @else
                            <a href="/post/{{ $post->slug }}"> 
                                <div class="items-center">
                                <img class="object-cover max-h-auto mx-auto p-1 w-1/2" src="{{$post->featured_image}}" alt="">
                                </div>
                            </a>
                            @endif

                        @endforeach



                            <div class="inline-flex items-center my-1">
                                <div class="flex hover:bg-grey-lighter p-1">
                                    <svg class="w-4 fill-current text-grey" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-4 4v-4H2a2 2 0 0 1-2-2V3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-8zM5 7v2h2V7H5zm4 0v2h2V7H9zm4 0v2h2V7h-2z"/></svg>
                                    <a class="ml-2 text-xs font-semibold text-grey" href="/post/{{ $post->slug }}">{{$post['comments']->count() }} Comments</a>
                                </div>
                                <div class="flex hover:bg-grey-lighter p-1 ml-2">
                                    <svg class="w-4 fill-current text-grey" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5.08 12.16A2.99 2.99 0 0 1 0 10a3 3 0 0 1 5.08-2.16l8.94-4.47a3 3 0 1 1 .9 1.79L5.98 9.63a3.03 3.03 0 0 1 0 .74l8.94 4.47A2.99 2.99 0 0 1 20 17a3 3 0 1 1-5.98-.37l-8.94-4.47z"/></svg>
                                    <span class="ml-2 text-xs font-semibold text-grey">Share</span>
                                </div>
                                <div class="flex hover:bg-grey-lighter p-1 ml-2">
                                    <svg class="w-4 fill-current text-grey" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 2C0 .9.9 0 2 0h14l4 4v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5 0v6h10V2H5zm6 1h3v4h-3V3z"/></svg>
                                    <span class="ml-2 text-xs font-semibold text-grey">Save</span>
                                </div>
                                <div class="flex hover:bg-grey-lighter p-1 ml-2 rotate-90">
                                    <svg class="w-4 fill-current text-grey" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-6a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>
                                </div>
                            </div>
                        </div>

                    </div>

            @endforeach


        </div>
        {{ $posts->links() }}
            </div>
   @include('sidebar')
        </div>
    </div>




</div>
{{-- sidebar --}}
{{-- blog --}}

{{-- main --}}
</body>
</html>
