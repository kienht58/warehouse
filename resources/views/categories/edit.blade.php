@extends ('layout/layout')

@section ('title')
    <title>QUAN LY KHO</title>
@stop

@section ('content')
    <div class="container">
        <h3>Thay doi thong tin kho</h3>

                {!! Form::model($category, [
                        'route' => ['categories.update', $categoryID, $warehouseID],
                        'method' => 'PUT',
                        'class' => 'form-horizontal'
                    ])
                !!}

                    <div class="form-group">
                        {!! Form::label('ID_SAN_PHAM', 'ID san pham', [ 'class' => 'control-label' ]) !!}
                        {!! Form::text('ID_SAN_PHAM', null, [ 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('MA_SAN_PHAM', 'Ma san pham', [ 'class' => 'control-label' ]) !!}
                        {!! Form::text('MA_SAN_PHAM', null, [ 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('TEN_SAN_PHAM', 'Ten san pham', [ 'class' => 'control-label' ]) !!}
                        {!! Form::text('TEN_SAN_PHAM', null, [ 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('MA_SAN_PHAM_NHA_CUNG_CAP', 'Ma san pham nha cung cap', [ 'class' => 'control-label' ]) !!}
                        {!! Form::text('MA_SAN_PHAM_NHA_CUNG_CAP', null, [ 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('ID_DON_VI_TINH', 'Don vi tinh', [ 'class' => 'control-label' ]) !!}
                        {!! Form::text('ID_DON_VI_TINH', null, [ 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Thay doi', [ 'class' => 'btn btn-primary pull-right' ])!!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop