{{-- @extends('layouts.display-master')

@section('content')

<div class="container-fluid px-4" style="max-width: 100vw; overflow-x: hidden; padding-bottom: 60px;">
    <div class="row mt-5 px-15" style="justify-content: center; align-items: center;">
        <div class="card card-custom gutter-b" 
            style="border-radius: 10px !important; background-color: #75e6ff; border: solid; border-color: #ffffff; width: 100%;">
            <div class="row m-3">
                <div class="col-md-12">
                    <div style="position: relative; height: 60px;">
                        <div style="display: flex; align-items: center; justify-content: space-between; height: 100%;">
                            <div></div>

                            <div style="font-size: 30px; font-weight: bold; color: #000; padding-left: 200px;">
                                WARD {{ $getward->location_name }}
                            </div>

                            <div style="background: #f6fbff; padding: 5px 10px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); min-width: 240px; text-align: center;">
                                <div id="live-date" style="font-weight: bold; font-size: 20px;"></div>
                                <div id="live-clock" style="font-size: 20px; font-weight: bold; color: #007bff;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('display.sections.patients', ['beds' => $beds])

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000" data-bs-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                @include('display.general.updates.oncallfour')
            </div>

            <div id="patients-slide-container"></div>
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

    <footer class="px-15" style="position: fixed; bottom: 0; width: 100%; background-color: #f8f9fa; padding: 0.5rem 1rem; font-size: 14px; color: #555; z-index: 999; box-shadow: 0 -1px 5px rgba(0,0,0,0.1); display: flex; justify-content: space-between; align-items: center;">
        <div style="font-size: 18px;">
            <b>Emergency Call ext:</b> 8888, <b>CCTV ext:</b> 8258
        </div>
        <div style="text-align: right; font-size: 18px;">
            <div><b>Last Updated At:</b> <span id="last-updated-time"></span></div>
        </div>
    </footer>
</div>

@endsection --}}
