<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{env('APP_NAME')}} </title>

    {{-- @viteReactReferesh --}}
    {{-- @vite([ 'resources/js/app.js ']) --}}
    @viteReactRefresh
    @vite([ 'resources/js/app.jsx'])

</head>

<body class="container">

    <div class="container">
        <h1 class="text-success">
            Welcome back, Chief...!
        </h1>
        <div id="app" class="w-100"></div>
    </div>
</body>

</html>
