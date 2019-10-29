@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Borderlands Challenge Generator
            </div>

            <div class="row">
                <div class="col">
                    <farming games="{{ $games->toJson() }}"></farming>
                </div>

                <div class="col">
                    <challenge games="{{ $games->toJson() }}"></challenge>
                </div>
            </div>
        </div>
    </div>
@endsection
