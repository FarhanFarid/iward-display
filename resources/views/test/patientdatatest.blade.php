{{-- @foreach($beds as $bed)
    <tr class="patient-row">
        <td style="padding: 2px; border: 1px solid #ffffff;" class="text-center">
            <div class="d-flex justify-content-center align-items-center" style="gap: 4px;">
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
                <span class="badge bg-success" style="font-size: 1.7rem;">
                    {{ $bed['careprov']->cpCode }}
                </span>
            </td>
            <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">
                @if(isset($bed['flag']) && $bed['flag']->fasting == 1)

                {!! nl2br(e($bed['flag']->fasting_remark)) !!}
                @else
                    -
                @endif
            </td>
        @elseif (!empty($bed['bedstatus']) && $bed['bedstatus'] == "Unavailable")
            <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">{{ $bed['bedstatus'] }}</td>
            <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">-</td>
            <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">-</td>
            <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">-</td>
        @else
            <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">Unoccupied</td>
            <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">-</td>
            <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">-</td>
            <td class="text-center" style="padding: 2px; border: 1px solid #ffffff;">-</td>
        @endif
    </tr>
@endforeach --}}