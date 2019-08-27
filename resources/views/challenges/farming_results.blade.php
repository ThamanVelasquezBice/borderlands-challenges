@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                {{ $legendary->flavor_text }}
            </div>

            <div>
                <h3>Farm the {{ $legendary->name }} it drops from {{ $loot_source->name }} at {{ $region }}</h3><br>
                <img class="borderlands-image" src="{{ $legendary->image_url }}" />
            </div>

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
