<div class="form-group">
	<label class="col-md-3 control-label">Categorias</label>
	<div class="col-md-9">
		<select class="form-control" name="codcategoria" id="codcategoria" required>
			<option value="">Selecione uma categoria</option>
			@foreach($categorias as $categoria)
                @if($codcategoria == $categoria->codcategoria)
                    <option value="{{$categoria->codcategoria}}" selected >{{$categoria->categoria}}</option>
                @else
                    <option value="{{$categoria->codcategoria}}">{{$categoria->categoria}}</option>
                @endif
            @endforeach
		</select>
	</div>
</div>
@if($categorias != '')
	<div class="form-group" id="ctnsubcat"></div>
@endif
