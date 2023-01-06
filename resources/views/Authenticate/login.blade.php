<!doctype html>
<head>
<title>Cyber Crack Den</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-600">
 @include('header')
    <div>
        <div class="">
            <h1 class="text-white font-bold text-4xl">Login</h1>
            <form action="/login" method="post" class="flex-col w-32 h-12 gap-5">
                @csrf
                <input class="rounded" name="Login_Username" type="text" placeholder="Username">
                <input  class="rounded" name="Login_Password" type="password" placeholder="********">
                <button class="bg-blue-500 hover:bg-blue-700 text-white text-lg font-bold py-4 px-6 rounded" type="submit"> login</button>
            </form>
        </div>
    </div>
</body>
