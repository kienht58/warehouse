@extends ('layout/layout')

@section ('title')
	<title>QUAN LY KHO</title>
@stop

@section ('content')
	<div class="container">
		<h3>Thay doi thong tin kho</h3>

				{!! Form::model($warehouse, [
						'route' => ['warehouses.update', $warehouse->ID],
						'method' => 'PUT',
						'class' => 'form-horizontal'
					])
				!!}

					<div class="form-group">
						{!! Form::label('MA_KHO', 'Ma kho', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('MA_KHO', null, [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('TEN_KHO', 'Ten kho', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('TEN_KHO', null, [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('VI_TRI', 'Vi tri', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('VI_TRI', null, [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('LIEN_HE', 'Lien he', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('LIEN_HE', null, [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('GHI_CHU', 'Ghi chu', [ 'class' => 'control-label' ]) !!}
						{!! Form::text('GHI_CHU', null, [ 'class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::submit('Thay doi', [ 'class' => 'btn btn-primary pull-right' ])!!}
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@stop