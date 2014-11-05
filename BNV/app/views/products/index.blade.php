@extends('layouts.master')

@section('head')
    @parent
    <title>BNV 2013 - {{ $category->name }}</title>
@stop

@section('content')

<h1>
    {{$category->name}}
</h1>
<ul>
    @foreach($category->products as $product)
    <li>
        <article>
            <header>
                <h3>
                    {{ HTML::Link("product/{$product->id}", e(ucwords($product->title)), array($product->id)) }}
                </h3>
            </header>
            <p>      
                {{ HTML::Link("product/{$product->id}", substr($product->description, 0, 250). '...прочети още', array($product->id)) }}
            </p>
            <br/>
            <p>
                <h4>
                    Цена: {{ HTML::Link("product/{$product->id}", $product->price, array($product->id)) }} лева.
                </h4>
            </p>
        </article>
        <hr/>                    
    </li>
    @endforeach
</ul>
@stop