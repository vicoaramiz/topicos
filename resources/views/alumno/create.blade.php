@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add padre
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
          <label for="apellido">Apellido:</label>
          <input type="text" class="form-control" name="apellido"/>
          </div>
          <div class="form-group">
          <label for="apellido">Apellido:</label>
          <input type="text" class="form-control" name="apellido"/>
          </div>
          <div class="form-group">
          <label for="telefono">Telefono:</label>
          <input type="text" class="form-control" name="telefono"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection