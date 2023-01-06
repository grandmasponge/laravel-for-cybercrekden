<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Crack Den</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-slate-600">
<div>
    @include('header')
</div>
<div class="flex pt-5 md:pt-20 pl-0 md:pl-40">
    <h1 class="text-white font-bold text-6xl">
        Welcome to the <br> Cyber Crack Den.
    </h1>
</div>
<div class="pt-1 md:pt-10 md:ml-40 ">
    <button onclick=redirect() class="bg-blue-500 hover:bg-blue-700 text-white text-lg font-bold py-4 px-6 rounded">Register</button>
</div>

</body>
</html>
<script>
    function redirect(){
      window.location.href = "register"
    }
</script>
