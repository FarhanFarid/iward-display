<div class="row mt-20 px-15" style="justify-content: center; align-items: center;">
    <div class="card card-custom gutter-b" 
        style="border-radius: 10px !important; background-color: #75e6ff; border: solid; border-color: #ffffff; width: 100%;">
        <div class="row m-3">
            <div class="col-md-12">
                <h1 style="padding: 0.5rem !important; margin-bottom: 0px !important; color: #000000; display: flex; align-items: center; justify-content: center; gap: 10px;">
                    WARD {{ $getward->location_name ?? $ward }}
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="row mt-10 px-15">
    <div class="card card-custom" 
        style="width: 100%; border-radius: 10px; background-color: #fcefe3; border: 1px solid #ddd; padding: 1.5rem;">
        
        <div style="background-color: #8c4a18c0; padding: 7px; border-radius: 10px; text-align: center; width: 100%; padding-top: 5px !important; padding-bottom: 5px !important;" >
            <span style="color: #ffffff; margin: 0; font-weight: 1000; -webkit-text-stroke: 1px black; font-size: 22px !important;">
                Patients
            </span>
        </div>
        <br/>

        <div class="row">
            @foreach($bedlist as $bed)
                <div class="col-6 col-md-2 mb-3">
                    <div class="card shadow-sm border @if(isset($bed['mrn'])) border-success @elseif ($bed['bedstatus'] == "Unavailable") border-danger @else border-secondary @endif">
                        <div class="card-body p-2">
                            <h6 class="card-title mb-1">Bed: {{ $bed['bedno'] ?? 'N/A' }}</h6>
        
                            @if(isset($bed['mrn']))
                                <p class="mb-0 text-success"><strong>Status:</strong> Occupied</p>
                                <p class="mb-0"><strong>MRN:</strong> {{ $bed['mrn'] ?? '-' }}</p>
                                <p class="mb-0"><strong>Doctor:</strong> {{ $bed['patdemo']['epiDoc'] ?? '-' }}</p>
                                <p class="mb-0"><strong>LOS:</strong> 2 days</p>
                            @elseif ($bed['bedstatus'] == "Unavailable")
                                <p class="mb-0 text-danger"><strong>Status:</strong> {{$bed['bedstatus']}}</p>
                                <p class="mb-12"><strong>Reason:</strong> {{$bed['bedstatuscmt']}}</p>
                            @else
                                <p class="text-muted mb-0">No patient assigned</p>
                                <p class="mb-12"><strong>Status:</strong> Unoccupied</p>  
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
            @if(!empty($bedlistns))
                @foreach($bedlistns as $patient)
                    <div class="col-6 col-md-2 mb-3">
                        <div class="card shadow-sm border border-success">
                            <div class="card-body p-2">
                                <h6 class="card-title mb-1">Bed: Nurse Station</h6>
                                <p class="mb-0 text-success"><strong>Status:</strong> Occupied</p>
                                <p class="mb-0"><strong>MRN:</strong> {{ $patient['mrn'] ?? '-' }}</p>
                                <p class="mb-0"><strong>Doctor:</strong> {{ $patient['patdemo']['epiDoc'] ?? '-' }}</p>
                                <p class="mb-0"><strong>LOS:</strong> 2 days</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>


        {{-- @foreach($bedChunks as $chunk)
            <div class="row mb-4">
                @foreach($chunk as $bed)
                    <div class="col-md-2 mb-3">
                        @include('display.sections.subviews.patientdetails', ['bed' => $bed])
                    </div>
                @endforeach
            </div>
        @endforeach --}}
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
