<div class="card card-custom gutter-b mt-5" style="border-radius: 10px !important; background-color: #FAEBD7; border: solid; border-color: #ffffff; width: 100%; height: 200px; display: flex; flex-direction: column;">
    <!-- Title -->
    <div class="row mt-2">
        <div style="background-color: #ffc982; padding: 10px; border-radius: 10px; text-align: center; width: 80%;">
            <h1 style="color: #75470c; margin: 0;"><b>STAFF ASSIGNMENT</b></h1>
        </div>
    </div>

    <!-- Table Container -->
    <div class="mt-2" style="overflow-y: auto; flex: 1; padding: 0 10px;">
        <table class="table table-sm m-0" style="width: 100%; table-layout: fixed; font-size: 1.2rem;">
            <thead>
                <tr style="background-color: #f5f5f5; color:#75470c">
                    <th style="width: 10%; padding: 2px;">Role</th>
                    <th style="width: 30%; padding: 2px;" class="text-center">AM</th>
                    <th style="width: 30%; padding: 2px;" class="text-center">PM</th>
                    <th style="width: 30%; padding: 2px;" class="text-center">On Call</th>
                </tr>
            </thead>
            <tbody style="color: #75470c">
                <tr>
                    <td style="padding: 2px;"><b>Team Leader</b></td>
                    <td class="text-center text-truncate" style="padding: 2px;">{{ $rolessa['tlam'] }}</td>
                    <td class="text-center text-truncate" style="padding: 2px;">{{ $rolessa['tlpm'] }}</td>
                    <td class="text-center text-truncate" style="padding: 2px;">{{ $rolessa['tloncall'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 2px;"><b>Incharge</b></td>
                    <td class="text-center text-truncate" style="padding: 2px;">{{ $rolessa['iam'] }}</td>
                    <td class="text-center text-truncate" style="padding: 2px;">{{ $rolessa['ipm'] }}</td>
                    <td class="text-center text-truncate" style="padding: 2px;">{{ $rolessa['ioncall'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 2px;"><b>Medication</b></td>
                    <td class="text-center text-truncate" style="padding: 2px;">{{ $rolessa['medam'] }}</td>
                    <td class="text-center text-truncate" style="padding: 2px;">{{ $rolessa['medpm'] }}</td>
                    <td class="text-center text-truncate" style="padding: 2px;">{{ $rolessa['medoncall'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 2px;"><b>Runner</b></td>
                    <td class="text-center text-truncate" style="padding: 2px;">{{ $rolessa['runam'] }}</td>
                    <td class="text-center text-truncate" style="padding: 2px;">{{ $rolessa['runpm'] }}</td>
                    <td class="text-center text-truncate" style="padding: 2px;">{{ $rolessa['runoncall'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 2px;"><b>Obs. Nurse</b></td>
                    <td class="text-center text-truncate" style="padding: 2px;">{{ $rolessa['obsam'] }}</td>
                    <td class="text-center text-truncate" style="padding: 2px;">{{ $rolessa['obspm'] }}</td>
                    <td class="text-center text-truncate" style="padding: 2px;">{{ $rolessa['obsoncall'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
