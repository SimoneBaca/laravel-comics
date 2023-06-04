@extends('layouts.first')
@section('content')
<div class="bg-darkgray">
    <div class="pt-5 container position-relative">
        <div class="position-absolute serie">
            <h5 class="white m-0">CURRENT SERIES</h5>
        </div>
        <div class="row g-5">
            @foreach (config("CONF.comics") as $fumetto)
            <div class="col-xl-2 col-3">
                <div class="carta">
                    <img class="img-comic mb-3" src="{{$fumetto['thumb']}}" alt="">
                    <span class="white">{{$fumetto['series']}}</span>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-5 pb-4">
            <button class="white btn-load btn">LOAD MORE</button>
        </div>
    </div>
</div>
@endsection