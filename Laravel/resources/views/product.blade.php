@extends('product-layout')

@section('menu')
	@include('includes/menu')
@endsection

@section('content')
    <h1> Products </h1>      
    <article>
        <h2>{{$product->product_name}}</h2>
        <p>{{ $product->product_desc}}</p>
    </article>
    <a href="/">Goto home</a>
@endsection

