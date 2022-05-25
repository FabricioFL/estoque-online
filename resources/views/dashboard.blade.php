<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Stock | dashboard</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/googleCharts.js')}}" defer></script>
</head>
<body class="bg-slate-900">
    <main>
        <aside class="bg-slate-800 p-5 text-xs select-none md:text-sm lg:text-lg xl:text-xl 2xl:text-xl lg:px-8 xl:px-8 2xl:px-8 flex text-slate-200 flex-row justify-evenly md:flex-col
            md:absolute md:left-0 md:bottom-0 md:top-0 lg:flex-col lg:absolute lg:left-0 lg:bottom-0 lg:top-0
            xl:flex-col xl:absolute xl:left-0 xl:bottom-0 xl:top-0
            2xl:flex-col 2xl:absolute 2xl:left-0 2xl:bottom-0 2xl:top-0">
            <img src="{{asset('images/profile.png')}}" class="rounded-full w-8 md:w-12 lg:w-16 xl:w-20 2xl:w-24 mx-2" alt="profile image">
            <a class="text-pink-600 mx-1">&#127968; Home</a>
            <a href="/products" class="hover:text-pink-600 mx-1">&#128092; Products</a>
            <a href="/tasks" class="hover:text-pink-600 mx-1">&#128195; Tasks</a>
            <a href="/messages" class="hover:text-pink-600 mx-1">&#128233; Messages</a>
            <a href="/logout" class="hover:text-pink-600 mx-1">&#128683; logout</a>
        </aside>
        <section class="flex flex-col">
            <div class="px-16 py-8 mt-12 mx-auto rounded-xl bg-slate-600">
                <p class="text-slate-200 mx-auto text-center">Welcome SomeUser</p>
            </div>
            <div class="p-3 w-1/2 mx-auto bg-slate-600 mt-12 flex flex-wrap">
                <div id="donutchart" class="border border-pink-600 w-32 md:w-40 lg:w-62 xl:w-1/2 mx-auto m-3"></div>
                <div id="areachart" class="border border-pink-600 w-32 md:w-40 lg:w-62 xl:w-1/2 mx-auto m-3"></div>
                <div id="columnchart" class="border border-pink-600 w-32 md:w-40 lg:w-62 xl:w-1/2 mx-auto m-3"></div>
            </div>
        </section>
    </main>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</body>
</html>