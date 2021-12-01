@foreach($comments as $comment)

<div class="antialiased mx-auto max-w-screen-sm b" x-data="{ open: false, openReply:false }">


    <div class="space-y-4">

        <div class="flex">
            <div class="flex-shrink-0 mr-3 ml-3 mt-3">
                <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10 object-cover  shadow-md"
                    src="/{{$comment->user->profile_photo_path}}" alt="">
            </div>
            <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                <strong>{{ $comment->user->name }}</strong> <span
                    class="text-xs text-gray-400">{{$comment->created_at->diffForHumans()}}</span>
                <p class="text-sm">
                    {{$comment->body}}
                </p>

                <p class="mt-3"> <a class="text-gray-600 text-sm font-bold"
                    @click.prevent = "openReply = !openReply"
                    href="">Reply</a></p>


                <div class="" x-show = "openReply"><livewire:comment.new-comments :post="$post" :col="$comment->id"  :key="$comment->id . uniqid() "></div>

                @if($comment->replies->count())

                <button  @click.prevent="open = !open" class="text-xs text-blue-600" href="">view {{ $comment->replies->count()}} Replies</button>


                <div x-show="open">
                    @include('includes.recursive', ['comments' => $comment->replies])
                </div>

                @endif

            </div>
        </div>


    </div>
</div>

@endforeach
