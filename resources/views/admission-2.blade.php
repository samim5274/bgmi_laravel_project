<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admission</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/img/bgmibd.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/admission.css" rel="stylesheet">
    <link href="/css/menu.css" rel="stylesheet">
</head>

<body>


@include('layouts.menu')










    <!-- Courses Start -->
    <!-- Admission Section -->
    <section id="admission" class="py-5" style="background-color: #fff;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold display-4">Admission Form</h2>
                <p class="text-muted">Build your future with industry-demand skills. Fill in the form and our team will reach out shortly.</p>
            </div>
            <form id="admission-form" class="row g-4 shadow p-4 rounded-4" style="background-color: #f8f9fa;" onsubmit="event.preventDefault(); sendMail();">
                <!-- Name -->
                <div class="col-md-4">
                    <label for="name" class="form-label">Name*</label>
                    <input type="text" class="form-control" id="name" name="user_name" required>
                </div>
                <!-- Email -->
                <div class="col-md-4">
                    <label for="email" class="form-label">Email*</label>
                    <input type="email" class="form-control" id="email" name="user_email" required>
                </div>
                <!-- Mobile -->
                <div class="col-md-4">
                    <label for="mobile" class="form-label">Mobile No.*</label>
                    <input type="tel" class="form-control" id="mobile" name="user_mobile" required>
                </div>
                <!-- Course -->
                <div class="col-md-6">
                    <label for="course" class="form-label">Choose Your Course</label>
                    <select class="form-select" id="course" name="course" required>
                        <option selected disabled value="">-- Select Course --</option>
                        <option value="front-end-development">Front-End Development</option>
                        <option value="back-end-development">Back-End Development</option>
                        <option value="full-stack-developer">Full Stack Developer</option>
                        <option value="graphic-design">Graphic Design</option>
                        <option value="ui-ux-design">UI/UX Design</option>
                        <option value="motion-graphics">Motion Graphics</option>
                        <option value="advance-graphic-design">Advance Graphic Design</option>
                        <option value="digital-marketing">Digital Marketing</option>
                        <option value="seo">SEO</option>
                        <option value="social-media-marketing">Social Media Marketing</option>
                    </select>
                </div>
                <!-- DOB -->
                <div class="col-md-6">
                    <label for="dob" class="form-label">Date of Birth*</label>
                    <input type="date" class="form-control" id="dob" required>
                </div>
                <!-- Present Address -->
                <div class="col-md-6">
                    <label for="present-address" class="form-label">Your Present Address*</label>
                    <textarea class="form-control" id="present-address" rows="3" required></textarea>
                </div>
                <!-- Permanent Address -->
                <div class="col-md-6">
                    <label for="permanent-address" class="form-label">Your Permanent Address*</label>
                    <textarea class="form-control" id="permanent-address" rows="3" required></textarea>
                </div>
                <!-- Qualification -->
                <div class="col-12">
                    <label for="qualification" class="form-label">Academic Qualification</label>
                    <input type="text" class="form-control" id="qualification">
                </div>
                <!-- Message -->
                <div class="col-12">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea class="form-control" id="message" rows="4"></textarea>
                </div>
                <!-- Submit -->
                <div class="col-12 text-center">
                    <button type="submit" id="submitBtn" class="btn btn-warning px-5 py-2 fw-bold rounded-pill">SEND</button>
                </div>
                <div id="loader" class="mt-3" style="display: none;">
                    <div class="spinner-border text-secondary" role="status">
                        <span class="visually-hidden">Sending...</span>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Courses End -->


















<!-- call section start -->
    <section class="admission-cta-section py-5" id="admission-cta-section">
        <div class="container text-center">
            <div class="cta-box p-4 p-md-5 shadow-lg mx-auto" style="max-width: 700px;">
                <h2 class="fw-bold mb-3">Ready to Start Your Journey?</h2>
                <p class="lead mb-4">Secure your spot in the course today and unlock endless creative opportunities.</p>

                <a href="#admission" class="btn btn-color text-light px-4 py-2 fs-5 rounded-pill">Apply for Admission</a>

                <div class="mt-4">
                    <p class="text-danger-emphasis fw-semibold bg-warning-subtle d-inline-block px-3 py-2 rounded-3 mt-3">
                    <i class="fa-solid fa-lock"></i> Note: All information is safe and confidential.
                    </p>
                    <p class="mt-3 fs-5">
                        <strong>Need help?</strong><br>
                        <a href="tel:01787226675" class="text-decoration-none fw-semibold text-dark"><i class="fa-solid fa-phone"></i> +880 1787-226675</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
<!-- call section start -->






@include('layouts.footer')






    <!-- JavaScript Libraries -->       
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>

    <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
    (function(){
        emailjs.init({
            publicKey: "xw6wBfW7yJZbXWgKm",
        });
    })();
    </script>

    <!-- Template Javascript -->
    <script src="/js/admission-2.js"></script>

    
</body>

</html>