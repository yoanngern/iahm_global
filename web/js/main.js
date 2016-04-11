// @codekit-prepend "vendor/jquery-2.2.2.js"
// @codekit-prepend "vendor/jquery.countdown.js"

$(document).ready(function () {

    $("body > header").on("click", "#burger a", function () {
        event.preventDefault();
        $("body > header ul#mobile").toggleClass("show");
    });


    $end_time = $('#countdown').data("time");
    $language = $('#countdown').data("lang");

    $('#countdown').countdown($end_time, function (event) {

        if (event.type == "stoped") {
            $('#countdown').attr("data-live", "on");
        }

        if ($language == "fr") {
            $value = "LIVE dans ";
            $day = "jour";
            $days = "jours";
        } else {
            $value = "LIVE in ";
            $day = "day";
            $days = "days";
        }

        if (event.offset.days > 1) {

            $value += event.strftime('%-D ');
            $value += $days;


        } else if (event.offset.days == 1) {

            $value += event.strftime('%-D ');
            $value += $day;

        } else if (event.offset.hours >= 1) {

            $value += event.strftime('%-Hh');

        } else {

            $value += event.strftime('%-M\' %S\'\'');
        }


        $('.countdown_txt', this).html($value);
    });


});