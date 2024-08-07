<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ env('APP_NAME') }} </title>

    {{-- @viteReactReferesh --}}
    {{-- @vite([ 'resources/js/app.js ']) --}}
    @viteReactRefresh
    {{-- @vite([ 'resources/js/app.jsx']) --}}

    {{
        Vite::withEntryPoints(['resources/js/app.jsx'])
        ->useHotFile('storage/vite.hot')
        ->useBuildDirectory('bundle_Build_Namechange')
        ->useManifestFileName('namechange_manifest.json')
        
    }}

    {{-- //->creatAssetPathsUsing (function (string $path, ?bool $secure){
    //     return "https://laravel-vite.my-asset.com/{$path}";
    // }) --}}

</head>

<body class="container bg-secondary-subtle">

    <div class="container">
        <h1 class="text-success">
            Welcome back, Chief...!
        </h1>
        <div id="app" class="w-100"></div>
    </div>
</body>

</html>
