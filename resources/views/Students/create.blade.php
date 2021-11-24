@extends('plantillaweb');

@section('home_web')
<h2> Formulario de registro - Students </h2>
        <form action="{{route('students.store')}}" method="post">
            @csrf
            <div class="mb-3">
              <label>Tarjeta de identidad</label>
              <input type="number" class="form-control" name="num_tarjeta" placeholder="Escriba su número de tarjeta...">
              <label>Nombres completos</label>
              <input type="text" class="form-control" name="nombres" placeholder="Escribe el nombre completo...">
              <label>Celular</label>
              <input type="number" class="form-control" name="celular" placeholder="Escribe su número de telefono...">
              <label>Correo electronico</label>
              <input type="email" class="form-control" name="correo" placeholder="Escribe su correo electronico...">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
@endsection