<div class="card card-custom gutter-b mt-5" style="border-radius: 10px !important; background-color: #e1faff; border: solid; border-color: #ffffff; width: 100%; height: 750px; display: flex; flex-direction: column;">
    <!-- Title -->
    <div class="row mt-2">
        <div style="background-color: #007dca; padding: 10px; border-radius: 10px; text-align: center; width: 95%; padding-top: 5px !important; padding-bottom: 5px !important;">
            <span style="color: #ffffff; margin: 0; font-weight: 1000; -webkit-text-stroke: 1px black; font-size: 22px !important;">
                STAFF ASSIGNMENT
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
                    <td style="padding: 2px; border: 1px solid #767676;" class="text-center"><b>Team Leader</b></td>
                    <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $rolessa['tlam'] }}</td>
                    <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $rolessa['tlpm'] }}</td>
                    <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $rolessa['tloncall'] }}</td>
                </tr>
                @php
                    $iam = array_filter([$rolessa['iam1'] ?? null, $rolessa['iam2'] ?? null, $rolessa['iam3'] ?? null, $rolessa['iam4'] ?? null, $rolessa['iam5'] ?? null, $rolessa['iam6'] ?? null]);
                    $ipm = array_filter([$rolessa['ipm1'] ?? null, $rolessa['ipm2'] ?? null, $rolessa['ipm3'] ?? null, $rolessa['ipm4'] ?? null, $rolessa['ipm5'] ?? null, $rolessa['ipm6'] ?? null]);
                    $ioncall = array_filter([$rolessa['ioncall1'] ?? null, $rolessa['ioncall2'] ?? null, $rolessa['ioncall3'] ?? null, $rolessa['ioncall4'] ?? null, $rolessa['ioncall5'] ?? null, $rolessa['ioncall6'] ?? null]);

                    $maxRows = max(count($iam), count($ipm), count($ioncall));
                    $maxRows = $maxRows > 0 ? $maxRows : 1; // fallback to at least one row
                @endphp
                @for ($i = 0; $i < $maxRows; $i++)
                    <tr>
                        @if ($i === 0)
                            <td style="padding: 2px; border: 1px solid #767676;" class="text-center" rowspan="{{ $maxRows }}">
                                <b>Incharge</b>
                            </td>
                        @endif
                        <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $iam[$i] ?? '' }}</td>
                        <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $ipm[$i] ?? '' }}</td>
                        <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $ioncall[$i] ?? '' }}</td>
                    </tr>
                @endfor
                @php
                    $medam = array_filter([$rolessa['medam1'] ?? null, $rolessa['medam2'] ?? null, $rolessa['medam3'] ?? null, $rolessa['medam4'] ?? null]);
                    $medpm = array_filter([$rolessa['medpm1'] ?? null, $rolessa['medpm2'] ?? null, $rolessa['medpm3'] ?? null, $rolessa['medpm4'] ?? null]);
                    $medoncall = array_filter([$rolessa['medoncall1'] ?? null, $rolessa['medoncall2'] ?? null, $rolessa['medoncall3'] ?? null, $rolessa['medoncall4'] ?? null]);

                    $maxRows = max(count($medam), count($medpm), count($medoncall));
                    $maxRows = $maxRows > 0 ? $maxRows : 1; // fallback to at least one row
                @endphp
                @for ($i = 0; $i < $maxRows; $i++)
                    <tr>
                        @if ($i === 0)
                            <td style="padding: 2px; border: 1px solid #767676;" class="text-center" rowspan="{{ $maxRows }}">
                                <b>Medication</b>
                            </td>
                        @endif
                        <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $medam[$i] ?? '' }}</td>
                        <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $medpm[$i] ?? '' }}</td>
                        <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $medoncall[$i] ?? '' }}</td>
                    </tr>
                @endfor

                @php
                    $runam = array_filter([$rolessa['runam1'] ?? null, $rolessa['runam2'] ?? null, $rolessa['runam3'] ?? null, $rolessa['runam4'] ?? null, $rolessa['runam5'] ?? null, $rolessa['runam6'] ?? null]);
                    $runpm = array_filter([$rolessa['runpm1'] ?? null, $rolessa['runpm2'] ?? null, $rolessa['runpm3'] ?? null, $rolessa['runpm4'] ?? null, $rolessa['runpm5'] ?? null, $rolessa['runpm6'] ?? null]);
                    $runoncall = array_filter([$rolessa['runoncall1'] ?? null, $rolessa['runoncall2'] ?? null, $rolessa['runoncall3'] ?? null, $rolessa['runoncall4'] ?? null, $rolessa['runoncall5'] ?? null, $rolessa['runoncall6'] ?? null]);

                    $maxRows = max(count($runam), count($runpm), count($runoncall));
                    $maxRows = $maxRows > 0 ? $maxRows : 1; // fallback to at least one row
                @endphp
                @for ($i = 0; $i < $maxRows; $i++)
                    <tr>
                        @if ($i === 0)
                            <td style="padding: 2px; border: 1px solid #767676;" class="text-center" rowspan="{{ $maxRows }}">
                                <b>Runner</b>
                            </td>
                        @endif
                        <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $runam[$i] ?? '' }}</td>
                        <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $runpm[$i] ?? '' }}</td>
                        <td style="padding: 2px; border: 1px solid #767676;" class="text-center text-truncate">{{ $runoncall[$i] ?? '' }}</td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>
