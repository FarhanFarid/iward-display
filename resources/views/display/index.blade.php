@extends('layouts.display-master')

@section('content')

<div class="container-fluid px-4" style="max-width: 100vw; overflow-x: hidden;">
    <div class="row mt-5 px-15" style="justify-content: center; align-items: center;">
        <div class="card card-custom gutter-b" 
            style="border-radius: 10px !important; background-color: #75e6ff; border: solid; border-color: #ffffff; width: 100%;">
            <div class="row m-3">
                <div class="col-md-12">
                    <div style="position: relative; height: 60px; display: flex; align-items: center; justify-content: center;">
                        <h1 style="margin: 0; color: #000000; position: absolute; left: 50%; transform: translateX(-50%);">
                            WARD {{ $getward->location_name }}
                        </h1>
                        <div id="live-clock" style="
                            position: absolute;
                            right: 0;
                            font-size: 1.7rem;
                            font-weight: bold;
                            background-color: #ffffff;
                            color: #333;
                            padding: 0.4rem 0.8rem;
                            border-radius: 8px;
                            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
                            font-family: 'Courier New', monospace;
                        ">
                            --
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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
</div>



@endsection
