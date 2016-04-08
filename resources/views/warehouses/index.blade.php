@extends('layout.layout')

@section('title', 'DANH MUC KHO')

@section('content')
    <ul>
    	@foreach($warehouses as $warehouse)
    	<div class="row">
    		<li class="col-sm-1">{{$warehouse->ID}}</li>
    		<li class="col-sm-1">{{$warehouse->MA_KHO}}</li>
    		<li class="col-sm-1">{{$warehouse->TEN_KHO}}</li>
    		<li class="col-sm-1">{{$warehouse->VI_TRI}}</li>
    		<li class="col-sm-1">{{$warehouse->LIEN_HE}}</li>
    		<li class="col-sm-1">{{$warehouse->GHI_CHU}}</li>
            <li class="col-sm-3 divider"></li>
            <a href="{{route('warehouse.show', $warehouse->ID)}}"><button class="col-sm-1 btn btn-sm btn-info">show</button></a>
            <a href="{{route('warehouse.edit', $warehouse->ID)}}"><button class="col-sm-1 btn btn-sm btn-success">edit</button></a>
            {!! Form::open([
                    'route' => ['warehouse.destroy', $warehouse->ID],
                    'method' => 'DELETE',
                    'style' =>'display: inline'
                ])
            !!}
                <button class="btn btn-sm btn-danger">Delete</button>
            {!! Form::close() !!}
    	</div>
    	@endforeach
    </ul>
@stop