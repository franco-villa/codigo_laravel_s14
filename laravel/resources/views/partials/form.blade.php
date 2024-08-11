@csrf
<tr>
    <td colspan="2">
        <div>
            <input type="file" name="image" class="form-control" id="customFile">
            <label for="customFile" class="form-label">Seleccionar archivo</label>
        </div>
    </td>
</tr>
<tr>
    <th>Categoría</th>
    <td>
        <select name="category_id" id="category_id">
        <option value="">Seleccione</option>
            @foreach($categories as $id => $name)
                <option value="{{ $id }}" @if($id== old('category_id', $servicio->category_id)) selected @endif>
                    {{ $name }}
                </option>
            @endforeach
        </select>
    </td>
</tr> 
<tr>
    <th>Titulo: </th>
    <td>
        <input type="text" name="titulo" value="{{ old('titulo',$servicio->titulo) }}">
        @error('titulo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </td>
</tr>
<tr>
    <th>Descripcion: </th>
    <td><input type="text" name="descripcion" value="{{ old('descripcion',$servicio->descripcion) }}"> 
        <br> {{ $errors->first('descripcion') }}
    </td>
</tr>

<tr>
    <td colspan="2" align="center"><button>{{ $btnText }}</button> </td>
</tr>