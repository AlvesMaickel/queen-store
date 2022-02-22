@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12 mb-3">
                <h3>{{ __('Product Report') }}</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{ __('Name') }}</th>
                                    <th scope="col">{{ __('Description') }}</th>
                                    <th scope="col">{{ __('Rate') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <th scope="row">{{ $product->id }}</th>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->rate }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- <ul class="list-group"> --}}
                        {{-- @foreach ($tags as $tag)
                                @component('app.tag._components.product_list', ['tag' => $tag])
                                @endcomponent
                            @endforeach --}}
                        {{-- </ul> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
