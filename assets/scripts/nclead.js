$("#ncform").on("submit", function(ev, frm) {
    ev.preventDefault();

    // alert("elcsipve");

    //get input field values
    var user_name = $("input[name=r_name]").val();
    var user_email = $("input[name=r_email]").val();
    var user_landingid = $("input[name=r_pageid]").val();
    var user_acceptgdpr = $("input[name=r_acceptgdpr]").is(":checked")?1:0;
    var user_acceptmarketing = $("input[name=r_acceptmarketing]").is(":checked")?1:0;


    var proceed = true;
    var output = "";

    if ( $("input[name=r_human]").val().length > 0 ) {
        proceed = false;
    }


    //everything looks good! proceed...
    if (proceed) {
        //data to be sent to server
        var post_data = {
            name: user_name,
            email: user_email,
            landingid: user_landingid,
            acceptgdpr: user_acceptgdpr,
            acceptmarketing: user_acceptmarketing
        };
        $("#ncformsubmit").addClass("disabled");
        $("#ncformsubmit").attr("disabled", "disabled");
        $("#ncformsubmit").text($("#ncformsubmit").data('progresstext'));

        //Ajax post data to server
        $.post(
            $("#ncform").attr("action"),
            post_data,
            function(response) {


                //load json data from server and output message
                if (response.type === "error") {
                    output = '<p class="itsnotok">' + response.text + '</p>';
                    console.log(response.text);
                } else {
                    output = '<p class="itsok">' + response.text + '</p>';
                    $("#ncform").addClass("is-alreadysent");
                    $("#ncformresult").prepend(output);
                    $("#ncformresult").addClass("is-active");

                    window.dataLayer = window.dataLayer || [];
                    window.dataLayer.push({
                        'event': 'Probaberlet Success'
                    });

                    //reset values in all input fields
                    $("#ncform input").val("");
                    $("#ncform textarea").val("");
                }
                $("#ncformresult")
                    .hide()
                    .html(output)
                    .slideDown();
                $("#ncformsubmit").removeClass("disabled");
                $("#ncformsubmit").removeAttr("disabled");
                $("#ncformsubmit").text($("#ncformsubmit").data('sendtext'));
            },
            "json"
        );
    } else {
        location.href = 'https://bikram.hu/';
    }

    return false;
});

//reset previously set border colors and hide all message on .keyup()
$("#ncform input, #ncform textarea, #ncform #r_acceptgdpr").keyup(function() {
    //$("#contact_form input, #contact_form textarea").css('border-color', '');
    $("#ncformresult").slideUp();
    $("#formerror").slideUp();
});

$("#ncform #r_acceptgdpr").on("change", function() {
    $("#ncformresult").slideUp();
    $("#formerror").slideUp();
});

$("#ncform select[name=r_site]").on("change", function() {
    //alert(this.value);
    $('#formdiscl').html('<p><strong>' + this.value +'</strong></p>');
    // $("#formdiscl").slideUp();
});
