<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio6</title>
</head>
<body>
        <form action="{{route('Resultado6')}}" method="POST">
            {{csrf_field()}}
            <label for="fname">Ingrese nombre del estudiante</label><br>
            <input type="text" id="fname" name="nombre"><br>
            <label for="lname">Calificación primer parcial</label><br>
            <input type="double" id="lname" name="nota_primer_parcial"><br>
            <label for="lname">Calificación éxamen final</label><br>
            <input type="double" id="lname" name="nota_examen_final"><br>

            <input type="submit" value="Aceptar">
        </form>
    </form>
</body>
</html>