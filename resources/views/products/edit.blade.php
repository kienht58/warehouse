@extends ('layout/layout')

@section ('title')
    <title>QUAN LY KHO</title>
@stop

@section ('content')
    <div class="container">
        <h3>Thay doi thong tin san pham</h3>

                {!! Form::model($product, [
                        'route' => ['products.update', $categoryID, $warehouseID, $productID],
                        'method' => 'PUT',
                        'class' => 'form-horizontal'
                    ])
                !!}

                    <div class="form-group">
                        {!! Form::label('SERIAL', 'Serial', [ 'class' => 'control-label' ]) !!}
                        {!! Form::text('Serial', null, [ 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('SERIAL_NHA_CUNG_CAP', 'Serial nha cung cap', [ 'class' => 'control-label' ]) !!}
                        {!! Form::text('SERIAL_NHA_CUNG_CAP', null, [ 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('ID_TRANG_THAI_SAN_PHAM', 'Trang thai san pham', [ 'class' => 'control-label' ]) !!}
                        {!! Form::text('ID_TRANG_THAI_SAN_PHAM', null, [ 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Thay doi', [ 'class' => 'btn btn-primary pull-right' ])!!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop