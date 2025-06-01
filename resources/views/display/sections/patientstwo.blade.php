<div class="row mt-20 px-15" style="justify-content: center; align-items: center;">
    <div class="card card-custom gutter-b" style="border-radius: 10px !important; background-color: #75e6ff; border: solid; border-color: #ffffff; width: 100%;">
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
    <div class="card card-custom" style="width: 100%; border-radius: 10px; background-color: #fce3ee; border: 1px solid #ddd; padding: 1.5rem;">
        <div style="background-color: #a31b56; padding: 7px; border-radius: 10px; text-align: center;">
            <span style="color: #ffffff; font-weight: 1000; -webkit-text-stroke: 1px black; font-size: 22px;">
                Patients
            </span>
        </div>
        <br/>
        <div class="table-responsive">
            <table class="table table-striped m-0" style="width: 100%; table-layout: fixed; font-size: 1.7rem; border-collapse: collapse; border: 1px solid #a31b56;">
                <thead class="thead-light">
                    <tr style="background-color: #a31b567c; color: #fce3ee; font-weight: 1000; -webkit-text-stroke: 1px black;" class="text-center">
                        <th style="width: 10%; padding: 2px; border: 1px solid #a31b56;">Bed</th>
                        <th style="width: 10%; padding: 2px; border: 1px solid #a31b56;">Status</th>
                        <th style="width: 10%; padding: 2px; border: 1px solid #a31b56;">MRN</th>
                        <th style="width: 30%; padding: 2px; border: 1px solid #a31b56;">Doctor</th>
                        <th style="width: 10%; padding: 2px; border: 1px solid #a31b56;">LOS</th>
                        <th style="width: 10%; padding: 2px; border: 1px solid #a31b56;">Remarks</th>
                    </tr>
                </thead>
                <tbody style="color: #a31b56; font-weight: 800;">
                    @foreach($chunk as $bed)
                    @php
                        $los = null;
                        if (!empty($bed['admdate'])) {
                            $admissionDate = \Carbon\Carbon::createFromFormat('d/m/Y', $bed['admdate']);
                            $los = $admissionDate->diffInDays(\Carbon\Carbon::now());
                        }
                    @endphp
                        <tr>
                            <td style="padding: 2px; border: 1px solid #781548;" class="text-center">{{ $bed['bedno'] ?? 'Nurse Station' }}</td>
                            @if(isset($bed['mrn']))
                                <td class="text-success text-center" style="padding: 2px; border: 1px solid #a31b56;">Occupied</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #a31b56;">{{ $bed['mrn'] ?? '-' }}</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #a31b56;">{{ $bed['patdemo']['epiDoc'] ?? '-' }}</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #a31b56;">{{ $los !== null ? intval($los) . ' days' : '-' }}</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #a31b56;">@if(isset($bed['bedtype1'])  && $bed['bedtype1'] != "" ) {{$bed['bedtype1']}} @else {{"-"}}  @endif</td>
                            @elseif (!empty($bed['bedstatus']) && $bed['bedstatus'] == "Unavailable")
                                <td class="text-danger text-center" style="padding: 2px; border: 1px solid #a31b56;">{{ $bed['bedstatus'] }}</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #a31b56;">-</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #a31b56;">-</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #a31b56;">-</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #a31b56;">{{ $bed['bedstatuscmt'] }}</td>
                            @else
                                <td class="text-muted text-center" style="padding: 2px; border: 1px solid #a31b56;">Unoccupied</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #a31b56;">-</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #a31b56;">-</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #a31b56;">-</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #a31b56;">@if(isset($bed['bedtype1'])  && $bed['bedtype1'] != "" ) {{$bed['bedtype1']}} @else {{"-"}}  @endif</td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
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

