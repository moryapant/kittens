<div class="border border-gray-300 bg-gray-200 w-full">




    <h3 class="mb-4 text-lg font-semibold text-gray-900 mx-auto max-w-screen-sm mt-2">{{ $post->AllCommentsCount() }}
        Comments</h3>

    @include('includes.recursive', ['comments' => $post->comments()->latestFirst()->get()])


</div>
