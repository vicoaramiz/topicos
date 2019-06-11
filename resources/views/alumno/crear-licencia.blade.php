@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Licencia
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('alumnos.store') }}">
          <div class="form-group">
              {{ csrf_field() }}
          <label for="apellido">Fecha Consulta:</label>
          <input type="date" class="form-control" name="fecha"/>
          </div>
          <div class="form-group">
          <label for="apellido">Motivo:</label>
          <textarea name="descripcion" class="form-control" placeholder='Escriba el Motivo...'></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection