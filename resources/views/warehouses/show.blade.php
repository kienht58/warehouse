@extends('layout.layout')

@section('title')
<title>QUAN LY KHO</title>
@stop

@section('content')
<h1 style="text-align: center">Thong tin kho {{$warehouse->TEN_KHO}}</h1>
    <h2>Not available</h2>
    <a href="{{route('categories.index', $warehouse->ID)}}"><button class="btn btn-info">List danh muc san pham</button></a>
    <a href="{{route('categories.create', $warehouse->ID)}}"><button class="btn btn-primary">Tao danh muc moi</button></a> 
@stop