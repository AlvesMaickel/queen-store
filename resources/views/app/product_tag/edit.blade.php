@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @component('app.product._components.create_edit_form', ['product' => $product, 'action' => __('Edit')])
        @endcomponent
    </div>
</div>
@endsection
