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
        button{
            position: absolute;
            top: 10px;
            right: 10px;
            width: 80px;
            height: 40px;
            border-radius: 10px;
            font-weight: bold;
            background-color: aliceblue;
        }
    </style>
</head>
<body>
<button onclick="window.location='{{ route('profils.connect') }}'">Profils</button>
</body>
</html>
