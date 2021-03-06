<div class="form-group">
	{!!Form::label('cate', 'Categoria:')!!}
	{!!Form::select('articles_category_id', $categorias ,null, array('placeholder' => 'Escoge una categoria', 'class' => 'form-control app-select'))!!}
</div>
<div class="form-group">
	{!!Form::label('codi-art', 'Codigo del articulo')!!}
	<div class="input-group">
		<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
		{!!Form::text('id',null,array('class' => 'form-control', 'placeholder' => 'Codigo'))!!}
	</div>	    		
</div>
<div class="form-group">
	{!!Form::label('art_name', 'Nombre del articulo:')!!}
	<div class="input-group">
		<div class="input-group-addon"><span class="glyphicon glyphicon-eye-open"></span></div>
		{!!Form::text('name',null,array('class' => 'form-control', 'placeholder' => 'Nombre'))!!}
	</div>
</div>
<div class="form-group">
	{!!Form::label('desc','Descripcion del articulo')!!}
	{!!Form::textarea('description',null,array('class' => 'form-control', 'style' => 'resize:none;', 'size' => '30x5'))!!}
</div>
<div class="form-group col-xs-6 col-md-5 col-md-offset-7">
	{!!Form::label('canti', 'Cantidad:')!!}
	{!!Form::number('quantity', null,array('class' => 'form-control'))!!}
</div>