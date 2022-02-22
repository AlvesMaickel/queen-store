<div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ $product->name }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('app.product-tag.store', ['product' => $product->id]) }}">
                @csrf
                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Tag') }}</label>

                    <div class="col-md-6">
                        <select name="tag_id" class="form-control @error('tag_id') is-invalid @enderror">
                            <option value="" selected>-- Select --</option>

                            @foreach ($tags as $key => $value)
                                <option value="{{ $value->id }}">
                                    {{ $value->name }}</option>
                            @endforeach
                        </select>

                        @error('tag_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Add Tag') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
