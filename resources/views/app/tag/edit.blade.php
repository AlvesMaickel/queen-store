@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @component('app.tag._components.create_edit_form', ['tag' => $tag, 'action' => __("Edit tag")])
            @endcomponent
        </div>

    </div>
@endsection
