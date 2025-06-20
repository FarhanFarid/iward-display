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

@push('script')
    <script src="{{ asset('js/warddisplay/general.js') }}"></script>
@endpush

