<div class="card card-custom gutter-b mt-5" style="border-radius: 10px !important; background-color: #FFFFF0; border: solid; border-color: #ffffff; width: 100%; height: 200px">
    <div class="row mt-2">
        {{-- <h3 style="color: #000000; display: flex; align-items: center; justify-content: center;"><b>PCHC</b></h3>
        <hr style="width: 50%; color: #333333; margin: auto; height: 3px; border: none; background-color: #333333;"> --}}
        {{-- <div style="background-color: #ffffbe; padding: 10px; border-radius: 10px; text-align: center; width: 80%;">
            <h1 style="color: #4b4b13; margin: 0;"><b>PCHC</b></h1>
        </div> --}}
        <div style="background-color: #92921f; padding: 10px; border-radius: 10px; text-align: center; width: 95%; padding-top: 5px !important; padding-bottom: 5px !important;">
            <span style="color: #ffffff; margin: 0; font-weight: 1000; -webkit-text-stroke: 1px black; font-size: 22px !important;">
                PCHC
            </span>
        </div>
    </div>

    <div class="row mt-3 px-2">
        <div class="mt-2" style="overflow-y: auto; flex: 1; padding: 0 10px;">
            <table class="table table-sm m-0" style="width: 100%; table-layout: fixed; font-size: 1.2rem;">
                <tbody style="font-size: 1.7rem; color:#4b4b13; font-weight: 600;">
                    <tr>
                        <td style="padding: 2px; width: 15%;"><b>Consultant</b></td>
                        <td class="text-truncate" style="padding: 2px; padding-right: 10px !important;">: {{ $rolespchc['consultant'] }}</td>
                        <td style="padding: 2px; width: 15%;"><b>Cardiologist</b></td>
                        <td class="text-truncate" style="padding: 2px;">: {{ $rolespchc['cardiologist'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 2px; width: 15%;"><b>1st Call</b></td>
                        <td class="text-truncate" style="padding: 2px;">: {{ $rolespchc['firstcall'] }}</td>
                        <td style="padding: 2px; width: 15%;"><b>2nd Call</b></td>
                        <td class="text-truncate" style="padding: 2px;">: {{ $rolespchc['secondcall'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 2px; width: 15%;"><b>MO Call</b></td>
                        <td class="text-truncate" style="padding: 2px;">: {{ $rolespchc['mo'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>