(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0});
        return false;
    });


    
})(jQuery);

function sendMail() {
        const submitBtn = document.getElementById('submitBtn');
        const loader = document.getElementById('loader');

        loader.style.display = "block";
        submitBtn.disabled = true;

    let parms = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        subject: "Get 50% discount",
        phone: document.getElementById("mobile").value,
        course: document.getElementById("course").value,
        dob: document.getElementById("dob").value,
        address_1: document.getElementById("present-address").value,
        address_2: document.getElementById("permanent-address").value,
        academic_qualification: document.getElementById("qualification").value,
        message: document.getElementById("message").value,
    };


    emailjs.send("service_9ohnmmf", "template_s9uen9u", parms)
        .then(function () {
            alert("Email sent successfully!");
            document.getElementById("admission-form").reset();
        }).catch(function (error){
            alert("Failed to send message. Please try again.");
        }).finally(()=> {
            loader.style.display = "none";
            submitBtn.disabled = false;
        });
}