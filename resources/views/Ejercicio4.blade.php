<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio4</title>
</head>
<body>
    <form action="{{route('Resultado4')}}" method="POST">
        {{csrf_field()}}
        <label for="fname">Ingrese el numero que desea sumar</label><br>
        <input type="number" id="fname" name="numero"><br>

        <input type="submit" value="Aceptar">
    </form>
</body>
</html>
