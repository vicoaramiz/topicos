@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
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
      <form method="post"  action="{{ route('padres.update', $padre->idpadre) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" name="nombre" value="{!!$padre->nombre!!}" />
        </div>
        <div class="form-group">
          <label for="apellido">Apellido:</label>
          <input type="text" class="form-control" name="apellido" value= "{!!$padre->apellido!!}" />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection