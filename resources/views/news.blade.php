<!-- Component Code -->
<div class="max-w-screen-xxl w-full mx-auto p-5 sm:p-10 md:p-16">




    <div class="grid grid-cols-5 gap-4 ">
        <div class="relative h-64 w-full flex items-center bg-cover bg-center" style="background-image:url(/img/back.png);">

          <p class="block items-center text-center mx-auto rounded-md text-white font-semibold text-2xl"> Hottest News </p>

        </div>

        @foreach($hots as $hot)
        <div class="relative h-64 w-full flex items-end justify-start text-left bg-cover bg-top" style="background-image:url({{ $hot->featured_image }});">
            <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900"></div>
            <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
              <a href="/{{ $hot->topic->first()->slug }}" class="text-xs bg-indigo-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-indigo-600 transition ease-in-out duration-500">{{ $hot->topic->first()->name }}</a>
              <div class="text-white font-regular flex flex-col justify-start">
                <span class="text-3xl leading-0 font-semibold">{{ $hot->views->count() }}</span>
                <span class="-mt-3 mt-1">View</span>
              </div>
            </div>
            <main class="p-5 z-10">
              <a href="/post/{{ $hot->slug }}" class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">{{ $hot->title}}
              </a>
            </main>

        </div>

        @endforeach
        {{-- <div class="relative h-64 w-full flex items-end justify-start text-left bg-cover bg-center" style="background-image:url(https://scontent.fbom16-1.fna.fbcdn.net/v/t1.6435-9/115759234_2640550696273490_4434515161812125957_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=0debeb&_nc_ohc=zweq_4s1w3gAX8O5BYA&_nc_ht=scontent.fbom16-1.fna&oh=13f963527f7386484ddeb9427c51acee&oe=61CADEB1);">
            <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900"></div>
            <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
              <a href="#" class="text-xs bg-indigo-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-indigo-600 transition ease-in-out duration-500">Review</a>
              <div class="text-white font-regular flex flex-col justify-start">
                <span class="text-3xl leading-0 font-semibold">10</span>
                <span class="-mt-3">Mar</span>
              </div>
            </div>
            <main class="p-5 z-10">
              <a href="#" class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Afghanistan's President Ashraf Ghani Speaks At The Council
              </a>
            </main>

        </div>
        <div class="relative h-64 w-full flex items-end justify-start text-left bg-cover bg-center" style="background-image:url(https://i.redd.it/g6usqndctq281.jpg);">
            <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900"></div>
            <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
              <a href="#" class="text-xs bg-indigo-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-indigo-600 transition ease-in-out duration-500">Video</a>
              <div class="text-white font-regular flex flex-col justify-start">
                <span class="text-3xl leading-0 font-semibold">10</span>
                <span class="-mt-3">Mar</span>
              </div>
            </div>
            <main class="p-5 z-10">
              <a href="#" class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Afghanistan's President Ashraf Ghani Speaks At The Council
              </a>
            </main>

        </div>
        <div class="relative h-64 w-full flex items-end justify-start text-left bg-cover bg-center" style="background-image:url(https://external-preview.redd.it/IUOORtRw7pOynoCXJsh8QD3SOr2vHDb3DYRQnYWxhLE.jpg?width=640&crop=smart&auto=webp&s=1d8c3ef23a4ef311fbeb8d70f7e481596561cceb);">
            <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900"></div>
            <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
              <a href="#" class="text-xs bg-indigo-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-indigo-600 transition ease-in-out duration-500">Images</a>
              <div class="text-white font-regular flex flex-col justify-start">
                <span class="text-3xl leading-0 font-semibold">10</span>
                <span class="-mt-3">Mar</span>
              </div>
            </div>
            <main class="p-5 z-10">
              <a href="#" class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Afghanistan's President Ashraf Ghani Speaks At The Council
              </a>
            </main>

        </div> --}}



        <div class="relative h-64 w-full flex items-center bg-fit bg-top" style="background-image:url(/img/back.png);">

            <p class="block items-center text-center mx-auto rounded-md text-white font-semibold text-2xl"> Most Commented  </p>

           </div>

           @foreach($most_commented as $most)
        <div class="relative h-full w-full flex items-end justify-start text-left bg-cover bg-top" style="background-image:url({{$most->featured_image}});">
            <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900"></div>
            <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
              <a href="/{{ $most->topic->first()->slug }}" class="text-xs bg-indigo-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-indigo-600 transition ease-in-out duration-500">{{ $most->topic->first()->name }}</a>
              <div class="text-white font-regular flex flex-col justify-start">
                <span class="text-3xl leading-0 font-semibold">{{ $most->comments->count() }}</span>
                <span class="-mt-3">Comments</span>
              </div>
            </div>
            <main class="p-5 z-10">
              <a href="/post/{{ $most->slug }}" class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">{{ $most->title}}
              </a>
            </main>

        </div>
        @endforeach
{{-- 
        <div class="relative h-64 w-full flex items-end justify-start text-left bg-cover bg-center" style="background-image:url(https://preview.redd.it/gllfwvkjpq281.jpg?width=640&crop=smart&auto=webp&s=fd216e49d245fe9f0d431736fe00e9dc3cce3d2b);">
            <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900"></div>
            <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
              <a href="#" class="text-xs bg-indigo-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-indigo-600 transition ease-in-out duration-500">Politics</a>
              <div class="text-white font-regular flex flex-col justify-start">
                <span class="text-3xl leading-0 font-semibold">10</span>
                <span class="-mt-3">Mar</span>
              </div>
            </div>
            <main class="p-5 z-10">
              <a href="#" class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Afghanistan's President Ashraf Ghani Speaks At The Council
              </a>
            </main>

       </div>
        <div class="relative h-64 w-full flex items-end justify-start text-left bg-cover bg-center" style="background-image:url(https://preview.redd.it/nlw53qcdcp281.jpg?width=640&crop=smart&auto=webp&s=ef0b4e521d68d93071d96ad3f7dc393bcab57347);">
            <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900"></div>
            <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
              <a href="#" class="text-xs bg-indigo-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-indigo-600 transition ease-in-out duration-500">Politics</a>
              <div class="text-white font-regular flex flex-col justify-start">
                <span class="text-3xl leading-0 font-semibold">10</span>
                <span class="-mt-3">Mar</span>
              </div>
            </div>
            <main class="p-5 z-10">
              <a href="#" class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Afghanistan's President Ashraf Ghani Speaks At The Council
              </a>
            </main>

        </div>
        <div class="relative h-64 w-full flex items-end justify-start text-left bg-cover bg-center" style="background-image:url(https://i.redd.it/527awiqjtp281.jpg);">
            <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900"></div>
            <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
              <a href="#" class="text-xs bg-indigo-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-indigo-600 transition ease-in-out duration-500">Politics</a>
              <div class="text-white font-regular flex flex-col justify-start">
                <span class="text-3xl leading-0 font-semibold">10</span>
                <span class="-mt-3">Mar</span>
              </div>
            </div>
            <main class="p-5 z-10">
              <a href="#" class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Afghanistan's President Ashraf Ghani Speaks At The Council
              </a>
            </main>

        </div> --}}

    </div>


  </div>
