<div class="row mt-2" style="justify-content: center; align-items: center;">
    <div class="row">
        <div class="col-md-12">
            <div id="cardiothoracic-section">
                @include('display.general.sections.cardiothoracic')
            </div>
        </div> 
    </div>
</div>

<div class="row mt-2" style="justify-content: center; align-items: center;">
    <div class="row">
        <div class="col-md-12">
            <div id="cardiology-section">
                @include('display.general.sections.cardiology')
            </div>
        </div> 
    </div>
</div>

<div class="row mt-2" style="justify-content: center; align-items: center;">
    <div class="row">
        <div class="col-md-12">
            <div id="nursemanager-section">
                @include('display.general.sections.nursemanager')
            </div>
        </div> 
    </div>
</div>

@push('script')
    <script src="{{ asset('js/warddisplay/general.js') }}"></script>
@endpush

