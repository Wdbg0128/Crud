@extends('master')
@section('title')
Producto  | {{$product->name}} 
@endsection
@section('content')
<div class="form-group">
    <label for="idCategory">Categoria</label>
    <select name="idCategory" id="idCategory" class="form-control" disabled >
        <option value="">Seleccione una Categoria</option>
    @foreach ($categories as $category)
    <option value="{{$category->id}}"{{(isset($product->idCategory)&&$product->idCategory==$category->id)?'selected':''}}>{{$category->name}}</option>
    @endforeach
    </select>
</div>
<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="name" id="name"value="{{$product->name}}" disabled>
</div>
<div class="form-group">
    <label for="units">Unidades</label>
    <input type="number" class="form-control" name="units" id="units"value="{{$product->units}}" disabled>
</div>
<div class="form-group">
    <label for="description">Descripción</label>
    <textarea class="form-control" name="description" id="description" rows="5"disabled>{{$product->description}}</textarea>
</div>
@endsection