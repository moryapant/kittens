<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="">

    <title>Bollykittens</title>



    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            /* background-image: url("/img/back.gif"); */
        }

        img {
            display: inline !important;
        }
    </style>
</head>

<body class="bg-gray-200">

    @include('navbar')

    <div class="mt-12">

        @include('uppersection')


        <p class="items-center text-center  text-bold text-4xl py-8 font-bold">{{ $post->title }}</p>

        <div class="space-y-3 w-2/3 mx-auto bg-gray-200">
            <span class="container text-center space-y-6 font-semibold text-2xl"> {!! $post->body !!} </span>
        </div>


        {{-- comments  --}}
        <div class="w-2/3 mx-auto min-w-max">
            <livewire:comment.new-comments :post="$post" :col=0 :key="$post->id">

            <livewire:comment.all-comments :post="$post">


        </div>
        {{-- comments  --}}

</body>
@livewireScripts
