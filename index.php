<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Harward College</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="bootstrap.css">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css" />
  <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css" />
  <link rel="stylesheet" href="assets/css/owl.css" />
  <link rel="stylesheet" href="assets/css/lightbox.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="style.min.css" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <style>
    .dots-container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
      width: 100%;
      display: none;
    }

    .dot {
      height: 20px;
      width: 20px;
      margin-right: 10px;
      border-radius: 10px;
      background-color: #b3d4fc;
      animation: pulse 1.5s infinite ease-in-out;
    }

    .dot:last-child {
      margin-right: 0;
    }

    .dot:nth-child(1) {
      animation-delay: -0.3s;
    }

    .dot:nth-child(2) {
      animation-delay: -0.1s;
    }

    .dot:nth-child(3) {
      animation-delay: 0.1s;
    }

    @keyframes pulse {
      0% {
        transform: scale(0.8);
        background-color: #b3d4fc;
        box-shadow: 0 0 0 0 rgba(178, 212, 252, 0.7);
      }

      50% {
        transform: scale(1.2);
        background-color: #6793fb;
        box-shadow: 0 0 0 10px rgba(178, 212, 252, 0);
      }

      100% {
        transform: scale(0.8);
        background-color: #b3d4fc;
        box-shadow: 0 0 0 0 rgba(178, 212, 252, 0.7);
      }
    }
  </style>

  <script>
    window.addEventListener("load", function() {
      var loader = document.querySelector(".dots-container");
      loader.style.display = "none";
    });
  </script>

</head>

<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/Harward_College Colombo new2.png" alt="Image" class="logo_img" />
            </a>

            <ul class="nav" style="color: white;">
              <li class="scroll-to-section">
                <a href="#home" class="active">Home</a>
              </li>
              <li><a href="alumini.html">About Us</a></li>
              <li class="scroll-to-section"><a href="#Courses">Courses</a></li>
              <li><a href="alumini.html">Alumini</a></li>
              <li class="scroll-to-section">
                <a href="#contactUs">Contact Us</a>
              </li>
            </ul>
            <a class="menu-trigger">
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->



  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
      <source src="assets/images/course-video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="caption">
              <div data-aos="fade-down" data-aos-duration="1000" data-aos-once="false" data-aos-delay="50">
                <h6>Hello Students</h6>
              </div>

              <div data-aos="fade-down" data-aos-duration="1000" data-aos-once="false" data-aos-delay="100">
                <h2>Welcome to Harward College</h2>
              </div>

              <div data-aos="fade-down" data-aos-duration="1000" data-aos-once="false" data-aos-delay="150">
                <p>
                  Harward College in Sri Lanka is a vocational institution that
                  focuses on practical training and skills development,
                  preparing students for diverse industries and enhancing
                  employability in the workforce.
                </p>
              </div>

              <div class="main-button-red" data-aos="fade-right" data-aos-duration="1000" data-aos-once="false" data-aos-delay="50">
                <div class="scroll-to-section">
                  <a href="#contact">Join Us Now!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



  </section>






  <!-- ***** Main Banner Area Start ***** -->


  <!-- Home Description -->

  <section class="home-section " id="home">
    <div class=" container">
      <div class="col-12">
        <div class="row justify-content-center mt-5">

          <div data-aos="fade-down" data-aos-duration="1000" data-aos-once="false" data-aos-delay="100">
            <h1 class="title1 text-center text-capitalize">
              Harward college is a vocational institute reshaping and revolutionizing the vocational Education sector
              in Sri Lanka
            </h1>
          </div>

          <style>
            .title1 {
              font-size: 20px;
              font-family: 'Kanit', sans-serif;
              color: #000080;
              font-weight: bold;
            }

            .p {
              font-family: 'Quicksand', sans-serif;
              font-weight: bold;
            }


            @media screen and (min-width: 1200px) {
              .title1 {
                font-size: 45px;
              }

              .p1 {
                font-size: 20px;
              }
            }

            @media screen and (min-width: 768px) and (max-width: 1199px) {
              .title1 {
                font-size: 35px;
              }

              .p1 {
                font-size: 18px;
              }
            }

            @media screen and (max-width: 767px) {
              .title1 {
                font-size: 25px;
              }

              .p1 {
                font-size: 16px;
              }
            }
          </style>

        </div>
      </div>


      <div class="col-12 mt-5 mb-5">
        <div class="row justify-content-center">

          <div class="col-12 col-lg-4 col-md-6 d-flex align-items-center justify-content-center" data-aos="fade-left" data-aos-duration="1000" data-aos-once="false" data-aos-delay="100">

            <img src="assets/images/Harward_Logo.png" alt="" id="myComponent" class="moveable">

          </div>


          <div class="col-12 col-lg-7 mt-lg-0 mt-5 d-flex ms-lg-5 ms-0 align-items-center justify-content-center " data-aos="fade-right" data-aos-duration="1000" data-aos-once="false" data-aos-delay="100">

            <div class="row">

              <div class="col-12 mb-3 mb-lg-4">


                <p class="p1 text-lg-start text-center">
                  The rapid growth of Harward College, renowned for its exceptional vocational education programs, has
                  positioned it as a leading institution in Sri Lanka and beyond.
                </p>

              </div>

              <div class="col-12 mb-3 mb-lg-4">

                <p class="p1  text-lg-start text-center">
                  Harward College's influence extends beyond the boundaries of traditional education. By embracing
                  innovative teaching methodologies and fostering industry partnerships
                </p>

              </div>

              <div class="col-12 mb-3 mb-lg-4  text-lg-start text-center">

                <p class="p1">
                  The college's commitment to providing top-notch vocational training has attracted a diverse array of
                  students who recognize the value of acquiring practical skills alongside theoretical knowledge.
                </p>

              </div>


            </div>
          </div>
        </div>

        <div class="row mt-1 mt-lg-5">
          <div class="col-12 mt-5">

            <div class="row justify-content-between">

              <div class=" col-lg-5 col-12">
                <div class="row justify-content-center text-center">

                  <style>
                    h1 {
                      color: #2b2a6d;
                      font-weight: bold;
                      font-family: 'Kanit', sans-serif;
                      font-size: 30px;
                    }
                  </style>

                  <div class="shadow rounded rounded-4  " style="height: 150px;" data-aos="fade-left" data-aos-duration="1000" data-aos-once="false" data-aos-delay="100">

                    <h1 class="mt-5">Our Vision</h1>
                    <span class="fs-5">Most satisfied customer provider</span>

                  </div>
                </div>
              </div>

              <div class=" col-lg-5 col-12 mt-lg-0 mt-5">
                <div class="row justify-content-center text-center">

                  <div class="shadow rounded rounded-4  " style="height: 150px;" data-aos="fade-right" data-aos-duration="1000" data-aos-once="false" data-aos-delay="100">
                    <h1 class="mt-5 ">Our Mission</h1>
                    <span class=" fs-5">Dream-fulfilling skill program, matching global standards, training and
                      placement.</span>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Home Description -->



  <!-- Courses Section -->

  <section class="our-courses shadow-lg " id="Courses">


    <div class="container">
      <div class="col-12">
        <h2 class="text-center mb-5" style="padding-top: 50px;" data-aos="fade-up" data-aos-duration="1000" data-aos-once="false" data-aos-delay="100">
          Our Courses
        </h2>
        <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000" data-aos-once="false" data-aos-delay="50">
          <div class="col-12 col-lg-3 col-md-6 mb-4">
            <div class="row justify-content-center">

              <article class="card" style="  background-image: url(assets/images/caregiving.jpg);">

                <div class="card_content">
                  <span class="card_title">Caregiving</span>

                  <p class="card_description">The caregiving course equips students with skills in compassionate care,
                    patient understanding, communication, medication administration, activity assistance, and creating
                    a safe environment. Graduates make a positive impact through empathy and professionalism.</p>

                </div>
              </article>
            </div>
          </div>

          <div class="col-12 col-lg-3 col-md-6 mb-4">
            <div class="row justify-content-center">
              <article class="card" style="  background-image: url(assets/images/hotel.jpg);">

                <div class="card_content">
                  <span class="card_title">Hotel</span>

                  <p class="card_description">
                    The hotel course covers front desk operations, housekeeping, food and beverage services, and event
                    planning. Students learn customer service, communication, revenue management, and guest relations,
                    preparing for diverse roles in the industry.</p>

                </div>
              </article>
            </div>
          </div>

          <div class="col-12 col-lg-3 col-md-6 mb-4">
            <div class="row justify-content-center">
              <article class="card" style="  background-image: url(assets/images/car-detailingg.jpg);">

                <div class="card_content">
                  <span class="card_title">Car Detailing</span>

                  <p class="card_description">The car detailing course teaches techniques for cleaning, restoring, and
                    protecting vehicles. Topics include washing, paint correction, interior cleaning, and use of
                    specialized tools. Graduates excel in professional detailing or entrepreneurial ventures.</p>

                </div>
              </article>
            </div>
          </div>

          <div class="col-12 col-lg-3 col-md-6 mb-4">
            <div class="row justify-content-center">
              <article class="card" style="  background-image: url(assets/images/welding.jpg);">

                <div class="card_content">
                  <span class="card_title">Welding</span>

                  <p class="card_description">The welding course provides comprehensive training in various welding
                    techniques and safety protocols. Students learn skills in metal fabrication, cutting, joining, and
                    inspection, preparing them for successful careers in welding and metalworking industries.</p>

                </div>
              </article>
            </div>
          </div>

          <div class="col-12 col-lg-3 col-md-6 mb-4">
            <div class="row justify-content-center">
              <article class="card" style="  background-image: url(assets/images/hair.jpg);">

                <div class="card_content">
                  <span class="card_title">Hair and Beauty</span>

                  <p class="card_description">The hair and beauty course covers a wide range of skills in hairstyling,
                    makeup application, skincare, and nail care. Students learn techniques, trends, and business
                    practices, preparing for rewarding careers in the beauty industry.</p>

                </div>
              </article>
            </div>
          </div>

          <div class="col-12 col-lg-3 col-md-6 mb-4">
            <div class="row justify-content-center">
              <article class="card" style="  background-image: url(assets/images/ielts.png);">

                <div class="card_content">
                  <span class="card_title">Langagues</span>

                  <p class="card_description">The languages course prepares students for proficiency exams such as
                    IELTS and JLPT. Students develop skills in listening, speaking, reading, and writing, enhancing
                    their language abilities for academic or professional purposes.
                </div>
              </article>
            </div>
          </div>

          <div class="col-12 col-lg-3 col-md-6 mb-4">
            <div class="row justify-content-center">
              <article class="card" style="  background-image: url(assets/images/homemaids.jpg);">

                <div class="card_content">
                  <span class="card_title">Housemaid</span>

                  <p class="card_description">The housemaid course provides training in housekeeping skills, including
                    cleaning, organization, laundry, and household management. Students learn to maintain cleanliness
                    and create a comfortable environment for clients or employers.</p>

                </div>

              </article>
            </div>
          </div>

          <div class="col-12 col-lg-3 col-md-6 mb-4">
            <div class="row justify-content-center">
              <article class="card">

                <div class="card_content">
                  <span class="card_title">This is a Title</span>
                  <p class="card_description">Lorem ipsum dolor, sit amet expedita exercitationem recusandae aut dolor
                    tempora
                    aperiam itaque possimus at, cupiditate earum, quae repudiandae aspernatur? Labore minus soluta
                    consequatur
                    placeat.</p>

                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Courses Section -->



  <!-- Plane Section -->

  <section class="plane-bg ">

    <div class="container">
      <div class="col-12 container-fluid d-flex justify-content-center">
        <div class="row align-content-center">

          <h2 class=" text-center  mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-once="false" data-aos-delay="50">We Support Youy Life Journy </h2>

          <div class="col-12 col-lg-6  align-content-center">
            <div class="row justify-content-center align-items-center">
              <div class="col-12 align-content-center d-flex">
                <div class="row justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-once="false" data-aos-delay="50">

                  <img src="assets/images/plane.png" class="plane-img">

                </div>
              </div>
            </div>
          </div>


          <div class="col-12 col-lg-6">
            <p class="" data-aos="fade-up" data-aos-duration="1000" data-aos-once="false" data-aos-delay="50">
              Harward College, a prestigious educational institution, offers an esteemed NVQ Level 3 certificate
              program. The college is renowned for its commitment to academic excellence and the development of
              practical skills. With a focus on vocational training, Harward College equips students with the
              necessary knowledge and expertise to succeed in their chosen fields.
            </p>

            <p class="mt-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="false" data-aos-delay="50">
              One notable advantage of attending Harward College is its strong support system for securing jobs in
              other countries. The college recognizes the importance of global opportunities and provides extensive
              assistance to students who aspire to work abroad. Through comprehensive career counseling, networking
              events, and access to international job placement resources, Harward College empowers students to
              explore and pursue job prospects in different countries.
            </p>

            <p class="mt-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="false" data-aos-delay="50">
              By combining a rigorous academic curriculum with practical training and international job support,
              Harward College not only prepares students for success in their careers but also opens doors to exciting
              employment opportunities around the world. Graduates of Harward College are well-equipped to embark on
              global career paths, making them sought-after candidates in the international job market.
            </p>

          </div>
        </div>
      </div>
    </div>


  </section>

  <!-- Plane Section -->


  <section style="background-color: #2b2a6d;">
    <div class="container">
      <div class="col-12">
        <div class="row">

          <div class="col-12 mt-5 mb-5">
            <div class="row text-center">
              <h2 class="text-white">Our Partners</h2>
            </div>
          </div>


          <div class="slider mb-5">
            <div class="slide-track">
              <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
              </div>
              <div class="slide">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Register Section -->

  <section class="register shadow-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-once="false" data-aos-delay="100">

    <div class=" container " style="padding-top: 50px;padding-bottom: 50px;">
      <div class="col-12">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-9 register-glass">
            <div class="row g-5 justify-content-center">

              <div class="col-12 text-center">
                <label class="text-center fs-3 fw-bold">Register Now</label>
              </div>

              <div class="col-12 col-lg-5 mt-3 mb-4 d-grid">
                <label for="usernameField" class="usernamelabel label">First name</label>
                <input type="text" id="f" class="usernameField" required="required">
              </div>

              <div class="col-12 col-lg-5 mt-3 mb-4 d-grid">
                <label for="usernameField" class="usernamelabel label">First name</label>
                <input type="text" id="l" class="usernameField" required="required">
              </div>

              <div class="col-12 col-lg-5 mt-3 mb-4 d-grid">
                <label for="usernameField" class="usernamelabel label">First name</label>
                <input type="text" id="e" class="usernameField" required="required">
              </div>

              <div class="col-12 col-lg-5 mt-3 mb-4 d-grid">
                <label for="usernameField" class="usernamelabel label">First name</label>
                <input type="text" id="m" class="usernameField" required="required">
              </div>

              <div class="col-12 col-lg-5 mt-3 mb-4 d-grid">
                <label for="usernameField" class="usernamelabel label">First name</label>
                <input type="date" id="b" class="usernameField" required="required">
              </div>

              <div class="col-12 col-lg-5 mt-3 mb-4 d-grid">

                <label for="usernameField" class="usernamelabel label">First name</label>

                <select id="registerFocus">
                  <option selected>Select Gender</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                </select>

              </div>

              <div class="col-lg-10 col-12  mt-3 mb-2 d-grid">

                <select id="registerFocus">
                  <option selected>Select Course</option>
                  <option value="1">Hotel</option>
                  <option value="3">Hair & Beauty</option>
                  <option value="4">Caregiving</option>
                  <option value="5">Housemaid</option>
                  <option value="6">Welding</option>
                </select>

              </div>

              <div class="col-8 col-lg-4 mt-5 text-center mb-2">
                <button class="rebtn" onclick="register();">Register</button>
              </div>

              <div>
                <hr>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Register Section -->




  <!-- Footer -->
  <footer class="footer-section">
    <div class="container">
      <div class="footer-cta pt-5 pb-5">
        <div class="row">
          <div class="col-xl-4 col-md-4 mb-30">
            <div class="single-cta">
              <i class="fas fa-map-marker-alt"></i>
              <div class="cta-text">
                <h4>Find us</h4>
                <span>31, 1st Lane, Siri Ganendra MW, Nawala</span>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-4 mb-30">
            <div class="single-cta">
              <i class="fas fa-phone"></i>
              <div class="cta-text">
                <h4>Call us</h4>
                <span>+94 11 219 2470</span>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-4 mb-30">
            <div class="single-cta">
              <i class="far fa-envelope-open"></i>
              <div class="cta-text">
                <h4>Mail us</h4>
                <span>info@harwardcollege.lk</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-content pt-5 pb-5">
        <div class="row">
          <div class="col-xl-4 col-lg-4 mb-50">
            <div class="footer-widget">
              <div class="footer-logo">
                <a href="index.html"><img src="logo.png" class="img-fluid" alt="logo"></a>
              </div>
              <div class="footer-text">
                <p>
                  Haward College is renowned for its excellence in education, offering NVQ Level 3 certificates across
                  various disciplines. Prepare for success with Haward!</p>
              </div>
              <div class="footer-social-icon">
                <span>Follow us</span>
                <a href="#"><i class=""></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-whatsapp"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
            <div class="footer-widget">
              <div class="footer-widget-heading">
                <h3>Useful Links</h3>
              </div>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">about</a></li>
                <li><a href="#">services</a></li>
                <li><a href="#">portfolio</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Expert Team</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Latest News</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
            <div class="footer-widget">
              <div class="footer-widget-heading">
                <h3>Subscribe</h3>
              </div>
              <div class="footer-text mb-25">
                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
              </div>
              <div class="subscribe-form">
                <form action="#">
                  <input type="text" placeholder="Email Address">
                  <button><i class="fab fa-telegram-plane"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-area">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6 text-center text-lg-left">
            <div class="copyright-text">
              <p>Copyright &copy; 2023, All Right Reserved <a href="https://harwardcollege.lk/">HARWARD COLLEGE</a></p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
            <div class="footer-menu">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Policy</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <style>
    ul {
      margin: 0px;
      padding: 0px;
    }

    .footer-section {
      background: #151414;
      position: relative;
    }

    .footer-cta {
      border-bottom: 1px solid #373636;
    }

    .single-cta i {
      color: #ff5e14;
      font-size: 30px;
      float: left;
      margin-top: 8px;
    }

    .cta-text {
      padding-left: 15px;
      display: inline-block;
    }

    .cta-text h4 {
      color: #fff;
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 2px;
    }

    .cta-text span {
      color: #757575;
      font-size: 15px;
    }

    .footer-content {
      position: relative;
      z-index: 2;
    }

    .footer-pattern img {
      position: absolute;
      top: 0;
      left: 0;
      height: 330px;
      background-size: cover;
      background-position: 100% 100%;
    }

    .footer-logo {
      margin-bottom: 30px;
    }

    .footer-logo img {
      max-width: 200px;
    }

    .footer-text p {
      margin-bottom: 14px;
      font-size: 14px;
      color: #7e7e7e;
      line-height: 28px;
    }

    .footer-social-icon span {
      color: #fff;
      display: block;
      font-size: 20px;
      font-weight: 700;
      font-family: 'Poppins', sans-serif;
      margin-bottom: 20px;
    }

    .footer-social-icon a {
      color: #fff;
      font-size: 16px;
      margin-right: 15px;
    }

    .footer-social-icon i {
      height: 40px;
      width: 40px;
      text-align: center;
      line-height: 38px;
      border-radius: 50%;
    }

    .facebook-bg {
      background: #3B5998;
    }

    .twitter-bg {
      background: #55ACEE;
    }

    .google-bg {
      background: #DD4B39;
    }

    .footer-widget-heading h3 {
      color: #fff;
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 40px;
      position: relative;
    }

    .footer-widget-heading h3::before {
      content: "";
      position: absolute;
      left: 0;
      bottom: -15px;
      height: 2px;
      width: 50px;
      background: #ff5e14;
    }

    .footer-widget ul li {
      display: inline-block;
      float: left;
      width: 50%;
      margin-bottom: 12px;
    }

    .footer-widget ul li a:hover {
      color: #ff5e14;
    }

    .footer-widget ul li a {
      color: #878787;
      text-transform: capitalize;
    }

    .subscribe-form {
      position: relative;
      overflow: hidden;
    }

    .subscribe-form input {
      width: 100%;
      padding: 14px 28px;
      background: #2E2E2E;
      border: 1px solid #2E2E2E;
      color: #fff;
    }

    .subscribe-form button {
      position: absolute;
      right: 0;
      background: #ff5e14;
      padding: 13px 20px;
      border: 1px solid #ff5e14;
      top: 0;
    }

    .subscribe-form button i {
      color: #fff;
      font-size: 22px;
      transform: rotate(-6deg);
    }

    .copyright-area {
      background: #202020;
      padding: 25px 0;
    }

    .copyright-text p {
      margin: 0;
      font-size: 14px;
      color: #878787;
    }

    .copyright-text p a {
      color: #ff5e14;
    }

    .footer-menu li {
      display: inline-block;
      margin-left: 20px;
    }

    .footer-menu li:hover a {
      color: #ff5e14;
    }

    .footer-menu li a {
      font-size: 14px;
      color: #878787;
    }
  </style>
  <!-- Footer -->



  <section class="dots-container">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script> <!-- Include Vue.js library -->
  <script src="script.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>

  <script src="bootstrap.bundle.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/lightbox.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/video.js"></script>
  <script src="assets/js/slick-slider.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
    //according to loftblog tut
    $(".nav li:first").addClass("active");

    var showSection = function showSection(section, isAnimate) {
      var direction = section.replace(/#/, ""),
        reqSection = $(".section").filter(
          '[data-section="' + direction + '"]'
        ),
        reqSectionPos = reqSection.offset().top - 0;

      if (isAnimate) {
        $("body, html").animate({
            scrollTop: reqSectionPos,
          },
          800
        );
      } else {
        $("body, html").scrollTop(reqSectionPos);
      }
    };

    var checkSection = function checkSection() {
      $(".section").each(function() {
        var $this = $(this),
          topEdge = $this.offset().top - 80,
          bottomEdge = topEdge + $this.height(),
          wScroll = $(window).scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
          var currentId = $this.data("section"),
            reqLink = $("a").filter("[href*=\\#" + currentId + "]");
          reqLink
            .closest("li")
            .addClass("active")
            .siblings()
            .removeClass("active");
        }
      });
    };

    $(".main-menu, .responsive-menu, .scroll-to-section").on(
      "click",
      "a",
      function(e) {
        e.preventDefault();
        showSection($(this).attr("href"), true);
      }
    );

    $(window).scroll(function() {
      checkSection();
    });
  </script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>