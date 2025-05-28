<div class="card card-custom gutter-b mt-5" style="border-radius: 10px !important; background-color: #FAEBD7; border: solid; border-color: #ffffff; width: 100%; height: 300px; display: flex; flex-direction: column;">
    <!-- Title -->
    <div class="row mt-2">
        <div style="background-color: #c07a1e; padding: 10px; border-radius: 10px; text-align: center; width: 95%; padding-top: 5px !important; padding-bottom: 5px !important;">
            <span style="color: #ffffff; margin: 0; font-weight: 1000; -webkit-text-stroke: 1px black; font-size: 22px !important;">
                STAFF ASSIGNMENT
            </span>
        </div>
    </div>

    <!-- Table Container -->
    <div class="mt-10" style="overflow-y: auto; flex: 1; padding: 0 10px;">
        <table class="table table-striped m-0" style="width: 100%; table-layout: fixed; font-size: 1.7rem; border-collapse: collapse; border: 1px solid green;">
            <thead>
                <tr style="background-color: #75480c6c; color: #FAEBD7; font-weight: 1000; -webkit-text-stroke: 1px black;" class="text-center">
                    <th style="width: 10%; padding: 2px; border: 1px solid #75470c;">Role</th>
                    <th style="width: 30%; padding: 2px; border: 1px solid #75470c;">AM</th>
                    <th style="width: 30%; padding: 2px; border: 1px solid #75470c;">PM</th>
                    <th style="width: 30%; padding: 2px; border: 1px solid #75470c;">On Call</th>
                </tr>
            </thead>
            <tbody style="color: #75470c; font-weight: 800;">
                <tr>
                    <td style="padding: 2px; border: 1px solid #75470c;" class="text-center"><b>Team Leader</b></td>
                    <td style="padding: 2px; border: 1px solid #75470c;" class="text-center text-truncate">{{ $rolessa['tlam'] }}</td>
                    <td style="padding: 2px; border: 1px solid #75470c;" class="text-center text-truncate">{{ $rolessa['tlpm'] }}</td>
                    <td style="padding: 2px; border: 1px solid #75470c;" class="text-center text-truncate">{{ $rolessa['tloncall'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 2px; border: 1px solid #75470c;" class="text-center"><b>Incharge</b></td>
                    <td style="padding: 2px; border: 1px solid #75470c;" class="text-center text-truncate">{{ $rolessa['iam'] }}</td>
                    <td style="padding: 2px; border: 1px solid #75470c;" class="text-center text-truncate">{{ $rolessa['ipm'] }}</td>
                    <td style="padding: 2px; border: 1px solid #75470c;" class="text-center text-truncate">{{ $rolessa['ioncall'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 2px; border: 1px solid #75470c;" class="text-center"><b>Medication</b></td>
                    <td style="padding: 2px; border: 1px solid #75470c;" class="text-center text-truncate">{{ $rolessa['medam'] }}</td>
                    <td style="padding: 2px; border: 1px solid #75470c;" class="text-center text-truncate">{{ $rolessa['medpm'] }}</td>
                    <td style="padding: 2px; border: 1px solid #75470c;" class="text-center text-truncate">{{ $rolessa['medoncall'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 2px; border: 1px solid #75470c;" class="text-center"><b>Runner</b></td>
                    <td style="padding: 2px; border: 1px solid #75470c;" class="text-center text-truncate">{{ $rolessa['runam'] }}</td>
                    <td style="padding: 2px; border: 1px solid #75470c;" class="text-center text-truncate">{{ $rolessa['runpm'] }}</td>
                    <td style="padding: 2px; border: 1px solid #75470c;" class="text-center text-truncate">{{ $rolessa['runoncall'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 2px; border: 1px solid #75470c;" class="text-center"><b>Obs. Nurse</b></td>
                    <td style="padding: 2px; border: 1px solid #75470c;" class="text-center text-truncate">{{ $rolessa['obsam'] }}</td>
                    <td style="padding: 2px; border: 1px solid #75470c;" class="text-center text-truncate">{{ $rolessa['obspm'] }}</td>
                    <td style="padding: 2px; border: 1px solid #75470c;" class="text-center text-truncate">{{ $rolessa['obsoncall'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
