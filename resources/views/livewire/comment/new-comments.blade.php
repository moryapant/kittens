<div class="bg-gray-200 w-full mx-auto border">
    <div class="bg-grey-lighter flex flex-between py-3 p-2 min-w-8 space-x-2 ">
        <img class="rounded-full object-cover w-16 h-12 mt-1 border border-blue-100 shadow-lg" src="/{{ auth()->user()->profile_photo_path }}" alt="">
        {{-- <textarea name="body" placeholder="Write a comment..." class="appearance-none w-2/3 mx-2 bg-grey-lighter rounded-full border bg-white h-8 px-2 pt-2  items-center "></textarea> --}}
        <input type="text" wire:model = "body"
         class=" h-1/2 min-w-max w-full py-3 pl-3 pr-4 text-gray-700 bg-white border
         border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300
         dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500
          focus:outline-none focus:ring"
          placeholder="Comment here!..">
          <button class="px-6 py-2 mt-1 leading-5 h-10
           text-white transition-colors duration-200 transform bg-blue-500 rounded-md
            hover:bg-blue-400 focus:outline-none
            focus:bg-gray-600" wire:click.prevent="addComment">Comment</button>

    </div>
</div>
