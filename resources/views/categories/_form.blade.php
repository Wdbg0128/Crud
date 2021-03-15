    <div class="form-group">
        <label for="idDad">Categoria Padre</label>
        <select name="idDad" id="idDad" class="form-control" >
            <option value="">Seleccione una Categoria Padre</option>
        @foreach ($categories as $categoria)
        <option value="{{$categoria->id}}"{{(isset($category->idDad)&&$category->idDad==$categoria->id)?'selected':''}}>{{$categoria->name}}</option>
        @endforeach
        </select>
        @error('idDad')
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
