@extends('master')
@section('title')
Categoria  | {{$category->name}} 
@endsection
@section('content')
        @csrf
        <div class="form-group">
            <label for="idDad">Categoria Padre</label>
            <input type="text" name="idDad" id="idDad" class="form-control"value="{{$category->idDad}}" readonly>
        </div>
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}"readonly>
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea class="form-control" name="description" id="description" rows="5" readonly>{{$category->description}}</textarea>
        </div>
@endsection