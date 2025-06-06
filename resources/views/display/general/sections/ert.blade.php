<div class="card card-custom gutter-b mt-5" style="border-radius: 10px !important; background-color: #e1faff; border: solid; border-color: #ffffff; width: 100%; height: 300px; display: flex; flex-direction: column;">
    <!-- Title -->
    <div class="row mt-2">
        <div style="background-color: #007dca; padding: 10px; border-radius: 10px; text-align: center; width: 95%; padding-top: 5px !important; padding-bottom: 5px !important;">
            <span style="color: #ffffff; margin: 0; font-weight: 1000; -webkit-text-stroke: 1px black; font-size: 22px !important;">
                EMERGENCY RESPONSE TEAM
            </span>
        </div>
    </div>
    <!-- Table Container -->
    <div class="mt-10" style="overflow-y: auto; flex: 1; padding: 0 10px;">
        <table class="table table-striped m-0" style="width: 100%; table-layout: fixed; font-size: 1.7rem; border-collapse: collapse; border: 1px solid #ffffff;">
            <thead>
                <tr style="background-color: #3fdcff; color: #000000; font-weight: 600;" class="text-center">
                    <th style="width: 10%; padding: 2px; border: 1px solid #ffffff;">Role</th>
                    <th style="width: 30%; padding: 2px; border: 1px solid #ffffff;">AM</th>
                    <th style="width: 30%; padding: 2px; border: 1px solid #ffffff;">PM</th>
                    <th style="width: 30%; padding: 2px; border: 1px solid #ffffff;">On Call</th>
                </tr>
            </thead>
            <tbody style="color: #000000; font-weight: 400;">
                <tr>
                    <td style="padding: 2px; border: 1px solid #ffffff;" class="text-center"><b>Incident Officer</b></td>
                    <td style="padding: 2px; border: 1px solid #ffffff;" class="text-center text-truncate">{{ $rolesert['ioam'] }}</td>
                    <td style="padding: 2px; border: 1px solid #ffffff;" class="text-center text-truncate">{{ $rolesert['iopm'] }}</td>
                    <td style="padding: 2px; border: 1px solid #ffffff;" class="text-center text-truncate">{{ $rolesert['iooncall'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 2px; border: 1px solid #ffffff;" class="text-center"><b>Fire Warden</b></td>
                    <td style="padding: 2px; border: 1px solid #ffffff;" class="text-center text-truncate">{{ $rolesert['fwam'] }}</td>
                    <td style="padding: 2px; border: 1px solid #ffffff;" class="text-center text-truncate">{{ $rolesert['fwpm'] }}</td>
                    <td style="padding: 2px; border: 1px solid #ffffff;" class="text-center text-truncate">{{ $rolesert['fwoncall'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 2px; border: 1px solid #ffffff;" class="text-center"><b>Fire Squad</b></td>
                    <td style="padding: 2px; border: 1px solid #ffffff;" class="text-center text-truncate">{{ $rolesert['fsam'] }}</td>
                    <td style="padding: 2px; border: 1px solid #ffffff;" class="text-center text-truncate">{{ $rolesert['fspm'] }}</td>
                    <td style="padding: 2px; border: 1px solid #ffffff;" class="text-center text-truncate">{{ $rolesert['fsoncall'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 2px; border: 1px solid #ffffff;" class="text-center"><b>Rescue Squad</b></td>
                    <td style="padding: 2px; border: 1px solid #ffffff;" class="text-center text-truncate">{{ $rolesert['rsam'] }}</td>
                    <td style="padding: 2px; border: 1px solid #ffffff;" class="text-center text-truncate">{{ $rolesert['rspm'] }}</td>
                    <td style="padding: 2px; border: 1px solid #ffffff;" class="text-center text-truncate">{{ $rolesert['rsoncall'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    
</div>
