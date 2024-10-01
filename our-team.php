<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

<!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

      <style>
    @import url("https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap");
  </style>

  <!--OwlCarousel CSS Links-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <title>bractspune Team</title>
    <link rel="stylesheet" href="./main.css" />


<!-- Google Tag Manager Start -->
<?php include('./GTM/gtm_head.php') ?>
<!-- Google Tag Manager End -->

</head>
<body>

 <!-- Google Tag Manager Start -->
<?php include('./GTM/gtm_head.php') ?>
<!-- Google Tag Manager End -->

  <!--Header navbar section-->
  <div class="navbar_wrapper">
    
    <!--Header navbar section start-->
    <?php include('./global_navbar.php') ?>
  <!--Header navbar section end-->

    <div class="hero_wrapper position-relative">
      <img src="./team_img/team.jpg" alt="hero image" class="mw-100 w-100" loading="lazy" />
      <div class="text_over_img position-absolute">
        <!-- <p>Over 40 years of</p> -->
        <p>
          Our Team

        </p>
      </div>
    </div>
  </div>


  <div class="team_info_section">
    <div class="container">
      <div class="row d-flex gap-4 align-items-center">
        <div class="col-md-4 team_card text-center">
          <img src="./team_img/shubham_joshi.svg" alt="shubham_joshi" class="mw-100" width="250px">
          <p class="name">Dr. Shubham Joshi</p>
          <p class="designation">Head, Sustainability Development</p>
          <p class="email"><span><img src="./team_img/s_email.svg" alt="email"></span>shubham.joshi@vit.edu</p>
          <p class="phone"><span><img src="./team_img/s_phone.svg" alt="email"></span>+91 89750 64564</p>
           <div class="linkedin_profile_wrapper d-flex justify-content-center gap-4 mt-3">
            <a class="linkedin" href="https://www.linkedin.com/in/shubhamjoshi91/" target="_blank"><img src="./team_img/shubham_jhosi_linkedin.svg" alt="shubham_jhosi_linkedin.svg" mw-100></a>
           <button id="openPdfBtn">Profile</button>
           </div>
        </div>
        <div class="col-md-7" style="text-align: justify;">
<p class="mb-3">Dr. Shubham Joshi is a valued IEEE senior member (Membership No: 90656134) since 2008. He is an envisioned researcher passionate about a new era of creation. He has 18 years of experience in teaching, research, and consulting. With the advent of a novel platform for learning and development, he has served many aspirants, technology-savvy people, working professionals and organisations.</p>
<p class="mb-3">To energise the world of technological opportunities with passion, intelligence, and innovation, he has served society to cater for the best. He has authored 75+ research papers, with citation of 1351 (Google Scholar), h-index 15; i-10 index 24, 32+ SCIE indexed publications, 35+ Scopus publications, granted 7 patents, 2 international books (Artificial Intelligence in Higher Education, Taylor and Francis, published in 2022), 15+ Patents, copyrights (Indian and international).</p>
<p class="mb-3">He has presented research papers and delivered talks at more than 35+ conferences since 2010. He presented his research paper at the IEEE International Conference in Bali, Indonesia. He has mentored the NBA and NAAC accreditation processes since 2012. He has been an ISACA Academic Advocate Member from August 2015 onwards and a life member of the Computer Society of India since April 2016. Dr. Shubham Joshi founded two start-up ventures in 2014 and 2016, namely Perception Endeavours, Pune and Quodra, Noida, respectively.</p>
<p>Currently, Dr. Shubham Joshi is the Head of Sustainability Development and Associate Professor in the Artificial Intelligence & Data Science Department at BRACT’s Vishwakarma Institute of Technology, an Autonomous Institute under Savitribai Phule Pune University Pune and PhD supervisor at NMIMS University Mumbai and Symbiosis International Deemed University Pune.</p>
        </div>
      </div>
    </div>
  </div>

  <div id="pdfModal" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>

        <iframe id="pdfViewer" src="" frameborder="0"></iframe>
    </div>
</div>



  <!--Footer section-->
  <?php include('./global_footer.php') ?>
  <!--Footer section end-->
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!--OwlCarousel JS-->

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

  <script src="./main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>
</html>