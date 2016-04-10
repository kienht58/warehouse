@extends('layout.layout')

@section('title')
<title>Tao kho moi</title>
@stop

@section('content')
    <div class="container">
        <h1>aaaaaa</h1>
        {!! Form::open([
                        'route' => ['products.store', $warehouseID, $categoryID],
                        'method' => 'POST',
                        'class' => 'form-horizontal'
                    ])
        !!}

            <div class="form-group">
                {!! Form::label('SERIAL', 'Serial', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('SERIAL', '', [ 'class' => 'form-control', 'required', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('SERIAL_NHA_CUNG_CAP', 'Serial nha cung cap', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('SERIAL_NHA_CUNG_CAP', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('ID_TRANG_THAI_SAN_PHAM', 'Trang thai san pham', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('ID_TRANG_THAI_SAN_PHAM', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Thêm', [ 'class' => 'btn btn-primary pull-right' ])!!}
            </div>
        {!! Form::close() !!}
    </div>
@stop