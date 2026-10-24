<?php
session_start()
$_SESSION['idUser']
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    @stack('styles')
    <style>
        body{
            background-color: darkcyan;
        }
        .Btn-profil{
            position: absolute;
            top: 10px;
            right: 10px;
            width: 80px;
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
    </style>
</head>
<body>
    <button onclick="window.location='{{ route('accueil') }}'" class="Btn-accueil">Accueil</button>
    <button onclick="window.location='{{ route('profils.connect') }}'" class="Btn-profil">Profils</button>
    @yield('content')
</body>
</html>
