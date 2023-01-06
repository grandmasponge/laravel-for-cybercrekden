<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    <div>
        <div>
            <h1>Welcome to the Cyber Crack Den: {{session('Discord_Username')}}</h1>

        </div>

        <div>
            <h1>Here's your little view into our server</h1>
            <iframe src="https://discord.com/widget?id=911776606014566421&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
        </div>
    </div>
</body>
