@extends('layouts.app')
@if(isset($_GET['store']))
    <!--{{ $currentStoreName = $_GET['store'] }} -->
    @section('content')
        <section id="cart_items">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                {{ Auth::user()->FirstName }} {{ Auth::user()->LastName }}'s Cart For {{$currentStoreName}}
                            </div>
                            <div class="panel-body">
                            <hr />
                            <div class="table-responsive cart_info">
                                @if(count($cart))
                                    <table class="table table-condensed">
                                        <thead>
                                        <tr class="cart_menu">
                                            <td class="image">Item</td>
                                            <td class="description">Name</td>
                                            <td class="price">Price</td>
                                            <td class="quantity">Quantity</td>
                                            <td class="total">Total</td>
                                            <td></td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!--{{$count = 1}}-->
                                        @foreach($cart as $item)
                                            <tr>
                                                <td class="cart_product">
                                                    <p>{{$count}}</p>
                                                </td>
                                                <td class="cart_description">
                                                    <h4>{{$item->name}}</h4>
                                                    <p>{{$item->id}}</p>
                                                </td>
                                                <td class="cart_price">
                                                    <p>${{$item->price}}</p>
                                                </td>
                                                <td class="cart_quantity">
                                                    <div class="cart_quantity_button">
                                                        <p>{{$item->qty}}</p>
                                                    </div>
                                                </td>
                                                <td class="cart_total">
                                                    <p class="cart_total_price">${{$item->subtotal}}</p>
                                                </td>
                                                <td class="cart_delete">
                                                    <form action="{{ route('cart.remove', $item->rowId) }}?store={{$currentStoreName}}" method="post" class="form-inline" onsubmit='return confirm("Really Delete?")'>
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <span class="glyphicon glyphicon-trash"></span>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <!--{{$count++}}-->
                                        @endforeach
                                        @else
                                            <p>You have no items in the shopping cart</p>
                                        @endif
                                        </tbody>
                                    </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--/#cart_items-->
    @endsection
@else
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Carts Page
                    </div>
                    <div class="panel-body">
                        <p>No store currently selected</p>
                        <p>
                            Select a store to view that store's cart:
                            <select onChange="window.location.href=this.value">
                                <option value="#">Select a store</option>
                                @foreach($stores as $store)
                                    <option value="{{ url('/cart?store=' . $store->name) }}">{{$store->name}}</option>
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

