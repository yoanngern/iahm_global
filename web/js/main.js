// @codekit-prepend "vendor/jquery-2.2.2.js"
// @codekit-prepend "vendor/jquery.countdown.js"

$(document).ready(function () {

    $("body > header").on("click", "#burger a", function (event) {
        event.preventDefault();
        $("body > header ul#mobile").toggleClass("show");
    });

    $.ajax({
        url:"http://freegeoip.net/json/",
        dataType: 'jsonp', // Notice! JSONP <-- P (lowercase)
        success:function(data){
            // do stuff with json (in this case an array)
            //alert("Success");
            var country = data.country_name;
            console.log(country);

            $("body").attr("data-country", country);
        },
        error:function(){

        }
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

    /*
    $('#form_privilege').submit(function(event) {
        event.preventDefault();

        var formEl = $(this);
        var submitButton = $('button[type=submit]', formEl);

        $.ajax({
            type: 'POST',
            url: formEl.prop('action'),
            accept: {
                javascript: 'application/javascript'
            },
            data: formEl.serialize(),
            beforeSend: function() {
                submitButton.prop('disabled', 'disabled');
            }
        }).done(function(data) {
            submitButton.prop('disabled', false);
        });
    });

*/

});