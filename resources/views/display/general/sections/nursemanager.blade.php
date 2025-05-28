<div class="card card-custom gutter-b mt-5" style="border-radius: 10px !important; background-color: #F0FFFF; border: solid; border-color: #ffffff; width: 100%; height: 200px">
    <div class="row mt-2">
        {{-- <div style="background-color: #70f9f9; padding: 10px; border-radius: 10px; text-align: center; width: 80%;">
            <h1 style="color: #168888; margin: 0;"><b>NURSE MANAGER</b></h1>
        </div> --}}
        <div style="background-color: #1e8d8d; padding: 10px; border-radius: 10px; text-align: center; width: 95%; padding-top: 5px !important; padding-bottom: 5px !important;">
            <span style="color: #ffffff; margin: 0; font-weight: 1000; -webkit-text-stroke: 1px black; font-size: 22px !important;">
                NURSE MANAGER
            </span>
        </div>
    </div>

    <div class="row mt-3 px-2">
        <div class="mt-2" style="overflow-y: auto; flex: 1; padding: 0 10px;">
            <table class="table table-sm m-0" style="width: 100%; table-layout: fixed; font-size: 1.2rem;">
                <tbody style="font-size: 1.7rem; color:#1c7b4b; font-weight: 600;">
                    <tr>
                        <td style="padding: 2px; width: 15%;"><b>WEEKDAYS</b></td>
                        <td class="text-truncate" style="padding: 2px; padding-right: 10px !important;"></td>
                        <td style="padding: 2px; width: 15%;"><b>WEEKEND</b></td>
                        <td class="text-truncate" style="padding: 2px;"></td>
                    </tr>
                    <tr>
                        <td style="padding: 2px; width: 15%;"><b>1st Call</b></td>
                        <td class="text-truncate" style="padding: 2px; padding-right: 10px !important;">: {{ $rolesnm['firstcall'] }}</td>
                        <td style="padding: 2px; width: 15%;"><b>AM Call</b></td>
                        <td class="text-truncate" style="padding: 2px;">: {{ $rolesnm['weekendam'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 2px; width: 15%;"><b>2nd Call</b></td>
                        <td class="text-truncate" style="padding: 2px;">: {{ $rolesnm['secondcall'] }}</td>
                        <td style="padding: 2px; width: 15%;"><b>PM Call</b></td>
                        <td class="text-truncate" style="padding: 2px;">: {{ $rolesnm['weekendpm'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 2px; width: 15%;"></td>
                        <td class="text-truncate" style="padding: 2px;"></td>
                        <td style="padding: 2px; width: 15%;"><b>ON Call</b></td>
                        <td class="text-truncate" style="padding: 2px;">: {{ $rolesnm['oncall'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</div>