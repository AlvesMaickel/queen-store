@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @component('app.tag._components.create_edit_form')
            @endcomponent
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
                        <ul class="list-group">
                            @foreach ($tags as $tag)
                                @component('app.tag._components.product_list', ['tag' => $tag])
                                @endcomponent
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
<script>
    function show(idRefer) {
        let list = document.getElementById(idRefer)
        list.hidden = false;
    }

    function hide(idRefer) {
        let list = document.getElementById(idRefer)
        list.hidden = true;
    }
</script>
