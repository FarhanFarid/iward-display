<div class="row mt-10 px-5">
    <div class="card card-custom" style="width: 100%; border-radius: 10px; background-color: #e1faff; border: 1px solid #ddd; padding: 1.5rem;">
        <div style="background-color: #007dca; padding: 7px; border-radius: 10px; text-align: center;">
            <span style="color: #ffffff; font-weight: 1000; -webkit-text-stroke: 1px black; font-size: 22px;">
                Patients
            </span>
        </div>
        <br/>
        <div class="table-responsive">
            <table class="table table-striped m-0" style="width: 100%; table-layout: fixed; font-size: 1.7rem; border-collapse: collapse; border: 1px solid #ffffff;">
                <style>
                    .table-striped > tbody > tr:nth-of-type(even) {
                      --bs-table-accent-bg: #ffffff;
                    }
                  </style>
                <thead class="thead-light">
                    <tr style="background-color: #3fdcff; color: #000000; font-weight: 600" class="text-center">
                        <th style="width: 10%; padding: 2px; border: 1px solid #ffffff;">Bed</th>
                        <th style="width: 9%; padding: 2px; border: 1px solid #ffffff;">Status</th>
                        <th style="width: 8%; padding: 2px; border: 1px solid #ffffff;">MRN</th>
                        <th style="width: 10%; padding: 2px; border: 1px solid #ffffff;">Doctor</th>
                        <th style="width: 10%; padding: 2px; border: 1px solid #ffffff;">Procedure / Surgery</th>
                        <th style="width: 15%; padding: 2px; border: 1px solid #ffffff;">Nil By Mouth</th>
                        <th style="width: 10%; padding: 2px; border: 1px solid #ffffff;">LOS</th>
                        <th style="width: 13%; padding: 2px; border: 1px solid #ffffff;">Alert</th>
                        <th style="width: 15%; padding: 2px; border: 1px solid #ffffff;">Remarks</th>
                    </tr>
                </thead>
                <tbody style="color: #000000; font-weight: 400;">
                    @foreach($chunk as $bed)
                    @php
                        $los = null;
                        if (!empty($bed['admdate'])) {
                            $admissionDate = \Carbon\Carbon::createFromFormat('d/m/Y', $bed['admdate']);
                            $los = $admissionDate->diffInDays(\Carbon\Carbon::now());
                        }
                    @endphp
                        <tr>
                            <td style="padding: 2px; border: 1px solid #ffffff;" class="text-center">
                                <div class="d-flex justify-content-center align-items-center" style="gap: 4px;">
                                    <img
                                        src="{{ isset($bed['bedtype1']) && $bed['bedtype1'] == 'Monitor' ? asset('media/logo/monitor-logo.png') : (isset($bed['bedtype1']) && $bed['bedtype1'] == 'Nearby' ? asset('media/logo/nearby-logo.png') : '') }}"
                                        class="w-20px"
                                        style="{{ (isset($bed['bedtype1']) && in_array($bed['bedtype1'], ['Monitor', 'Nearby'])) ? '' : 'visibility: hidden;' }}"
                                    >
                                    <span>{{ $bed['bedno'] ?? 'Nurse Station' }}</span>
                                </div>
                            </td>
                            @if(isset($bed['mrn']))
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">Occupied</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">
                                    <span class="{{ isset($bed['flag']) && $bed['flag']->financial == 1 ? 'text-success' : 'text-danger' }}">
                                        {{ $bed['mrn'] ?? '-' }}
                                    </span>
                                </td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">
                                    @if(isset($bed['careprov']) && $bed['careprov'] != null)
                                        @php
                                            $cpTypeID = $bed['careprov']->cpTypeID;
                                            $badgeClass = in_array($cpTypeID, [43, 44, 45]) ? 'badge bg-success' : (
                                                          in_array($cpTypeID, [23, 24]) ? 'badge bg-primary' : (
                                                          in_array($cpTypeID, [21, 22, 36, 37]) ? 'badge bg-warning text-dark' : 'badge bg-secondary')
                                                        );
                                        @endphp
                                        <span class="{{ $badgeClass }}" style="font-size: 1.7rem;">
                                            {{ $bed['careprov']->cpCode }}
                                        </span>
                                    @else
                                        {{ $bed['patdemo']['epiDoc'] ?? '-' }}
                                    @endif
                                </td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">
                                    @if(isset($bed['flag']) && $bed['flag']->procedure == 1)
                                        {{$bed['flag']->procedure_remark}}
                                    @else
                                      -
                                    @endif
                                </td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">
                                    @if(isset($bed['flag']) && $bed['flag']->nbm == 1)
                                        <pre style="color: #000000; font-weight: 400; font-size: 1.3rem; font-family: 'Poppins', sans-serif; ">{{$bed['flag']->nbm_remark}}</pre>
                                    @else
                                      -
                                    @endif
                                </td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">
                                    @if($los !== null)
                                        @php $losDays = intval($los); @endphp
                                        @if($losDays > 14)
                                            <span class="badge bg-light-warning text-dark" style="font-size: 1.7rem;">
                                                {{ $losDays }} days
                                            </span>
                                        @else
                                            {{ $losDays }} days
                                        @endif
                                    @else
                                        -
                                    @endif
                                </td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">
                                    @if(isset($bed['flag']) && $bed['flag']->fall_risk == 1)
                                        <img src="{{ asset('media/logo/fallrisk-logo.png') }}" class="w-30px">
                                    @endif
                                    @if(isset($bed['flag']) && $bed['flag']->heart_failure == 1)
                                        <img src="{{ asset('media/logo/hf-logo.png') }}" class="w-30px">
                                    @endif
                                    @if(isset($bed['flag']) && $bed['flag']->respi == 1)
                                        <img src="{{ asset('media/logo/resp-logo.png') }}" class="w-30px">
                                    @endif
                                    @if(isset($bed['flag']) && $bed['flag']->nephro == 1)
                                        <img src="{{ asset('media/logo/nephro-logo.png') }}" class="w-30px">
                                    @endif
                                    @if(isset($bed['flag']) && $bed['flag']->neuro == 1)
                                        <img src="{{ asset('media/logo/neuro-logo.png') }}" class="w-30px">
                                    @endif
                                    @if(isset($bed['flag']) && $bed['flag']->gastro == 1)
                                        <img src="{{ asset('media/logo/gastro-logo.png') }}" class="w-30px">
                                    @endif
                                    @if(isset($bed['flag']) && $bed['flag']->infdisease == 1)
                                        <img src="{{ asset('media/logo/inf-logo.png') }}" class="w-30px">
                                    @endif
                                    @if(isset($bed['flag']) && $bed['flag']->dildnr == 1)
                                        <img src="{{ asset('media/logo/dnr-logo.png') }}" class="w-30px">
                                    @endif
                                    @if(isset($bed['flag']) && $bed['flag']->high_risk == 1)
                                        <img src="{{ asset('media/logo/highrisk-logo.png') }}" class="w-30px">
                                    @endif
                                    @if(isset($bed['flag']) && $bed['flag']->ent == 1)
                                        <img src="{{ asset('media/logo/ent-logo.png') }}" class="w-30px">
                                    @endif
                                    @php
                                        $isDischargedToday = false;
                                        if (!empty($bed['meddisdate'])) {
                                            $isDischargedToday = \Carbon\Carbon::createFromFormat('d/m/Y', $bed['meddisdate'])->isToday();
                                        }
                                    @endphp
                                    @if($isDischargedToday)
                                        <img src="{{ asset('media/logo/discharge-logo.png') }}" class="w-20px">
                                    @endif
                                </td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">
                                    @if(isset($bed['flag']) && $bed['flag']->fasting == 1)
                                        <pre style="color: #000000; font-weight: 400; font-size: 1.3rem; font-family: 'Poppins', sans-serif; ">{{$bed['flag']->fasting_remark}}</pre>
                                    @else
                                      -
                                    @endif
                                </td>
                            @elseif (!empty($bed['bedstatus']) && $bed['bedstatus'] == "Unavailable")
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">{{ $bed['bedstatus'] }}</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">-</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">-</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">-</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">-</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">-</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">{{ $bed['bedstatuscmt'] }}</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">-</td>
                            @else
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">Unoccupied</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">-</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">-</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">-</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">-</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">-</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">-</td>
                                <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">-</td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


