@extends('plantillaweb')

@section('home_web')

<table class="table table-danger">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Tarjeta_identidad</th>
        <th scope="col">Nombres</th>
        <th scope="col">Celular</th>
        <th scope="col">Correo</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
      <tr>
        <th scope="row">{{$student->id}}</th>
        <td>{{$student->num_tarjeta}}</td>
        <td>{{$student->nombres}}</td>
        <td>{{$student->celular}}</td>
        <td>{{$student->correo}}</td>
        <td>
          <a href="{{route('students.edit', $student)}}">
           <button type="button" class="btn btn-danger btn-sm">Editar</button>
          </a>
        </td>
        <td>
          <form action="{{route('students.destroy', $student)}}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-info btn-sm">Eliminar</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


@endsection