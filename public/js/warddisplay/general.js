$(document).ready(function () {

    // console.log('hello');
    setInterval(function() {
        $("#cardiothoracic-section").load("/refresh/cardiothoracic");
    }, 10000); // Reload every 5 seconds

    setInterval(function() {
        $("#cardiology-section").load("/refresh/cardiology");
    }, 10000); // Reload every 5 seconds

    setInterval(function() {
        $("#nursemanager-section").load("/refresh/nursemanager");
    }, 10000); // Reload every 5 seconds

    setInterval(function() {
        $("#anaesthesia-section").load("/refresh/anaesthesia");
    }, 10000); // Reload every 5 seconds

    setInterval(function() {
        $("#pchc-section").load("/refresh/pchc");
    }, 10000); // Reload every 5 seconds

    setInterval(function() {
        $("#other-section").load("/refresh/other");
    }, 10000); // Reload every 5 seconds

    setInterval(function() {
        $("#ert-section").load("/refresh/ert?ward=" + ward);
    }, 10000); // Reload every 5 seconds

    setInterval(function() {
        $("#sa-section").load("/refresh/sa?ward=" + ward);
    }, 10000 ); // Reload every 5 seconds
});