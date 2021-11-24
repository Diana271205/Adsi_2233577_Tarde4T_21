<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio5</title>
</head>
<body>
    <form action="{{route('Resultado5')}}" method="POST">
        {{csrf_field()}}
        <label for="fname">Digite valor del radio</label><br>
        <input type="double" id="fname" name="radio"><br>
        <label for="lname">Digite valor de altura</label><br>
        <input type="double" id="lname" name="h"><br>

        <input type="submit" value="Aceptar">
    </form>
</body>
</body>
</html>