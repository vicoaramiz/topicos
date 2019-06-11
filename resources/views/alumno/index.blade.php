@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
                  <a href="{{route('alumnos.create')}}" class="btn btn-secondary float-right">Add</a>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nombre</td>
          <td>Apellido</td>
          <td>Curso</td>
          <td>Nombre Tutor</td>
          <td>Licencias</td>
        </tr>
    </thead>
    <tbody>
        @foreach($alumnos as $alumno)
        <tr>
            <td>{{$alumno->id_alumno}}</td>
            <td>{{$alumno->nombre_alumno}}</td>
            <td>{{$alumno->apellido}}</td>
            <td>{{$alumno->paralelo->curso->sigla}}</td>
            <td>{{$alumno->paralelo->profesor->nombre}}</td>
            <td>
            <a href="{{route('alumnos.licencia',$alumno->id_alumno)}}" class="btn btn-primary">Licencias</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection