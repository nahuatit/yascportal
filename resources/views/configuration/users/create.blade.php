@extends ('principal')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  titulo-form">
			<div class="text-center">
			<h3>Nueva Categoría</h3>
			</div>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'configuration/users','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
				 <div class="formulario">
            <div class="form-group">
            	<label for="name">Username</label>
            	<input type="text" name="name" class="form-control" value="{{old('name')}}">
            </div>
			<div class="form-group">
            	<label for="email">Email</label>
            	<input type="email" name="email" class="form-control" value="{{old('email')}}">
            </div>
			<div class="form-group">
            	<label for="password">Password</label>
            	<input type="password" name="password" class="form-control">
            </div>
            <div class="form-group text-center">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" href="{{URL::action('UserController@index')}}" type="reset">Cancelar</button>
            </div>
         </div>
			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection
