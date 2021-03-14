<!DOCTYPE HTML>
<html lang="en">
@php($domain = request()->route()->parameter('domain'))

<head>
    <title>Ciao</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
          integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous"/>
</head>
<body class="flex min-h-screen">
<div class="w-1/6 bg-gray-300 flex flex-col px-10 justify-center shadow-2xl">
    <a href="#">Dashboard</a>
    <a href="#">Organization</a>
    <a href="#">Credentials</a>
    <a href="#">Pages</a>
    <a href="#">Account</a>
</div>

<div class="w-5/6 p-20">
    <h1 class="text-3xl">{{$domain}} <span class="px-2 text-sm bg-indigo-400 rounded">non gestito</span></h1>
    <ul class="flex mt-5">
        <li class="px-2 mr-4 uppercase font-bold text-gray-500 hover:text-gray-700 cursor-pointer">Informazioni</li>
        <li class="px-2 mx-4 uppercase font-bold text-gray-500 hover:text-gray-700 cursor-pointer border-b-2 border-indigo-600">Azioni</li>
        <li class="px-2 mx-4 uppercase font-bold text-gray-500 hover:text-gray-700 cursor-pointer">Configurazione DNS</li>
        <li class="px-2 mx-4 uppercase font-bold text-gray-500 hover:text-gray-700 cursor-pointer">Log</li>
    </ul>
    <div class="mt-5">
        <div class="w-1/2 mx-auto flex bg-gray-200 p-2 rounded">
            <input  class="h-8 rounded bg-transparent px-2 mx-2 flex-grow focus:bg-white transition" type="text" placeholder="Subdomain">
            <select class="h-8 rounded bg-transparent px-2 mx-2 flex-grow focus:bg-white transition"  name="" id="">
                <option value="">Redirect</option>
                <option value="">Landing</option>
            </select>
            <input  class="h-8 rounded bg-transparent px-2 mx-2 flex-grow focus:bg-white transition" type="text" placeholder="Redirect">
            <select class="h-8 rounded bg-transparent px-2 mx-2 flex-grow focus:bg-white transition"  name="" id="">
                <option value="">300</option>
                <option value="">301</option>
                <option value="">302</option>
            </select>
            <a href="#">Aggiungi</a>
        </div>
    </div>
</div>
</body>
</html>