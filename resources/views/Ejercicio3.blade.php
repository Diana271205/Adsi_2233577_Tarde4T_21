<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio3</title>
</head>
<body>
    <form action="{{route('Resultado3')}}" method="POST">
        {{csrf_field()}}
        <label for="fname">Digite nombre y apellido</label><br>
        <input type="text" id="fname" name="Nombre"><br>
        <label for="lname">Digite el salario</label><br>
        <input type="number" id="lname" name="Salario"><br>

        <input type="submit" value="Procesar">
</body>
</html>

