<div class="card card-custom gutter-b mt-5" style="border-radius: 10px !important; background-color: #e1faff; border: solid; border-color: #ffffff; width: 100%; height: 215px">
    <div class="row mt-2">
        <div style="background-color: #007dca; padding: 10px; border-radius: 10px; text-align: center; width: 95%; padding-top: 5px !important; padding-bottom: 5px !important;">
            <span style="color: #ffffff; margin: 0; font-weight: 1000; -webkit-text-stroke: 1px black; font-size: 22px !important;">
                ANAESTHESIA
            </span>
        </div>
    </div>
    <div class="row mt-3 px-2">
        <div class="mt-2" style="overflow-y: auto; flex: 1; padding: 0 10px;">
            <table class="table table-striped table-sm m-0" style="width: 100%; table-layout: fixed; font-size: 1.2rem; border: 1px solid #a0a0a0; border-collapse: collapse;">
                <tbody style="font-size: 1.7rem; color:#000000; font-weight: 400;">
                    <tr>
                        <td style="padding: 3px; width: 15%; border: 1px solid #a0a0a0;"><b>Consultant</b></td>
                        <td class="text-truncate" style="padding: 3px; border: 1px solid #a0a0a0;">{{ $rolesanaes['consultant'] }}</td>
                        <td style="padding: 3px; width: 16%; border: 1px solid #a0a0a0;"><b>SR</b></td>
                        <td class="text-truncate" style="padding: 3px; border: 1px solid #a0a0a0; ">{{ $rolesanaes['sr'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 3px; width: 15%; border: 1px solid #a0a0a0;"><b>SR ICU</b></td>
                        <td class="text-truncate" style="padding: 3px; border: 1px solid #a0a0a0;">{{ $rolesanaes['sricu'] }}</td>
                        <td style="padding: 3px; width: 15%; border: 1px solid #a0a0a0;"><b>MO Call</b></td>
                        <td class="text-truncate" style="padding: 3px; border: 1px solid #a0a0a0;">{{ $rolesanaes['mo'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>