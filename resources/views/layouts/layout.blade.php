<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        body{
            background-color: darkcyan;
        }
        .Btn-profil{
            position: absolute;
            top: 10px;
            right: 10px;
            width: 100px;
            height: 40px;
            border-radius: 10px;
            font-weight: bold;
            background-color: aliceblue;
        }
        .Btn-accueil{
            position: absolute;
            top: 10px;
            left: 10px;
            width: 80px;
            height: 40px;
            border-radius: 10px;
            font-weight: bold;
            background-color: aliceblue;
        }
        .centre{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            flex-direction: column;
        }
        .centre input,
        .centre select,
        .centre button {
            width: 300px;
            height: 50px;
            font-size: 18px;
            border-radius: 8px;
            box-sizing: border-box;
        }
        .Btn-profil-home {
            position: absolute;
            bottom: 10px;
            right: 10px;
            width: 100px;
            height: 40px;
            border-radius: 10px;
            font-weight: bold;
            background-color: aliceblue;
        }
    </style>

    @stack('styles')
</head>
<body>
    @if (session('success'))
        <p style="text-align: center;">{{ session('success') }}</p>
    @endif

    <button onclick="window.location='{{ route('accueil') }}'" class="Btn-accueil">Accueil</button>
    @if (request()->routeIs('profils.home'))
        <button onclick="window.location='{{ route('profils.modifier') }}'" class="Btn-profil">Modifier votre profil</button>
    @else
        <button onclick="window.location='{{ route('profils.connect') }}'" class="Btn-profil">Profils</button>
    @endif

    @yield('content')

    @stack('Btn-footer')
</body>
</html>
