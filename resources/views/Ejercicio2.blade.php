<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio2</title>
</head>
<body>
    <h2>Comparación de los números</h2>
    <form action="{{route('Resultado2')}} " method="POST">
        {{csrf_field()}}
        <label for="fname"> Digite número 1 </label> <br>
        <input type="number" id="fname" name="numero1"> <br>
        <label for="fname"> Digite número 2 </label> <br>
        <input type="number" id="fname" name="numero2"> <br>
        <label for="fname"> Digite número 3 </label> <br>
        <input type="number" id="fname" name="numero3"> <br>

        <input type="submit" value="Aceptar">

    </form>
</body>
</html>