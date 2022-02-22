<li class="list-group-item" onmouseover="show('{{ 'list-item-' . $tag->id }}')"
    onmouseout="hide('{{ 'list-item-' . $tag->id }}')">
    <div class="items-data" style="display:flex;justify-content:space-between">
        <h5>{{ $tag->name }}</h5>
        <div class="items-data" style="display:flex;">
            <form method="get" style="max-width:40px" action="{{ route('app.tag.edit', ['tag' => $tag]) }}">
                @csrf
                <button type="submit" class="btn btn-warning col-md-11" title="{{ __('Edit Tag') }}">
                    <i class="fa fa-pencil"></i>
                </button>
            </form>

            <form method="post" style="max-width:40px" action="{{ route('app.tag.destroy', ['tag' => $tag]) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary col-md-11" title="{{ __('Delete Tag') }}">
                    <i class="fa fa-trash"></i>
                </button>
            </form>
        </div>
    </div>
    <ul id="{{ 'list-item-' . $tag->id }}" class="list-group" hidden>
        @foreach ($tag->products as $product)
            <li class="list-group-item">{{ $product->name }}</li>
        @endforeach
    </ul>
</li>
