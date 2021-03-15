@extends('master')
@section('title')
Crear Categoria    
@endsection

@section('content')
<form action="{{route("categories.store")}}" method="POST">
    @csrf
    @include('categories._form')
</form>
@endsection