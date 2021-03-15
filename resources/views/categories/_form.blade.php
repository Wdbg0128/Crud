    <div class="form-group">
        <label for="dad_id">Categoria Padre</label>
        <select name="dad_id" id="dad_id" class="form-control" >
            <option value="">Seleccione una Categoria Padre</option>
        @foreach ($categories as $categoria)
        <option value="{{$categoria->id}}"{{(isset($category->dad_id)&&$category->dad_id==$categoria->id)?'selected':''}}>{{$categoria->name}}</option>
        @endforeach
        </select>
        @error('dad_id')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" name="name" id="name"value="{{old('name',$category->name)}}">
        @error('name')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea class="form-control" name="description" id="description" rows="5">{{old('description',$category->description)}}</textarea>
        @error('description')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <input type="submit" value="Guardar" class="btn btn-primary btn-block">
