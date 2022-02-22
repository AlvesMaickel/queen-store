@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @component('app.product_tag._components.create_edit_form', ['tags' => $tags, 'product' => $product])
            @endcomponent
        </div>
    </div>
@endsection
