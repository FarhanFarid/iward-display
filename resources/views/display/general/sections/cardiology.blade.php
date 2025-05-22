<div class="card card-custom gutter-b mt-5" style="border-radius: 10px !important; background-color: #F5FFFA; border: solid; border-color: #ffffff; width: 100%; height: 200px">
    <div class="row mt-2">
        <div style="background-color: #c3ffe1; padding: 10px; border-radius: 10px; text-align: center; width: 80%;">
            <h1 style="color: #1c7b4b; margin: 0;"><b>CARDIOLOGY</b></h1>
        </div>
    </div>
    <div class="row mt-3 px-2">
        <div class="mt-2" style="overflow-y: auto; flex: 1; padding: 0 10px;">
            <table class="table table-sm m-0" style="width: 100%; table-layout: fixed; font-size: 1.2rem;">
                <tbody style="font-size: 1.7rem; color:#1c7b4b; font-weight: 600;">
                    <tr>
                        <td style="padding: 2px; width: 15%;"><b>Consultant</b></td>
                        <td class="text-truncate" style="padding: 2px;">{{ $rolescd['consultant'] }}</td>
                        <td style="padding: 2px; width: 15%;"><b>Cardiologist</b></td>
                        <td class="text-truncate" style="padding: 2px;">{{ $rolescd['cardiologist'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 2px; width: 15%;"><b>1st Call</b></td>
                        <td class="text-truncate" style="padding: 2px;">{{ $rolescd['firstcall'] }}</td>
                        <td style="padding: 2px; width: 15%;"><b>2nd Call</b></td>
                        <td class="text-truncate" style="padding: 2px;">{{ $rolescd['secondcall'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 2px; width: 15%;"><b>MO Call</b></td>
                        <td class="text-truncate" style="padding: 2px;">{{ $rolescd['mo'] }}</td>
                        <td style="padding: 2px; width: 15%;"><b>EP</b></td>
                        <td class="text-truncate" style="padding: 2px;">{{ $rolescd['ep'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
