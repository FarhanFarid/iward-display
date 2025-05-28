<div class="row mt-20 px-15" style="justify-content: center; align-items: center;">
    <div class="card card-custom gutter-b" 
        style="border-radius: 10px !important; background-color: #75e6ff; border: solid; border-color: #ffffff; width: 100%;">
        <div class="row m-3">
            <div class="col-md-12">
                <h1 style="padding: 0.5rem !important; margin-bottom: 0px !important; color: #000000; display: flex; align-items: center; justify-content: center; gap: 10px;">
                   WARD {{$getward->location_name}}
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="row mt-2 px-3" style="justify-content: center; align-items: center;">
    <div class="row">
        <div class="col-md-12">
            <div id="sa-section">
                @include('display.general.sections.staffassignment')
            </div>
        </div> 
    </div>
</div>

<div class="row mt-2 px-3" style="justify-content: center; align-items: center;">
    <div class="row">
        <div class="col-md-12">
            <div id="ert-section">
                @include('display.general.sections.ert')
            </div>
        </div> 
    </div>
</div>
<div class="row mt-1" style="justify-content: left; align-items: left;">
    <div class="row">
        <span style="text-align: right; font-size: 14px; color: #555;" > {{ \Carbon\Carbon::now()->format('l, j F Y') }} </span>
    </div>
    <div class="row">
        <span style="text-align: right; font-size: 14px; color: #555;" ><b>Last Updated At :</b> 05-02-2025, 3:08 PM </span>
    </div>
</div>

@push('script')
    <script>
        const ward = "{{ request()->route('ward') }}"; // extract from route
    </script>
    <script src="{{ asset('js/warddisplay/general.js') }}"></script>
@endpush

