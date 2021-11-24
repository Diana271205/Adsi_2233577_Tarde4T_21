@extends('plantillaweb')
    @section('home_web')     
    <h2>Editar resgistro de estudiante {{$student->id}}</h2>
    <form action="{{route('students.update', $student )}}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label>Tarjeta de identidad</label>
          <input type="number" class="form-control" name="num_tarjeta" placeholder="Escriba su número de tarjeta..." value="{{$student->num_tarjeta}}">
          <label>Nombres completos</label>
          <input type="text" class="form-control" name="nombres" placeholder="Escribe el nombre completo..." value="{{$student->nombres}}">
          <label>Celular</label>
          <input type="number" class="form-control" name="celular" placeholder="Escribe su número de telefono..." value="{{$student->celular}}">
          <label>Correo electronico</label>
          <input type="email" class="form-control" name="correo" placeholder="Escribe su correo electronico..." value="{{$student->correo}}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
      @endsection