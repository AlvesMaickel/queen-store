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

            <div class="row mb-3">
                <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                <div class="col-md-6">
                    <textarea id="description" class="form-control @error('description') is-invalid @enderror"
                        name="description" row="3">{{ $product->description ?? old('description') }}</textarea>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="rate" class="col-md-4 col-form-label text-md-end">{{ __('Rate') }}</label>

                <div class="col-md-6">
                    <select name="rate" class="form-control @error('rate') is-invalid @enderror">
                        <option value="" {{ !$product->rate ? 'select' : '' }}>-- Select --</option>
                        <option value="1" {{ $product->rate  == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ $product->rate  == 2 ? 'selected' : '' }}>2</option>
                        <option value="3" {{ $product->rate  == 3 ? 'selected' : '' }}>3</option>
                        <option value="4" {{ $product->rate  == 4 ? 'selected' : '' }}>4</option>
                        <option value="5" {{ $product->rate  == 5 ? 'selected' : '' }}>5</option>

                    </select>

                    @error('rate')
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
