@extends('layout.layout')

@section('title')
<title>Tao kho moi</title>
@stop

@section('content')
    <div class="container">
        <h1>aaaaaa</h1>
        {!! Form::open([
                        'route' => ['warehouses.store'],
                        'method' => 'POST',
                        'class' => 'form-horizontal'
                    ])
        !!}

            <div class="form-group">
                {!! Form::label('MA_KHO', 'Ma kho', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('MA_KHO', '', [ 'class' => 'form-control', 'required', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('TEN_KHO', 'Ten kho', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('TEN_KHO', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('VI_TRI', 'Vi tri', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('VI_TRI', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('LIEN_HE', 'Lien he', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('LIEN_HE', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('GHI_CHU', 'Ghi chu', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('GHI_CHU', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Thêm', [ 'class' => 'btn btn-primary pull-right' ])!!}
            </div>
        {!! Form::close() !!}
    </div>
@stop