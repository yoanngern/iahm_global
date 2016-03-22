// @codekit-prepend "vendor/jquery-2.2.2.js"

$(document).ready(function () {

    $("body > header").on("click", "#burger a", function () {
        event.preventDefault();
        $("body > header ul#mobile").toggleClass("show");
    });

});