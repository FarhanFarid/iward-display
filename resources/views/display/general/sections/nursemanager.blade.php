<div class="card card-custom gutter-b mt-5" style="border-radius: 10px !important; background-color: #F0FFFF; border: solid; border-color: #ffffff; width: 100%; height: 200px">
    <div class="row mt-2">
        <div style="background-color: #70f9f9; padding: 10px; border-radius: 10px; text-align: center; width: 80%;">
            <h1 style="color: #168888; margin: 0;"><b>NURSE MANAGER</b></h1>
        </div>
    </div>

    <div class="row mt-3 px-2" style="color: #168888 ">
        <span style="font-size: 1.3rem; color:#000000; font-weight: 600;"><b><u>Weekdays</u></b></span>
        <span style="font-size: 1.3rem; color:#000000; font-weight: 600;"><b>1st Call &nbsp;&nbsp;:</b>&nbsp;&nbsp; {{ $rolesnm['firstcall'] }}</span>
        <span style="font-size: 1.3rem; color:#000000; font-weight: 600;"><b>2nd Call :</b>&nbsp;&nbsp; {{ $rolesnm['secondcall'] }}</span>
        <span style="font-size: 1.3rem; color:#000000; font-weight: 600;"><b><u>Weekend</u></b></span>
        <span style="font-size: 1.3rem; color:#000000; font-weight: 600;"><b>AM Call &nbsp;&nbsp;:</b>&nbsp;&nbsp; {{ $rolesnm['weekendam'] }}</span>
        <span style="font-size: 1.3rem; color:#000000; font-weight: 600;"><b>PM Call :</b>&nbsp;&nbsp; {{ $rolesnm['weekendpm'] }}</span>
        <span style="font-size: 1.3rem; color:#000000; font-weight: 600;"><b>ON Call &nbsp;:</b>&nbsp;&nbsp; {{ $rolesnm['oncall'] }}</span>
    </div>
</div>