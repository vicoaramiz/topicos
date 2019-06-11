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
                  <a href="{{route('alumnos.crear-licencia',$alumno->id_alumno)}}" class="btn btn-secondary float-right">Add</a>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Fecha de Consulta</td>
          <td>Descripcion Licencia</td>
          <td>Nombre Alumno</td>
        </tr>
    </thead>
    <tbody>
        @foreach($licencias as $licencia)
        <tr>
            <td>{{$licencia->id_licencia}}</td>
            <td>{{$licencia->fecha_consulta}}</td>
            <td>{{$licencia->descripcion}}</td>
            <td>{{$alumno->nombre_alumno}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection