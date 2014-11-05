@extends('layouts.master')

@section('head')
    @parent
    <title>BNV 2013 - {{ $product->title }}</title>
@stop

@section('content')
    <h1>
        {{ $product->title }}
    </h1>
    <h2>
        Продуктов номер: {{ $product->series }} 
    </h2>
    <p>
        {{ $product->description }}
    </p>
    <br/>
    <div>
        <h3>
            Цена:{{ $product->price }} лева.
        </h3>
    </div>
    
@stop