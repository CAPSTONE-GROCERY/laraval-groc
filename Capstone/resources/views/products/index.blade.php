@extends('layouts.app')
@if(isset($_GET['store']))
    <!--{{ $currentStoreName = $_GET['store'] }} -->
    <!--{{ $currentDepartmentName = 'Any' }} -->
    @if(isset($_GET['department']))
        <!--{{ $currentDepartmentName = $_GET['department'] }} -->
    @endif

@section('content')

    <div class="container">
        <h1>{{$currentStoreName}} Products</h1>
        <p>
            Specify the department:
            <select onChange="window.location.href=this.value">
                <option value="{{ url('/products?store=' . $currentStoreName . '&department=Any') }}">{{$currentDepartmentName}}</option>
                @if($currentDepartmentName != 'Any')
                    <option value="{{ url('/products?store=' . $currentStoreName . '&department=Any') }}">Any</option>
                @endif
                @foreach($departments as $department)
                    @if($currentDepartmentName != $department->name))
                        <option value="{{ url('/products?store=' . $currentStoreName . '&department='. $department->name) }}">{{$department->name}}</option>
                    @endif
                @endforeach
            </select>
        </p>
        <div id="sides">
            <div id="left-side">
                <input id="search" type="text" onkeyup="filter()" placeholder="Search for product..."/>
                <div id ="list-area">
                    <ul id="list">
                        <!--{{ $index = 0 }} -->
                        @foreach($products as $product)
                            @if($product->Store->name == $currentStoreName && ($product->Department->name == $currentDepartmentName || $currentDepartmentName == 'Any'))
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
                    <form id='product-form' method='post' action='/cart/store'>
                        {{ csrf_field() }}
                        <div id="product" ></div>
                    </form>
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
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Products Page
                    </div>
                    <div class="panel-body">
                        <p>No store currently selected</p>
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
                </div>
            </div>
        </div>
    </div>
@endsection
@endif

