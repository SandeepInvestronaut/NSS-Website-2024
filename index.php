<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <link rel="stylesheet" href="main.css" />

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap");
  </style>
  <!--
        OwlCarousel CSS Links
    -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" type="image/png" href="global_assets/NSS-logo.png" />
  <title>BRACT Website</title>

<!-- Google Tag Manager Start -->
  <?php include('./GTM/gtm_head.php') ?>
<!-- Google Tag Manager End -->


</head>

<body>

<!-- Google Tag Manager Start -->
<?php include('./GTM/gtm_body.php') ?>
<!-- Google Tag Manager End -->
 
  <!--Header navbar section-->
  <div class="navbar_wrapper">
    
  <!--Header navbar section start-->
  <?php include('global_navbar.php') ?>
  <!--Header navbar section end-->
   
    <div class="hero_wrapper position-relative">
      <img src="global_assets/hero_img.png" alt="hero image" class="mw-100 w-100" loading="lazy" />
      <div class="text_over_img position-absolute">
        <!-- <p>Over 40 years of</p> -->
        <p>
          Building a<br />
          Better World

        </p>
      </div>
    </div>
  </div>

  <!--About section-->
  <div class="about_wrapper">
    <div class="about_header_text d-flex container">
      <h1 id="aboutus">About Us</h1>
      <p>
        Bansilal Ramnath Agarwal Charitable Trust (BRACT) focuses on voluntary community service and aims to develop the
        personality and character of student youth.
      </p>
    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="count_box_five" id="over_img">
          <p>
            <span id="count5" class="display-4"></span><span id="count5">+</span>
          </p>
          <p>Student Volunteers</p>
        </div>
        <div class="col-md-5">
          <div class="about_1_img">
            <img src="global_assets/ab_2.png" alt class="mw-100" />
          </div>
        </div>
        <div class="col-md-5 p-4">
          <div class="about_2_img">
            <img src="global_assets/ab_1.png" alt class="mw-100" />
            <p>
              Bansilal Ramnath Agarwal Charitable Trust (BRACT) drives a
              plethora of CSR activities that are conducted by the student
              community of its institutes.
            </p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="about_count_box d-flex flex-column">
            <div class="count_box_one">
              <p><span id="count1" class="display-4"></span><span>+</span></p>
              <p>Activities</p>
            </div>
            <div class="count_box_two">
              <p><span id="count2" class="display-4"></span><span>+</span></p>
              <p>Villages Covered</p>
            </div>
            <div class="count_box_three">
              <p><span id="count3" class="display-4"></span><span>+</span></p>
              <p>KG Plastic Eliminated</p>
            </div>
            <div class="count_box_four">
              <p><span id="count4" class="display-4"></span><span>+</span></p>
              <p>Trees Planted</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!--Members sercion-->

  <div class="members_section">
    <div class="member_inner_seciton container">
      <h1 id="member">Members of Bansilal Ramnath <br>Agarwal Charitable Trust</h1>
      <div class="container">
        <div class="row justify-content-between" id="member_row"></div>
      </div>


    </div>

  </div>
  </div>


  <!--Programs section-->
  <div class="programs_initiatives">
    <div class="progras_text d-flex justify-content-between container">
      <h1 id="programs">Programs and Activities</h1>
      <p>
        The programs and activities help develop a sense of community and
        responsibility among the students while creating a social impact.
      </p>
    </div>

    <div class="container">
      <div class="programs_count">
        <div class="card_container">
          <div id="owl-demo1" class="owl-carousel owl-theme"></div>
        </div>
      </div>
    </div>
  </div>

  <!--News section-->

  <div class="news">
    <div class="nmew_text d-flex container">
      <h1 id="news">News and Updates</h1>
      <p>
        Stay informed and inspired with the latest BRACT news, upcoming
        events, and impactful stories from our student volunteers.
      </p>
    </div>

    <div class="new_inner_wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="global_assets/news_1.png" alt class="mw-100" />
            <p class="left_img_text mt-4">Tree Plantation Drive</p>
            <p>
              BRACT had successfully completed a Tree Plantation Drive on 6th
              August 2023 in collaboration with Tech Mahindra with the
              participation of 30+ NSS volunteers<span id="news_dots">...</span>
              <span class="hidden" id="moreText1">
                participating. This drive started at 8:00 AM at Anandvan-1, NIBM Road, Kondhwa, Pune. Thanks to the NSS volunteers who contributed their cause for the environment, 30+ trees were successfully planted. All required tools for tree plantation were provided by the Anandvan Foundation. At the event, Mr. Praveen Kumar Anand showed their presence as the chief of the event. Mr Manish Ghule guided volunteers on how to plant a tree, and gave their valuable guidance and support throughout the event.
              </span>
              <button
                class="toggle-button"
                onclick="newsUpdate('moreText1', 'news_dots', this)"
              >
                Read More
              </button>
            </p>
          </div>
          <div class="col-md-6">
            <div class="right_section_1">
              <div class="inner_section_1">
                <img src="global_assets/food.png" alt class="mw-100" />
              </div>
              <div class="text_section">
                <p>Food Donation Drive</p>
                <p>
                  BRACT, in collaboration with team AISSEC, undertook a commendable initiative to contribute towards the community's well-being. This initiative involved<span id="news_dots1">...</span>
                  <span class="hidden" id="moreText2">
                    food donation drives at St. Crispin’s Home and Poona School and Home for the Blind. The event was successfully completed along with 30+ volunteers. This endeavour not only fulfilled the primary goal of providing essential resources but also succeeded in spreading awareness about social responsibility and compassion.
                  </span>
                  <button
                    class="toggle-button"
                    onclick="newsUpdate('moreText2', 'news_dots1', this)"
                  >
                    Read More
                  </button>
                </p>
              </div>
            </div>
            <div class="right_section_1">
              <div class="inner_section_1">
                <img src="global_assets/Plastic.png" alt class="mw-100" />
              </div>
              <div class="text_section">
                <p>Plastic Waste Management</p>
                <p>
                  The “Plastic waste management” was a groundbreaking
                  initiative aimed at raising awareness about the detrimental
                  impact of plastic on the environment and<span id="news_dots2">...</span>
                  <span class="hidden" id="moreText3">
                    promoting sustainable alternatives. On 19th August 2023, BRACT had successfully organised this event for awareness on the harmful impact of plastic on our environment. 30+ volunteers and college students were present for this event. This drive started at 12:15 PM in front of E-Building VIIT College Pune. Throughout the event Prof. Nitin Sakhare, Prof. Vikas Kolekar, and Prof. Sharada Desai showed their presence and support for this event.
                  </span>
                  <button
                    class="toggle-button"
                    onclick="newsUpdate('moreText3', 'news_dots2', this)"
                  >
                    Read More
                  </button>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>

  <!--Testimonials-->
  <div class="testimonial">
    <div class="container">
      <h1 id="testimonial" class="testimonail">Testimonials</h1>
      <div id="owl-demo2" class="owl-carousel owl-theme"></div>
    </div>
  </div>

  <!--Footer section-->
 <?php include('global_footer.php') ?>
<!--Footer section end-->


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!--OwlCarousel JS-->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>