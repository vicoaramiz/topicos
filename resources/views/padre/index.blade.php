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
                  <a href="{{route('padres.create')}}" class="btn btn-secondary float-right">Add</a>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nombre</td>
          <td>Apellido</td>
          <td>Direccion</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($padres as $padre)
        <tr>
            <td>{{$padre->idpadre}}</td>
            <td>{{$padre->nombre}}</td>
            <td>{{$padre->apellido}}</td>
            <td>{{$padre->direccion}}</td>
            <td><a href="{{ route('padres.edit',$padre->idpadre)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('padres.destroy', $padre->idpadre)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection