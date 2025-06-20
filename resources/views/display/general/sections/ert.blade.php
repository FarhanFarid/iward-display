<div class="card card-custom gutter-b mt-5" style="border-radius: 10px !important; background-color: #e1faff; border: solid; border-color: #ffffff; width: 100%; height: 750px; display: flex; flex-direction: column;">
    <!-- Title -->
    <div class="row mt-2">
        <div style="background-color: #007dca; padding: 10px; border-radius: 10px; text-align: center; width: 95%; padding-top: 5px !important; padding-bottom: 5px !important;">
            <span style="color: #ffffff; margin: 0; font-weight: 1000; -webkit-text-stroke: 1px black; font-size: 22px !important;">
                AREA RESPONSE TEAM
            </span>
        </div>
    </div>
    <!-- Table Container -->
    <div class="mt-10" style="overflow-y: auto; flex: 1; padding: 0 10px;">
        <table class="table table-striped m-0" style="width: 100%; table-layout: fixed; font-size: 1.8rem; border-collapse: collapse; border: 1px solid #767676;">
            <thead>
                <tr style="background-color: #3fdcff; color: #000000; font-weight: 600;" class="text-center">
                    <th style="width: 10%; padding: 2px; border: 1px solid #767676;">Role</th>
                    <th style="width: 30%; padding: 2px; border: 1px solid #767676;">AM</th>
                    <th style="width: 30%; padding: 2px; border: 1px solid #767676;">PM</th>
                    <th style="width: 30%; padding: 2px; border: 1px solid #767676;">On Call</th>
                </tr>
            </thead>
            <tbody style="color: #000000; font-weight: 600;">
                <tr>
                    <td style="padding: 2px; border: 1px solid #767676;" class="text-center"><b>Incident Officer</b></td>
                    <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $rolesert['ioam'] }}</td>
                    <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $rolesert['iopm'] }}</td>
                    <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $rolesert['iooncall'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 2px; border: 1px solid #767676;" class="text-center"><b>Fire Warden</b></td>
                    <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $rolesert['fwam'] }}</td>
                    <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $rolesert['fwpm'] }}</td>
                    <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $rolesert['fwoncall'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 2px; border: 1px solid #767676;" class="text-center"><b>Fire Squad</b></td>
                    <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $rolesert['fsam'] }}</td>
                    <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $rolesert['fspm'] }}</td>
                    <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $rolesert['fsoncall'] }}</td>
                </tr>
                @php
                    $rsam = array_filter([$rolesert['rsam1'] ?? null, $rolesert['rsam2'] ?? null, $rolesert['rsam3'] ?? null, $rolesert['rsam4'] ?? null]);
                    $rspm = array_filter([$rolesert['rspm1'] ?? null, $rolesert['rspm2'] ?? null, $rolesert['rspm3'] ?? null, $rolesert['rspm4'] ?? null]);
                    $rsoncall = array_filter([$rolesert['rsoncall1'] ?? null, $rolesert['rsoncall2'] ?? null, $rolesert['rsoncall3'] ?? null, $rolesert['rsoncall4'] ?? null]);

                    $maxRows = max(count($rsam), count($rspm), count($rsoncall));
                    $maxRows = $maxRows > 0 ? $maxRows : 1; // fallback to at least one row
                @endphp

                @for ($i = 0; $i < $maxRows; $i++)
                    <tr>
                        @if ($i === 0)
                            <td style="padding: 2px; border: 1px solid #767676;" class="text-center" rowspan="{{ $maxRows }}">
                                <b>Rescue Squad</b>
                            </td>
                        @endif
                        <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $rsam[$i] ?? '' }}</td>
                        <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $rspm[$i] ?? '' }}</td>
                        <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $rsoncall[$i] ?? '' }}</td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
    
</div>
