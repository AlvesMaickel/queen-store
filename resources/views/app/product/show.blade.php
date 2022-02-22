@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-1">
                <div class="card">
                    <div class="card-header">
                        {{ $product->name }}
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($product->tags as $tag)
                        <li class="list-group-item" style="display:flex;justify-content:space-between">
                            <h6>{{ $tag->name }}</h6>
                            <form method="post"
                                action="{{ route('app.product-tag.destroy', ['product' => $product, 'tag_id' => $tag->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" width="40"
                                    title="{{ __('Delete Tag in This Product') }}">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </li>
                        {{-- @component('app.product._components.product_card', ['product' => $product])
                    @endcomponent --}}
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
@endsection
