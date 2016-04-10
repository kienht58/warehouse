@extends('layout.layout')

@section('title')
<title>QUAN LY KHO</title>
@stop

@section('content')
<h1 style="text-align: center">DANH SACH KHO</h1>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>Ma kho</td>
                    <td>Ten kho</td>
                    <td>Vi tri</td>
                    <td>Lien he</td>
                    <td>Ghi chu</td>
                </tr>
            </thead>
            <tbody>
                @foreach($warehouses as $warehouse)
                    <tr>
                        <td>{{$warehouse->MA_KHO}}</td>
                        <td>{{$warehouse->TEN_KHO}}</td>
                        <td>{{$warehouse->VI_TRI}}</td>
                        <td>{{$warehouse->LIEN_HE}}</td>
                        <td>{{$warehouse->GHI_CHU}}</td>
                        <td>
                            <a href="{{route('warehouses.show', $warehouse->ID)}}"><button class="btn btn-primary">Show</button></a>
                            <a href="{{route('warehouses.edit', $warehouse->ID)}}"><button class="btn btn-success">Edit</button></a>
                            {!! Form::open([
                                    'route' => ['warehouses.destroy', $warehouse->ID],
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

        <a href="{{route('warehouses.create')}}"><button class="btn btn-primary">Tao kho moi</button></a>
    </div>
@stop