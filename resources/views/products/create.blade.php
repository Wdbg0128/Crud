@extends('master')
@section('title')
Crear Producto    
@endsection

@section('content')
<form action="{{route("products.store")}}" method="POST">
    @csrf
    @include('products._form')
</form>
@endsection