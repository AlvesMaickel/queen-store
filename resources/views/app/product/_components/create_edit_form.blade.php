<div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ $action . __(' product') }}</div>

        <div class="card-body">
            @if (isset($product->id))
                <form method="POST" action="{{ route('app.product.update', ['product' => $product]) }}">
                    @method('PUT')
                @else
                    <form method="POST" action="{{ route('app.product.store') }}">
            @endif
            @csrf
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ $product->name ?? old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ $action . __(' Product') }}
                    </button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
