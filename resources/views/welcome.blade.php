@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Borderlands Challenge Generator
            </div>

            <div class="row">
                <div class="col">
                    @include('challenges.farming')
                </div>

                <div class="col">
                    @include('challenges.generator')
                </div>
            </div>
        </div>
    </div>
@endsection
