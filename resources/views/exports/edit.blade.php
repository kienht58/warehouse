@extends ('layout/layout')

@section ('title')
    <title>QUAN LY KHO</title>
@stop

@section ('content')
    <div class="container">
        <h3>Thay doi thong tin yeu cau nhap kho</h3>

                {!! Form::model($export, [
                        'route' => ['exports.update', $exportID, $warehouseID],
                        'method' => 'PUT',
                        'class' => 'form-horizontal'
                    ])
                !!}

                    <div class="form-group">
                        {!! Form::label('ID_KHO', 'ID kho', [ 'class' => 'control-label' ]) !!}
                        {!! Form::text('ID_KHO', null, [ 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('ID_LY_DO_XUAT_KHO', 'ID ly do xuat kho', [ 'class' => 'control-label' ]) !!}
                        {!! Form::text('ID_LY_DO_NHAP_KHO', null, [ 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('ID_YEU_CAU', 'ID yeu cau', [ 'class' => 'control-label' ]) !!}
                        {!! Form::text('ID_YEU_CAU', null, [ 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('MA_CHUNG_TU', 'Ma chung tu', [ 'class' => 'control-label' ]) !!}
                        {!! Form::text('MA_CHUNG_TU', null, [ 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('NGAY_XUAT_KHO', 'ngay xuat kho', [ 'class' => 'control-label' ]) !!}
                        {!! Form::text('NGAY_XUAT_KHO', null, [ 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('NGUOI_TAO', 'nguoi tao', [ 'class' => 'control-label' ]) !!}
                        {!! Form::text('NGUOI_TAO', null, [ 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Thay doi', [ 'class' => 'btn btn-primary pull-right' ])!!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop