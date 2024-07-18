<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>React Laravel</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


</head>

<body class="container bg-info bg-gradient bg-opacity-10">

    <div class="contaniner bg-dark bg-gradient bg-opacity-25" id="content2">
        <h1 class="alert alert-primary w-50 text-success">
            welcome back cheif!....
        </h1>



        {{--  --}}
 
        {{-- image handling --}}
        <div class="row" id="content2">
            <div class="conainer overflow-hidder m-0 " style="width: 18rem; height: 25rem;">
                <img src="{{ Vite::image('insects.jpg') }}" alt="" class="w-100 h-100 border border-5 rounded-4"
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
