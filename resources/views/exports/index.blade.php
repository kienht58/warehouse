@extends('layout.layout')

@section('title')
<title>QUAN LY KHO</title>
@stop

@section('content')
<h1 style="text-align: center">DANH SACH YEU CAU XUAT KHO {{$warehouse->TEN_KHO}}</h1>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>ID ly do nhap kho</td>
                    <td>ID yeu cau</td>
                    <td>ma chung tu</td>
                    <td>ID kho</td>
                    <td>ngay nhap kho</td>
                    <td>Nguoi tao</td>
                    <td>Ghi chu </td>
                </tr>
            </thead>
            <tbody>
                @foreach($exports as $export)        
                <tr>
                        <td>{{$export->ID_LY_DO_XUAT_KHO}}</td>
                        <td>{{$export->ID_YEU_CAU}}</td>
                        <td>{{$export->ID_KHO}}</td>
                        <td>{{$export->NGAY_XUAT_KHO}}</td>
                        <td>{{$export->NGUOI_TAO}}</td>
                        <td>
                            <a href="{{route('exports.show', [$warehouse->ID, $export->ID])}}"><button class="btn btn-primary">Show</button></a>
                            <a href="{{route('exports.edit', [$warehouse->ID, $export->ID])}}"><button class="btn btn-success">Edit</button></a>
                            {!! Form::open([
                                    'route' => ['exports.destroy', $warehouse->ID, $export->ID],
                                    'method' => 'DELETE',
                                    'style' =>'display: inline'
                                ])
                            !!}
                                <button class="btn btn-danger">Delete</button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{route('exports.create', $warehouse->ID)}}"><button class="btn btn-primary">Tao yeu cau moi</button></a> 
    </div>
@stop