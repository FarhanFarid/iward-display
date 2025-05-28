<div class="card card-custom gutter-b mt-5" style="border-radius: 10px !important; background-color: #f9eee5; border: solid; border-color: #ffffff; width: 100%; height: 200px">
    <div class="row mt-2">
        {{-- <div style="background-color: #ffffa2; padding: 10px; border-radius: 10px; text-align: center; width: 80%;">
            <h1 style="color: #787815; margin: 0;"><b>OTHERS</b></h1>
        </div> --}}
        <div style="background-color: #c06119; padding: 7px; border-radius: 10px; text-align: center; width: 95%; padding-top: 5px !important; padding-bottom: 5px !important;" >
            <span style="color: #ffffff; margin: 0; font-weight: 1000; -webkit-text-stroke: 1px black; font-size: 22px !important;">
                OTHERS
            </span>
        </div>
    </div>
    <div class="row mt-3 px-2">
        <div class="mt-2" style="overflow-y: auto; flex: 1; padding: 0 10px;">
            <table class="table table-sm m-0" style="width: 100%; table-layout: fixed; font-size: 1.2rem;">
                <tbody style="font-size: 1.7rem; color:#c06119; font-weight: 600;">
                    <tr>
                        <td style="padding: 2px; width: 15%;"><b>Perfusionist</b></td>
                        <td class="text-truncate" style="padding: 2px; padding-right: 10px !important;">: {{ $rolesoth['perfusionist'] }}</td>
                        <td style="padding: 2px; width: 15%;"><b>Physio</b></td>
                        <td class="text-truncate" style="padding: 2px;">: {{ $rolesoth['physiotherapist'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 2px; width: 15%;"><b>Dietitian</b></td>
                        <td class="text-truncate" style="padding: 2px;">: {{ $rolesoth['dietitian'] }}</td>
                        <td style="padding: 2px; width: 15%;"><b>Resp Lab</b></td>
                        <td class="text-truncate" style="padding: 2px;">: {{ $rolesoth['resplab'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 2px; width: 15%;"><b>CVT</b></td>
                        <td class="text-truncate" style="padding: 2px;">: {{ $rolesoth['cvt'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>