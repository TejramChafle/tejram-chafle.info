$(function() {
    $('#enter_name').hide();
    $('#enter_email').hide();
    $('#enter_valid_email').hide();
    $('#enter_message').hide();

    var options4 = {
        height: "150px",
        width: "150px",
        line_width: 8,
        color: "gray",
        starting_position: 00,
        percent: 35,
        text: "35%"
    }

    var css = $("#CSS3-circle").gmpc(options4);
    css.gmpc('animate', 35, 3000);

    var options5 = {
        height: "150px",
        width: "150px",
        line_width: 8,
        color: "gray",
        starting_position: 00,
        percent: 45,
        text: "45%"
    }

    var Bootstrap = $("#Bootstrap-circle").gmpc(options5);
    Bootstrap.gmpc('animate', 45, 2000);

    var options6 = {
        height: "150px",
        width: "150px",
        line_width: 8,
        color: "gray",
        starting_position: 00,
        percent: 25,
        text: "25%"
    }

    var PHP = $("#PHP-circle").gmpc(options6);
    PHP.gmpc('animate', 25, 2000);
})

function submitMessage() {

    var name = $('#name').val();
    name = $.trim(name);
    if (!name.length) {

        $('#enter_name').show();
        $('#enter_email').hide();
        $('#enter_valid_email').hide();
        $('#enter_message').hide();
        $("#name").focus();
        return false;
    }

    var email = $('#email').val();
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (email == "") {

        $('#enter_name').hide();
        $('#enter_email').show();
        $('#enter_message').hide();
        $('#enter_valid_email').hide();
        $("#email").focus();
        return false;
    }

    if (!email.match(mailformat)) {
        $('#enter_name').hide();
        $('#enter_email').hide();
        $('#enter_valid_email').show();
        $('#enter_message').hide();
        $("#email").focus();
        return false;
    }

    var message = $('#message').val();
    message = $.trim(message);
    if (!message.length) {

        $('#enter_name').hide();
        $('#enter_email').hide();
        $('#enter_message').show();
        $('#enter_valid_email').hide();
        $("#message").focus();
        return false;
    }

    var params = {
        name: name,
        email: email,
        message: message
    };

    $.ajax({
        url: '/index.php/Welcome/contact',
        type: 'post',
        dataType: 'json',
        data: params,
        success: function(resp) {
            console.log(resp);
            if (resp) {
                alertify
                    .alert("Your message sent successfully.");

                $('#name').val('');
                $('#email').val('');
                $('#message').val('');
            } else {
                alertify.error('Error !! Something went wrong');
            }
        }
    });
}


$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});

$(this).ekkoLightbox({
    alwaysShowClose: true,
    onShown: function() {
        console.log('Checking our the events huh?');
    },
    onNavigate: function(direction, itemIndex) {
        console.log('Navigating ' + direction + '. Current item: ' + itemIndex);
    }
});