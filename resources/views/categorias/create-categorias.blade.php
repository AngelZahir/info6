@extends('layouts.master')

@section('content')
      @include('fragments.validation-errors')
      @include('fragments.sesion')
      <h1>Post</h1>
      <form method="Categorias" action="{{route("categorias.store")}}">
        @csrf
      @include('dashboard.post._form')
      </form>
    
      <h1>Categorias</h1>

      <a href="{{ route('post.create') }}" class="btn btn-success">Create</a>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Url</th>
            <th scope="col" colspan="4">Options</th>
          </tr>
        </thead>
        <tbody>
          


      <div class= "mt-3"> {{ $categorias -> links() }} </div>

  

@endsection 