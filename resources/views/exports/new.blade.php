@extends('layout.layout')

@section('title')
<title>Tao yeu cau nhap kho moi</title>
@stop

@section('content')
    <div class="container">
        <h1>aaaaaa</h1>
        {!! Form::open([
                        'route' => ['exports.store', $warehouseID],
                        'method' => 'POST',
                        'class' => 'form-horizontal'
                    ])
        !!}
            
            <div class="form-group">
                {!! Form::label('ID_KHO', 'ID kho', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('ID_KHO', '', [ 'class' => 'form-control', 'required', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('ID_LY_DO_XUAT_KHO', 'ID ly do xuat kho', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('ID_LY_DO_XUAT_KHO', '', [ 'class' => 'form-control', 'required', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('ID_YEU_CAU', 'ID yeu cau', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('ID_YEU_CAU', '', [ 'class' => 'form-control', 'required', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('MA_CHUNG_TU', 'Ma chung tu', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('MA_CHUNG_TU', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('NGAY_XUAT_KHO', 'ngay xuat kho', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('NGAY_XUAT_KHO', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('NGUOI_TAO', 'nguoi tao', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('NGUOI_TAO', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('GHI_CHU', 'So luong', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('GHI_CHU', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Thêm', [ 'class' => 'btn btn-primary pull-right' ])!!}
            </div>
            
        {!! Form::close() !!}
    </div>
@stop