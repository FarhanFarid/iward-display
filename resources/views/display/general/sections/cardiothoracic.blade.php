<div class="card card-custom gutter-b mt-5" style="border-radius: 10px !important; background-color: #f9e7f9; border: solid; border-color: #ffffff; width: 100%; height: 200px">
    <div class="row mt-2">
        {{-- <h3 style="color: #000000; display: flex; align-items: center; justify-content: center;"><b>Cardiothoracic</b></h3>
        <hr style="width: 50%; color: #333333; margin: auto; height: 3px; border: none; background-color: #333333;"> --}}
        <div style="background-color: #9c336f; padding: 10px; border-radius: 10px; text-align: center; width: 95%; padding-top: 5px !important; padding-bottom: 5px !important;">
            <span style="color: #ffffff; margin: 0; font-weight: 1000; -webkit-text-stroke: 1px black; font-size: 22px !important;">
                CARDIOTHORACIC
            </span>
        </div>
    </div>
    
    <div class="row mt-3 px-2">
        <div class="mt-2" style="overflow-y: auto; flex: 1; padding: 0 10px;">
            <table class="table table-sm m-0" style="width: 100%; table-layout: fixed; font-size: 1.2rem;">
                <tbody style="font-size: 1.7rem; color:#9c3389; font-weight: 600;">
                    <tr>
                        <td style="padding: 2px; width: 15%;"><b>Consultant</b></td>
                        <td class="text-truncate" style="padding: 2px; padding-right: 10px !important;">: {{ $rolesct['consultant'] }}</td>
                        <td style="padding: 2px; width: 15%;"><b>1st Call</b></td>
                        <td class="text-truncate" style="padding: 2px;">: {{ $rolesct['firstcall'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 2px; width: 15%;"><b>2nd Call</b></td>
                        <td class="text-truncate" style="padding: 2px;">: {{ $rolesct['secondcall'] }}</td>
                        <td style="padding: 2px; width: 15%;"><b>3rd Call</b></td>
                        <td class="text-truncate" style="padding: 2px;">: {{ $rolesct['thirdcall'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 2px; width: 15%;"><b>ICU AM</b></td>
                        <td class="text-truncate" style="padding: 2px;">: {{ $rolesct['icuam'] }}</td>
                        <td style="padding: 2px; width: 15%;"><b>ICU PM</b></td>
                        <td class="text-truncate" style="padding: 2px;">: {{ $rolesct['icupm'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{-- <div class="row mt-3 px-2">
        <span style="font-size: 1.3rem; color:#000000; font-weight: 600;"><b>Consultant :</b>&nbsp;&nbsp; {{ $rolesct['consultant'] }}</span>
        <span style="font-size: 1.3rem; color:#000000; font-weight: 600;"><b>1st Call &nbsp;&nbsp;&nbsp;:</b>&nbsp;&nbsp; {{ $rolesct['firstcall'] }}</span>
        <span style="font-size: 1.3rem; color:#000000; font-weight: 600;"><b>2nd Call :</b>&nbsp;&nbsp; {{ $rolesct['secondcall'] }}</span>
        <span style="font-size: 1.3rem; color:#000000; font-weight: 600;"><b>3rd Call &nbsp;:</b>&nbsp;&nbsp; {{ $rolesct['thirdcall'] }}</span>
        <span style="font-size: 1.3rem; color:#000000; font-weight: 600;"><b>ICU AM &nbsp;&nbsp;:</b>&nbsp;&nbsp; {{ $rolesct['icuam'] }}</span>
        <span style="font-size: 1.3rem; color:#000000; font-weight: 600;"><b>ICU PM &nbsp;&nbsp;&nbsp;:</b>&nbsp;&nbsp; {{ $rolesct['icupm'] }}</span>
    </div> --}}
</div>
