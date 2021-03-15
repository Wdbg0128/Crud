@extends('master')
@section('title')
Categorias  
@endsection
@section('content')
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Categoria Padre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
            
            <td>{{isset($category->dad->name)? $category->dad->name : ''}}</td>
            
            <td>
                <a href="{{route('categories.show',$category->id)}}" class="btn btn-info ">Ver</a>
                <a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning ">Editar</a>
            
            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{$category->id}}">Eliminar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


{{$categories->links()}}
<a href="{{route('categories.create')}}" class="btn btn-primary btn-block">Agragar nueva Categoria</a>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>¿Quiere eliminar el elemento seleccionado?</p>
          <br>
          <p>!!Esta acción no se puede revertir!!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <form id="formDelete" action="{{route('categories.destroy',0)}}" data-action="{{route('categories.destroy',0)}}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  <script>
      window.onload = function(){
  $('#deleteModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var id = button.data('id') 
  action = $('#formDelete').attr('data-action').slice(0,-1) 
  action += id
  $('#formDelete').attr('action',action)
  var modal = $(this)
  modal.find('.modal-title').text('Se eliminara la categoria con el id: ' + id)
})
};
  </script>
@endsection