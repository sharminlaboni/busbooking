var Timepicker = function() {

    /*
    return {
        initTimepicker: function() {
            $('#time').timepicker({
                showMinutes: false,
                showPeriod: true,
                showLeadingZero: true,
                showMinutesLeadingZero: true
            });
        }
    };
    */

    return {
        initTimepicker: function() {
            $('#time').timepicker({
                template: 'dropdown',
                minuteStep: 15,
                snapToStep: true,
                showSeconds: false,
                showMeridian: true,
                showInputs: false
            });
        }
    };
}();
