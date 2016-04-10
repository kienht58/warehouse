@extends('layout.layout')

@section('title')
<title>QUAN LY KHO</title>
@stop

@section('content')
<h1 style="text-align: center">Thong tin san pham</h1>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>Serial</td>
                    <td>Serial nha cung cap</td>
                    <td>Trang thai san pham</td>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->SERIAL}}</td>
                        <td>{{$product->SERIAL_NHA_CUNG_CAP}}</td>
                        <td>{{$product->ID_TRANG_THAI_SAN_PHAM}}</td>
                        <td>
                            <a href="{{route('products.show', [$warehouseID, $categoryID, $product->ID])}}"><button class="btn btn-primary">Show</button></a>
                            <a href="{{route('products.edit', [$warehouseID, $categoryID, $product->ID])}}"><button class="btn btn-success">Edit</button></a>
                            {!! Form::open([
                                    'route' => ['products.destroy', $warehouseID, $categoryID, $product->ID],
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

        <a href="{{route('products.create', [$warehouseID, $categoryID])}}"><button class="btn btn-primary">Tao san pham moi</button></a> 
    </div>
@stop