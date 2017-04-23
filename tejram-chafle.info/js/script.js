$(document).ready(function() {
    var options1 = {
        height: "150px",
        width: "150px",
        line_width: 8,
        color: "gray",
        starting_position: 00,
        percent: 25,
        text: "25%"
    }

    var AngularJs = $("#AngularJs-circle").gmpc(options1);
    AngularJs.gmpc('animate', 25, 2000);

    var options2 = {
        height: "150px",
        width: "150px",
        line_width: 8,
        color: "gray",
        starting_position: 00,
        percent: 60,
        text: "60%"
    }

    var Ionic = $("#Ionic-circle").gmpc(options2);
    Ionic.gmpc('animate', 60, 2000);

    var options3 = {
        height: "150px",
        width: "150px",
        line_width: 8,
        color: "gray",
        starting_position: 00,
        percent: 75,
        text: "75%"
    }

    var HTML5 = $("#HTML5-circle").gmpc(options3);
    HTML5.gmpc('animate', 75, 2000);
});