@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>{{ __('Congrats!! You are logged in!') }}</h4>
                    {{ __('Our system is very simple, but, like Leronardo da Vince said "Simplicity is the ultimate sophistication"') }}
                    <br>
                    {{ __('Enjoy what we have to offer to you, while still having time!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
