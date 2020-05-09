<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

<body class="bg-gray-100 flex h-screen">

<div class="m-auto">
    <div class="max-w-screen-xl mx-auto text-center py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
           Redirect
        </h2>
        <h2 class="text-md leading-9 font-light tracking-tight text-gray-900 sm:text-lg sm:leading-10">
           We're very sorry but the redirect url seems to be offline.
        </h2>
        <div class="mt-4 flex justify-center">
            <div class="ml-3 inline-flex">
                <a href="{{ $redirect_url }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-xs text-base leading-6 font-medium rounded-md text-gray-900 bg-gray-400 hover:text-gray-200 hover:bg-gray-900 focus:outline-none focus:shadow-outline focus:border-gray-300 transition duration-200 ease-in-out">
                    {{ $redirect_url }}
                </a>
            </div>
        </div>
    </div>
</div>


</body>
</html>
