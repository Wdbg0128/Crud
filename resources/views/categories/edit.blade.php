@extends('master')
@section('title')
Editar Categoria    
@endsection

@section('content')
<form action="{{route("categories.update",$category->id)}}" method="POST">
    @csrf
    @method('PUT')
    @include('categories._form')
</form>
@endsection