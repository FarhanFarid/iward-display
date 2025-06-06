@extends('layouts.display-master')

@section('content')

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            @include('display.general.updates.oncallone')
        </div>
        <div class="carousel-item">
            @include('display.general.updates.oncalltwo')
        </div>
        @foreach($bedChunks as $index => $chunk)
            <div class="carousel-item">
                @include('display.sections.patients', ['chunk' => $chunk, 'getward' => $getward])
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

@endsection
