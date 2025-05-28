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
    
    
    // Initiate the wowjs
    new WOW().init();


    
    
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





// send mail 
function sendMail() {
    const submitBtn = document.getElementById("submitBtn");
    const loader = document.getElementById("loader");

    loader.style.display = "block";
    submitBtn.disabled = true;

    let params = {
        firstName : document.getElementById("firstName").value,
        lastName : document.getElementById("lastName").value,
        email : document.getElementById("email").value,
        subject : document.getElementById("subject").value,
        message : document.getElementById("message").value,
    };

    emailjs.send('service_9ohnmmf', 'template_w0mamf3', params)
        .then(function(response) {
            console.log("SUCCESS!", response.status, response.text);
            alert("Message sent successfully!");
            document.getElementById("contactForm").reset();
        }).catch(function (error) {
            console.error("Failed to send mail: ".error);
            alert("Failed to send message. Please try again.");
        }).finally(()=> {
            loader.style.display = "none";
            submitBtn.disabled = false;
        });
};

