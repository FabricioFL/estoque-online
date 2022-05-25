<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Inventory | a solution for management</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-slate-800">


    <header>
        <nav class="flex justify-between wrap p-3 bg-slate-900">
            <a href="/" class="text-lg lg:text-2xl xl:text-2xl text-slate-200 mx-2">Online Inventory</a>
            @if (session('status') == true)
            <a href="/dashboard" class="text-base xl:text-base text-slate-200 hover:text-pink-600 mx-2">open</a>
            @endif
            @if(session('status') != true)
                <a href="/login" class="text-base xl:text-base text-slate-200 hover:text-pink-600 mx-2">sign in</a>
            @endif
        </nav>
        <div class="pb-32 flex justify-center bg-slate-700">
            <h1 class="text-slate-200 mt-12 text-xs md:text-lg lg:text-4xl xl:text-4xl">more productivity for your company</h1>
        </div>
    </header>

    <main>
        <section class="flex justify-evenly flex-wrap mt-12">

            <div class="p-5 m-3 rounded-lg bg-slate-600 text-slate-200 flex justify-center">
                <p>friendly ui</p>
            </div>

            <div class="p-5 m-3 rounded-lg bg-slate-600 text-slate-200 flex justify-center">
                <p>high productivity</p>
            </div>

            <div class="p-5 rounded-lg m-3 bg-slate-600 text-slate-200 flex justify-center">
                <p>use on anywhere</p>
            </div>

            <div class="p-5 rounded-lg m-3 bg-slate-600 text-slate-200 flex justify-center">
                <p>always free in the basic plan</p>
            </div>

        </section>
        <section>
            <div class="flex flex-col mt-12 p-5 w-1/2 mx-auto rounded-xl text-slate-200 bg-slate-600">
                <h2 class="text-slate-200 mx-auto text-xl">Our features</h2>
                <div class="mx-auto">
                    <p class="mt-5">&#9989; Store data about products and raw materials</p>
                    <p class="mt-2">&#9989; Generate Qr code for products</p>
                    <p class="mt-2">&#9989; Create and update tasks</p>
                    <p class="mt-2">&#9989; Send messages to your teammates</p>
                </div>
            </div>
        </section>
        <section class="mt-12 flex justify-center py-12">
            @if (session('status') == true)
                <a href="/dashboard" class="px-8 py-3 rounded-lg select-none bg-slate-900 text-slate-200 hover:bg-pink-900">Open dashboard</a>
            @endif
            @if(session('status') != true)
                <a href="/register" class="px-8 py-3 rounded-lg select-none bg-slate-900 text-slate-200 hover:bg-pink-900">Create account now</a>
            @endif
        </section>
    </main>

</body>
</html>