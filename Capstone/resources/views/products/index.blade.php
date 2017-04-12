@extends('layouts.app')
@if(isset($_GET['store']))
    <!--{{ $currentStoreName = $_GET['store'] }} -->
@section('content')

    <div class="container">
        <h1>{{$currentStoreName}} Products</h1>


        <div id="sides">
            <div id="left-side">
                <input id="search" type="text" onkeyup="filter()" placeholder="Search for product..."/>
                <div id ="list-area">
                    <ul id="list">
                        <!--{{ $index = 0 }} -->
                        @foreach($products as $product)
                            @if($product->Store->name == $currentStoreName)
                                <li value="{{ $index }}" class='product-type' onclick="clickProduct({{$product}});"> {{ $product->name }} </li>
                                <!--{{ $index++ }} -->
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div id="right-side">
                <div id="loader" class="loader" style="display: none;"></div>
                <div id = "displayProducts">
                    <div id="product" ></div>
                </div>
            </div>
        </div>
        <!--
        <table>
            <tr>
                <th>Department</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Description</th>
            </tr>
            @foreach($products as $product)
                @if($product->Store->name == $currentStoreName)
                    <tr>
                        <td> $product->Department->name }}</td>
                        <td> $product->name }}</td>
                        <td>$ $product->price }}</td>
                        <td> $product->quantity }}</td>
                        <td> $product->description }}</td>
                    </tr>
                @endif
            @endforeach
        </table>
        -->
        @if(count($products) <= 0)
            <p>NO RESULTS FOUND.</p>
        @endif
        <hr />
        <h1><a href="{{ url('/cart') }}"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></h1>
    </div>
@endsection
@else
@section('content')
    <div class="container">
        <h1>Product's Page</h1>
        <hr />
        <h3>No store currently selected</h3>
        <p>
            Select a store to choose products from:
            <select onChange="window.location.href=this.value">
                <option value="#">Select a store</option>
                @foreach($stores as $store)
                    <option value="{{ url('/products?store=' . $store->name) }}">{{$store->name}}</option>
                @endforeach
            </select>
        </p>
    </div>
@endsection
@endif

