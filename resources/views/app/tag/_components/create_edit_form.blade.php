<div class="col-md-12 mb-1">
    <div class="card">
        <div class="card-header">
            @if (isset($tag->id))
                <form method="post" style="display:flex;align-items:center"
                    action="{{ route('app.tag.update', ['tag' => $tag]) }}">
                    @method('PUT')
                @else
                    <form method="post" style="display:flex;align-items:center" action="{{ route('app.tag.store') }}">
            @endif
            @csrf
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                style="width:50%" required autocomplete="name" autofocus value="{{ $tag->name ?? '' }}">
            <button type="submit" class="btn btn-light mx-3" style="box-shadow:0 0 2px black">
                @if (isset($tag->id))
                    {{ $action }}
                @else
                    <i class='fa fa-plus'></i>
                @endif
            </button>
            </form>
        </div>
    </div>
</div>
