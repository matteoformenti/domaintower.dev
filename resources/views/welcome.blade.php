<!DOCTYPE HTML>
<html lang="en">
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
        <select name="" id="" class="w-1/3 border rounded">
            <option value="">ORG 1</option>
            <option value="">ORG 2</option>
            <option value="">ORG 3</option>
        </select>
        <div class="w-full p-4 bg-yellow-300 my-4">
            <h1>Attenzione ci sono 10 domini in scadenza la prossima settimana <a href="#" class="underline">mostra i domini in scadenza</a></h1>
        </div>
        <table class="w-full">
            <tr>
                <th class="text-left">Dominio</th>
                <th class="text-left">Provider</th>
                <th class="text-left">Data scadenza</th>
            </tr>
            @php($faker = Faker\Factory::create())
            @foreach(range(1, 20) as $i)
                @php($domain = $faker->domainName)
                @php($date = $faker->dateTimeBetween(now(), today()->endOfYear()))
                <tr class="@if(Carbon\Carbon::parse($date)->isBefore(today()->addDays(30))) text-red-400 font-bold @endif hover:bg-gray-100 transition cursor-pointer py-2">
                    <td>
                        <a href="{{route('domain', ['domain' => $domain])}}">{{$domain}}</a>
                        <span class="bg-indigo-400 text-white rounded-2xl text-sm px-4 hover:bg-indigo-600 transition cursor-pointer">credenziali</span>
                    </td>
                    <td>AWS</td>
                    <td>
                        @php($date = $faker->dateTimeBetween(now(), today()->endOfYear()))
                        {{$date->format('d M Y')}}
                    </td>
                </tr>
            @endforeach
        </table>
        <div>

        </div>
    </div>
</body>
</html>