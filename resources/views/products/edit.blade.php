@extends('master')
@section('title')
Editar Producto    
@endsection

@section('content')
<form action="{{route("products.update",$product->id)}}" method="POST">
    @csrf
    @method('PUT')
    @include('products._form')
</form>
@endsection