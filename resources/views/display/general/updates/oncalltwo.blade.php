<div class="row mt-2" style="justify-content: center; align-items: center;">
    <div class="row">
        <div class="col-md-12">
            <div id="anaesthesia-section">
                @include('display.general.sections.anaesthesia')
            </div>
        </div> 
    </div>
</div>

<div class="row mt-2" style="justify-content: center; align-items: center;">
    <div class="row">
        <div class="col-md-12">
            <div id="pchc-section">
                @include('display.general.sections.pchc')
            </div>
        </div> 
    </div>
</div>

<div class="row mt-2" style="justify-content: center; align-items: center;">
    <div class="row">
        <div class="col-md-12">
            <div id="other-section">
                @include('display.general.sections.other')
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

