@extends('layouts.master')

@section('head')
    @parent
    <title>BNV2013 - Продукти</title>
@stop

@section('content')
<h1>Всички продукти</h1>

<div>
    <ul class="display">
        @foreach($categories as $category)
        <li>
            <h2>{{ HTML::Link("/equipments/$category->id", "$category->name") }}:</h2>
            
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
        </li>
        @endforeach
    </ul>
</div>
@stop