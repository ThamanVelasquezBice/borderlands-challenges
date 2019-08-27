@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                <h3>{{ $issued_challenge }}</h3>
                <h5>{{ $description }}</h5>
            </div>

            @if(!empty($rules))
                <div>
                    <h3>Bonus Rules</h3>
                    <ul style="text-align: left;">
                        @foreach($rules as $bonus_rule)
                            <li>{{ str_replace('_', ' ', $bonus_rule->name) }}: {{ $bonus_rule->description->description }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div style="padding-top: 1em;" class="row">
                <div class="col">
                    <a class="btn btn-primary borderlands-btn" href="/">Take me home</a>
                </div>
                <div class="col">
                    <a class="btn btn-primary borderlands-btn" href="#" onclick="location.reload()">Retry</a>
                </div>
            </div>
        </div>
    </div>
@endsection
