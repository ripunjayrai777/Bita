<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bobina Hotel-Contact</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php require('include/links.php');?>
</head>

<body class="bg-light">

<!-- nav bar + models  OR Header-->
<?php require('include/header.php'); ?>


<!-- Contact Us section -->
<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Eum, voluptates. Mollitia molestiae,<br> inventore nihil reiciendis dolorum
        consequatur ullam fuga cupiditate.</p>
</div>
<div class="container">
    <div class="row">
        <!-- left section -->
        <div class="col-lg-6 col-md-6 mb-5 px-4">

            <div class="bg-white rounded shadow p-4">
               <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113996.47088635694!2d83.3215095650238!3d26.76384460520052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3991446a0c332489%3A0x1ff3f97fdcc6bfa2!2sGorakhpur%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1720969179700!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

               <h5>Address</h5>
               <a href="https://maps.app.goo.gl/VnUPmywMQhvUXgB98" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                <i class="bi bi-geo-alt-fill"></i> Bobina Hotel, Gorakhpur, Uttar Pradesh
               </a>

               <h5 class="mt-4">Call Us</h5>
               <a href="tel: +919554613467" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +91 95546134XX</a>
               <br>
               <a href="tel: +919554613467" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +91 95546134XX
               </a>

               <h5 class="mt-4">Email</h5>
               <a href="mailto: ripunjayrai123@gmail.com" class="d-inline-block text-decoration-none text-dark">
               <i class="bi bi-envelope-fill"></i> ripunjayrai123@gmail.com
               </a>

               <h5 class="mt-4">Follow Us</h5>
                <a href="#" class="d-inline-block text-dark fs-5 me-2">
                <i class="bi bi-twitter me-1"></i>
                </a>
                <a href="#" class="d-inline-block text-dark fs-5 me-2">
                    <i class="bi bi-facebook me-1"></i>
                </a>
                <a href="#" class="d-inline-block text-dark fs-5">
                    <i class="bi bi-instagram me-1"></i>
                </a>
            </div>

        </div>
        <!-- right section -->
        <div class="col-lg-6 col-md-6 px-4">
            <div class="bg-white rounded shadow p-4">
            <form>
                <h5>Send a message</h5>
                <div class="mt-3">
                    <label class="form-label" style="font-weight: 500;">Name</label>
                    <input type="text" class="form-control shadow-none">
                </div>
                <div class="mt-3">
                    <label class="form-label" style="font-weight: 500;">Email</label>
                    <input type="email" class="form-control shadow-none">
                </div>
                <div class="mt-3">
                    <label class="form-label" style="font-weight: 500;">Subject</label>
                    <input type="text" class="form-control shadow-none">
                </div>
                <div class="mt-3">
                    <label class="form-label" style="font-weight: 500;">Message</label>
                    <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                </div>
                <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
            </form>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<?php include('include/footer.php'); ?>



</body>
</html>