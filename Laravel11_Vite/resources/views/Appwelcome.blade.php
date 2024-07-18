<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body class="container bg-info bg-gradient bg-opacity-10">

    <div class="contaniner bg-dark bg-gradient bg-opacity-25">
        <h1 class="alert alert-primary w-25 text-success">
            Hello cheif!....
        </h1>


        {{--  Efficiently Manage Multiple Images  --}}
        <div class="row">
            <div class="conainer overflow-hidder m-0 " style="width: 18rem; height: 25rem;">
                <img src="{{ Vite::image('dog.jpg') }}" alt="" class="w-100 h-100 border border-5 rounded-4"
                    style="object-fit: cover; object-position: center;">
            </div>

            <div class="conainer overflow-hidder m-0 " style="width: 18rem; height: 25rem;">
                <img src="{{ Vite::image('puppy.jpg') }}" alt="" class="w-100 h-100 border border-5 rounded-4"
                    style="object-fit: cover; object-position: center;">
            </div>
        </div>
    </div>
</body>

</html>
