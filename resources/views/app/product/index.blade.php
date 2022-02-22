@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-1">
            <div class="card">
                <div class="card-header" style="text-align:right">
                    <form method="get" action="{{ route('app.product.create') }}">
                        @csrf
                        <button type="submit" class="btn btn-light mb-1"
                            style="box-shadow:0 0 2px black">
                            {{ __('Add Product') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($products as $product)
            @component('app.product._components.product_card', ['product' => $product])
            @endcomponent
        @endforeach        
    </div>

</div>
@endsection
