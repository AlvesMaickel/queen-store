<div class="col-md-3 mb-3">
    <div class="card">
        <div class="card-header">
            <img src="{{ asset('/img/generic.png') }}" alt="Product Image">
        </div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <h3>{{ $product->name }}</h3>
            <div class="card-buttons" style='display:flex'>
                <form method="get" style="min-width:25%"
                    action="{{ route('app.product-tag.create', ['product' => $product]) }}">
                    @csrf
                    <button type="submit" class="btn btn-success mb-1 col-md-11" title="{{ __('Add Tag') }}">
                        <i class="fa fa-plus"></i>
                    </button>
                </form>

                <form method="get" style="min-width:25%"
                    action="{{ route('app.product.show', ['product' => $product]) }}">
                    @csrf
                    <button type="submit" class="btn btn-info mb-1 col-md-11"
                        title="{{ __('See More About This Product') }}">
                        <i class="fa fa-info"></i>
                    </button>
                </form>

                <form method="get" style="min-width:25%"
                    action="{{ route('app.product.edit', ['product' => $product]) }}">
                    @csrf
                    <button type="submit" class="btn btn-warning mb-1 col-md-11" title="{{ __('Edit Product') }}">
                        {{-- <i class="fa fa-pen"></i> --}}
                        <i class="fa fa-pencil"></i>
                    </button>
                </form>

                <form method="post" style="min-width:25%"
                    action="{{ route('app.product.destroy', ['product' => $product]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary col-md-11" title="{{ __('Delete Product') }}">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>
