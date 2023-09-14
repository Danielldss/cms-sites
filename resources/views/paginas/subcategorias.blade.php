<label class="col-md-3 control-label">Sub Categorias</label>
<div class="col-md-9">
	<select class="form-control" name="codsubcategoria" id="codsubcategoria">
		<option value="">Selecione uma subcategoria</option>
		@foreach($subcategorias as $sub)
            <option value="{{$sub->codsubcategoria}}">{{$sub->subcategoria}}</option>
        @endforeach
	</select>
</div>

