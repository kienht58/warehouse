@extends('layout.layout')

@section('title')
<title>QUAN LY KHO</title>
@stop

@section('content')
<h1 style="text-align: center">DANH SACH YEU CAU NHAP KHO {{$warehouse->TEN_KHO}}</h1>
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
                @foreach($imports as $import)          
                <tr>
                        <td>{{$import->ID_LY_DO_NHAP_KHO}}</td>
                        <td>{{$import->ID_YEU_CAU}}</td>
                        <td>{{$import->ID_KHO}}</td>
                        <td>{{$import->NGAY_XUAT_KHO}}</td>
                        <td>{{$import->NGUOI_TAO}}</td>
                        <td>
                            <a href="{{route('imports.show', [$warehouse->ID, $import->ID])}}"><button class="btn btn-primary">Show</button></a>
                            <a href="{{route('imports.edit', [$warehouse->ID, $import->ID])}}"><button class="btn btn-success">Edit</button></a>
                            {!! Form::open([
                                    'route' => ['imports.destroy', $warehouse->ID, $import->ID],
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

        <a href="{{route('imports.create', $warehouse->ID)}}"><button class="btn btn-primary">Tao yeu cau moi</button></a> 
    </div>
@stop