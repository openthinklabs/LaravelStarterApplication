'use strict'

//dashboard page loading segment trigger
$(".refreshing").on("click", function() {
    $(".dimmer").addClass("active").delay(1500).queue(function() {
        $(".dimmer").removeClass("active").dequeue();
    });
});
//dashboard page loading segment trigger

//Pace Loading (On Navbar) Function
function paceLoading() {
    var paceOptions = {
        restartOnRequestAfter: false
    };

    $(document).ajaxStart(function() {
        Pace.restart();
    });
}
//Pace Loading (On Navbar) Function


'use strict';

$(document).ready(function() {
});