<!doctype html>
<head>
    <title>Cyber Crack Den</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-600">
@include('header')
<div>
    @if($errors->any())
        <div class="w-full h-20 bg-red-600">
          <ul>
              @foreach($errors->all as $error)
                  <li>
                      {{ $error }}
                  </li>
              @endforeach
          </ul>
        </div>
    @endif
    <div class="">
        <h1 class="text-white font-bold text-4xl">Register</h1>
        <form action="/register" method="POST" class="flex-col w-32 h-12 gap-5">
            @csrf
            <input class="rounded" name="DiscordUsername" type="text" placeholder="Johnny#1201">
            <input class="rounded" name="Username" type="text" placeholder="Username">
            <input  class="rounded" name="Password" type="password" placeholder="********">
            <button type="submit">register</button>
        </form>
    </div>
</div>
</body>
