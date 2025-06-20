$(document).ready(function () {

    // const ward = "{{ request()->route('ward') }}";

    console.log(ward);

    function refreshSections() {
        $("#cardiothoracic-section").load("/refresh/cardiothoracic");
        $("#cardiology-section").load("/refresh/cardiology");
        $("#nursemanager-section").load("/refresh/nursemanager");
        $("#anaesthesia-section").load("/refresh/anaesthesia");
        $("#pchc-section").load("/refresh/pchc");
        $("#other-section").load("/refresh/other");
    }

    setInterval(function() {
        $("#ert-section").load("/refresh/ert?ward=" + ward);
    }, 10000); // Reload every 5 seconds

    setInterval(function() {
        $("#sa-section").load("/refresh/sa?ward=" + ward);
    }, 10000 );

    function updateLastUpdatedTime() {
        const now = new Date();
        const options = {
            day: '2-digit',
            month: '2-digit',
            year: 'numeric',
            hour: 'numeric',
            minute: '2-digit',
            hour12: true
        };
        const formatted = now.toLocaleString('en-GB', options).replace(',', '');
        document.getElementById('last-updated-time').textContent = formatted;
    }

    function updateDateTime() {
        const now = new Date();

        // Time (HH:mm:ss)
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');
        document.getElementById('live-clock').textContent = `${hours}:${minutes}:${seconds}`;

        // Date (Day, DD Month YYYY)
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const formattedDate = now.toLocaleDateString('en-GB', options);
        document.getElementById('live-date').textContent = formattedDate;
    }

    // Initial load
    refreshSections();
    updateDateTime();
    updateLastUpdatedTime();

    // Set intervals
    setInterval(updateLastUpdatedTime, 1000000);
    setInterval(refreshSections, 100000); // Every 10s
    setInterval(updateDateTime, 1000);      // Every 1s
});