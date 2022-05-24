<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Inventory | Create an account</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-slate-900">

    <form id="form-reg" method="POST" class="flex flex-col justify-center text-slate-200 bg-slate-700 py-12 px-8 w-3/4 lg:w-1/2 xl:w-2/5 mt-20 mx-auto">
        @csrf
        <div class="my-2 py-2 px-5 bg-slate-600 top-0 text-center">
            <a href="/" class="text-xl">Online Inventory</a>
        </div>
        <label for="username-reg" class="mb-1">Username</label>
        <input type="text" class="text-neutral-900 px-1" name="username-reg" id="username-reg">
        <label for="email-reg" class="mt-2 mb-1">Email</label>
        <input type="email" class="text-neutral-900 px-1" name="email-reg" id="email-reg">
        <label for="password-reg" class="mt-2 mb-1">Password</label>
        <input type="password" class="text-neutral-900 px-1" name="password-reg" id="password-reg">
        <button type="submit" class="my-5 px-5 py-1 bg-slate-800">create account</button>
    </form>


    <p id="switchFormButtonText" class="text-slate-200 text-center mt-5">
        already have an account? <a class="text-violet-500" href="/login">click here</a>
    </p>

</body>
</html>