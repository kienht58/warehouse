@extends('layout.layout')

@section('title')
<title>Tao kho moi</title>
@stop

@section('content')
    <div class="container">
        <h1>aaaaaa</h1>
        {!! Form::open([
                        'route' => ['categories.store', $warehouseID],
                        'method' => 'POST',
                        'class' => 'form-horizontal'
                    ])
        !!}
            
            <div class="form-group">
                {!! Form::label('ID_KHO', 'ID kho', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('ID_KHO', '', [ 'class' => 'form-control', 'required', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('ID_SAN_PHAM', 'ID san pham', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('ID_SAN_PHAM', '', [ 'class' => 'form-control', 'required', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('MA_SAN_PHAM', 'Ma san pham', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('MA_SAN_PHAM', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('TEN_SAN_PHAM', 'Ten san pham', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('TEN_SAN_PHAM', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('MA_SAN_PHAM_NHA_CUNG_CAP', 'Ma san pham nha cung cap', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('MA_SAN_PHAM_NHA_CUNG_CAP', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('SO_LUONG', 'So luong', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('SO_LUONG', '', [ 'class' => 'form-control', 'required']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('ID_DON_VI_TINH', 'Don vi tinh', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('ID_DON_VI_TINH', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Thêm', [ 'class' => 'btn btn-primary pull-right' ])!!}
            </div>
        {!! Form::close() !!}
    </div>
@stop