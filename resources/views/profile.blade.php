<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | {{ env('APP_NAME') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

@include('components.navbar')

<section class="w-full min-h-[80vh] py-20 flex items-center justify-center bg-gradient-to-br from-teal-200 via-teal-50">

    <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-full shadow md:flex-row md:max-w-xl hover:bg-gray-100 pr-10">
    <img class="object-cover w-full rounded-full h-96 md:h-auto md:w-48" src="https://pbs.twimg.com/media/FjU2lkcWYAgNG6d.jpg" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$profile->name}}</h5>
        <p class="font-normal text-gray-700">{{$profile->nim}}</p>
        <p class="font-normal text-gray-700">{{$profile->class}}</p>
        <p class="font-normal text-gray-700">{{$profile->univ}}</p>
        <p class="mb-3 font-normal text-gray-700">{{$profile->email}}</p>
    </div>
</a>

</section>


<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>