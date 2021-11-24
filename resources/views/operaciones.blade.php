<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <title>Operaciones</title>
</head>
<body>

    <h2>El resultado de la suma es: @if(isset($resultado))
                                      {{$resultado}}
                                    @endif</h2>
    <form action="{{route('operaciones')}}" method="POST">
        {{csrf_field()}}


    <label for="fname"> Digite numero uno: </label><br>
    <input type="number" id="fname" name="numero1"><br>
    <label for="lname"> Digite numero dos: </label><br>
    <input type="number" id="lname" name="numero2">

    <input type="submit" value="boton_procesar">
</body>
</html>
