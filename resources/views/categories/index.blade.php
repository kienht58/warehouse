@extends('layout.layout')

@section('title')
<title>QUAN LY KHO</title>
@stop

@section('content')
<h1 style="text-align: center">DANH MUC SAN PHAM TRONG KHO {{$warehouse->TEN_KHO}}</h1>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>Ma kho</td>
                    <td>ID san pham</td>
                    <td>Ma san pham</td>
                    <td>Ten san pham</td>
                    <td>Ma san pham nha cung cap</td>
                    <td>So luong</td>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->ID_KHO}}</td>
                        <td>{{$category->ID_SAN_PHAM}}</td>
                        <td>{{$category->MA_SAN_PHAM}}</td>
                        <td>{{$category->TEN_SAN_PHAM}}</td>
                        <td>{{$category->MA_SAN_PHAM_NHA_CUNG_CAP}}</td>
                        <td>{{$category->SO_LUONG}}  {{$category->ID_DON_VI_TINH}}</td>
                        <td>
                            <a href="{{route('categories.show', [$warehouse->ID, $category->ID])}}"><button class="btn btn-primary">Show</button></a>
                            <a href="{{route('categories.edit', [$warehouse->ID, $category->ID])}}"><button class="btn btn-success">Edit</button></a>
                            {!! Form::open([
                                    'route' => ['categories.destroy', $warehouse->ID, $category->ID],
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

        <a href="{{route('categories.create', $warehouse->ID)}}"><button class="btn btn-primary">Tao danh muc moi</button></a> 
    </div>
@stop