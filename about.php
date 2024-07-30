<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bobina Hotel-About</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<?php require('include/links.php');?>
<style>
    .box{
        border-color: var(--teal)!important;
    }
</style>
</head>

<body class="bg-light">

<!-- nav bar + models  OR Header-->
<?php require('include/header.php'); ?>


<!-- About Us -->
<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">ABOUT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Eum, voluptates. Mollitia molestiae,<br> inventore nihil reiciendis dolorum
        consequatur ullam fuga cupiditate.</p>
</div>

<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
            <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus hic sunt ipsa. Vitae, dolor maiores? Rerum? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus hic sunt ipsa. Vitae, dolor maiores? Rerum?
            </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
            <img src="images/about.jpg" class="w-100">
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/hotel.svg" width="70px">
                <h4 class="mt-3">100+ ROOMS</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/customers.svg" width="70px">
                <h4 class="mt-3">10,000+ CUSTOMERS</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/rating.svg" width="70px">
                <h4 class="mt-3">1000+ REVIEWS</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/about/staff.svg" width="70px">
                <h4 class="mt-3">100+ STAFFS</h4>
            </div>
        </div>
    </div>
</div>

<h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

<div class="container px-4">
<!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/about/team.jpg" class="w-100">
        <h5 class="mt-2">Random Name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/about/team.jpg" class="w-100">
        <h5 class="mt-2">Random Name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/about/team.jpg" class="w-100">
        <h5 class="mt-2">Random Name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/about/team.jpg" class="w-100">
        <h5 class="mt-2">Random Name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/about/team.jpg" class="w-100">
        <h5 class="mt-2">Random Name</h5>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

</div>

<!-- Footer -->
<?php include('include/footer.php'); ?>


<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 40,
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
    breakpoints: {
        320:{
          slidesPerView:1,
        },
        640:{
          slidesPerView:1,
        },
        768:{
          slidesPerView:3,
        },
        1024:{
          slidesPerView:3,
        }
      }
  });
</script>
</body>
</html>