@extends('layouts.app')

@section('content')
    <h1>All Store Products</h1>
    <hr />
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Description</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->alias }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->description }}</td>
            </tr>
        @endforeach
    </table>
    @if(count($products) <= 0)
        <p>NO RESULTS FOUND.</p>
    @endif
    <hr />
    <h1><a href="{{ url('/cart') }}"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></h1>
@stop