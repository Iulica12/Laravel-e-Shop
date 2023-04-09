@extends('layoutcos')

@section('title', 'Products')

@section('content')

    <div class="container products">

        <div class="row">

            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3" height="500px">
                    <div class="thumbnail">
                        <img src="{{ $product->photo }}" width="150" height="150">
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ (strtolower($product->description)) }}</p>
                            <p><strong>Price: </strong> {{ $product->price }}$</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!-- End row -->

    </div>

@endsection
