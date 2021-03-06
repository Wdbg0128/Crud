    <div class="form-group">
        <label for="category_id">Categoria</label>
        <select name="category_id" id="category_id" class="form-control" >
            <option value="">Seleccione una Categoria</option>
        @foreach ($categories as $category)
        <option value="{{$category->id}}"{{(isset($product->category_id)&&$product->category_id==$category->id)?'selected':''}}>{{$category->name}}</option>
        @endforeach
        </select>
        @error('category_id')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" name="name" id="name"value="{{old('name',$product->name)}}">
        @error('name')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="units">Unidades</label>
        <input type="number" class="form-control" name="units" id="units"value="{{old('units',$product->units)}}">
        @error('units')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea class="form-control" name="description" id="description" rows="5">{{old('description',$product->description)}}</textarea>
        @error('description')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <input type="submit" value="Guardar" class="btn btn-primary btn-block">
