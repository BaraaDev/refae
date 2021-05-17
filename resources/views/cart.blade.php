@extends('layouts.main')

@section('content')


    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Cart</h1>
                <ul>
                    <li class="item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="item"><a href=""><i class='bx bx-chevrons-right'></i>Cart</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{ asset('images/cart.jpg') }}" alt="Demo Image">
        </div>
    </div>


    <section id="cart" class="cart-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-table-container">
                        <table class="table table-cart">
                            <thead>
                                <tr>
                                    <th class="product-col">Product</th>
                                    <th class="price-col">Price</th>
                                    <th class="qty-col">Qty</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <form action="{{ route('doCheckout') }}" method="POST">
                                @csrf

                                @foreach ($items as $item)
                                <tr class="product-row">
                                    <td class="product-col">
                                        <figure class="product-image-container">
                                            <a href="#" class="product-image">
                                                <img src="{{asset('website/img/cart1.jpg')}}" alt="product">
                                            </a>
                                        </figure>
                                        <h3 class="product-title">
                                            <a href="#">{{ $item->id }}</a>

                                            <input type="hidden" value="{{ $item->id }}" name="product_id">
                                            <input type="hidden" value="{{\Cart::getTotal()}}" name="total">
                                            <input type="hidden" value="{{ $item->price }}" name="price">
                                            <input type="hidden" value=" {{ $item->quantity }}" name="quantity">
                                        </h3>
                                    </td>
                                    <td>{{ $item->price }}

                                    </td>
                                    <td> {{ $item->quantity }} </td>
                                    <td>{{ $item->price * $item->quantity }}</td>
                                </tr>

                                @endforeach
                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart-summary">
                        <h3>Summary</h3>
                        <table class="table table-totals">
                            <tbody>
                                <tr>
                                    <td>Subtotal</td>
                                    <td>${{\Cart::getTotal()}}</td>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <td>$0.00</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Order Total</td>
                                    <td>${{\Cart::getTotal()}}</td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="checkout-methods">
                            <button type="submit" class="btn btn-block btn-sm btn-primary">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
