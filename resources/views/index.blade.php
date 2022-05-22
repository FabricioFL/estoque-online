<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-slate-900">
    <form class="flex flex-col justify-center text-slate-200 bg-slate-700 py-12 px-8 w-3/4 mt-20 mx-auto">
        <div class="my-2 py-2 px-5 bg-slate-600 top-0">
            <a href="/" class="text-xl text-center">Estoque Online</a>
        </div>
        <label for="username">Username</label>
        <input type="text" class="text-neutral-900 px-1" name="username" id="username">
        <label for="password" class="mt-2">Password</label>
        <input type="password" class="text-neutral-900 px-1" name="password" id="password">
        <button type="submit" class="my-5 px-5 py-1 bg-slate-800">Entrar</button>
    </form>
</body>
</html>