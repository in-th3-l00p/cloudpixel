<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(["resources/css/app.css", "resources/ts/sprite.ts"])
</head>
<body class="bg-gray-900 text-white relative">
    <x-window title="Toolbox" :x=10 :y=10 :width=400 :height=300>
        <p>test</p>
    </x-window>
</body>
</html>