<!-- /*
* Template Name: Learner
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">

  <title>مدرسة العزاوي</title>
</head>

<body>

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>


  
  <nav class="site-nav mb-5">
    <div class="pb-2 top-bar mb-3">
      <div class="container">

          <div class="date-container" style="text-align: right">
            <span style="right: 0; padding-right: 20px; color: #fff; font-size: 14px; font-weight: light;" id="current-date"></span>
          </div>
          
      </div>
    </div>
    <div class="sticky-nav js-sticky-header">
      <div class="container position-relative">
        <div class="site-navigation text-center">
          <a href="index.html" class="logo menu-absolute m-0">
            <img src="images/logo.png" alt="Logo" id="img-logo" style="    width: 100px;
       margin-top: -24px;">
          </a>

          <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
            <li ><a href="{{url('/')}}">الصفحة الرئسية</a></li>
            <li><a href="{{url('/courses')}}">الدورات</a></li>
            <li><a href="{{url('/staff')}}">طاقم العمل</a></li>
            <li><a href="{{url('/news')}}">أخبار</a></li>
            <li><a href="{{url('/about')}}">خدمات</a></li>
            <li><a href="{{url('/contact')}}">اتصال بنا</a></li>
            <li>   <a href="{{url('/login')}}" >
              <span class="icon-lock"></span>
              تسجيل الدخول
            </a>
          </li>
          <li>    <a href="{{url('/register')}}">
            <span class="icon-person"></span>
            يسجل
          </a>
        </li>
           
          </ul>

          {{-- <a href="#" class="btn-book btn btn-secondary btn-sm menu-absolute">English , fr , arabic</a> --}}

          <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>

        </div>
      </div>
    </div>
  </nav>
  

  <div class="untree_co-hero inner-page overlay" style="background-image: url('images/img-school-5-min.jpg');">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="row justify-content-center ">
            <div class="col-lg-6 text-center ">
              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100" style="font-family: 'Amiri', serif;">يسجل</h1>

            </div>
          </div>
        </div>
      </div> <!-- /.row -->
    </div> <!-- /.container -->

  </div> <!-- /.untree_co-hero -->




  <div class="untree_co-section">
    <div class="container">

      <div class="row mb-5 justify-content-center">
        <div class="col-lg-5 mx-auto order-1" data-aos="fade-up" data-aos-delay="200">
          <form action="#" class="form-box">
            <div class="row">
              <div class="col-12 mb-3">
                <input type="text" class="form-control" placeholder="الاسم الكامل" style="text-align: right">
              </div>
              <div class="col-12 mb-3">
                <input type="text" class="form-control" placeholder="البريد الإلكتروني"style="text-align: right">
              </div>
              <div class="col-12 mb-3">
                <input type="password" class="form-control" placeholder="كلمة المرور" style="text-align: right">
              </div>
              <div class="col-12 mb-3">
                <input type="password" class="form-control" placeholder="أعد كتابة كلمة المرور" style="text-align: right">
              </div>

              <div class="col-12 mb-3">
                <label class="control control--checkbox">
                  <span class="caption">أوافق على <a href="#">الشروط والأحكام</a></span>
                  <input type="checkbox" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
              </div>

              <div class="col-12">
                <input type="submit" value="إرسال الرسالة" class="btn btn-primary">
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
</div> <!-- /.untree_co-section -->

  
<div class="site-footer">


  <div class="container">

    <div class="row">
      <div class="col-lg-3 mr-auto">
        <div class="widget">
          <h3>معلومات عنا<span class="text-primary">.</span> </h3>
          <p>نحن مدرسة خاصة تركز على تقديم تعليم متميز يجمع بين التميز الأكاديمي والابتكار. نقدم برامج متنوعة تشمل المواد الأساسية والدورات الخاصة</p>
        </div> <!-- /.widget -->
        <div class="widget">
          <h3>يتصل</h3>
          <ul class="list-unstyled social">
            <li><a href="#"><span class="icon-instagram"></span></a></li>
            <li><a href="#"><span class="icon-twitter"></span></a></li>
            <li><a href="#"><span class="icon-facebook"></span></a></li>
            <li><a href="#"><span class="icon-linkedin"></span></a></li>
            <li><a href="#"><span class="icon-pinterest"></span></a></li>
            <li><a href="#"><span class="icon-dribbble"></span></a></li>
          </ul>
        </div> <!-- /.widget -->
      </div> <!-- /.col-lg-3 -->

      <div class="maps" style="    margin-right: auto !important;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3265.8386418414375!2d1.0507685847580706!3d35.060773080343516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1280db04ca1fa525%3A0x171b9c190a2724f5!2zRWwgQXp6YW91aSBTY2hvb2wg2KfZhNi52LLYp9mI2Yog2LPZg9mI2YQ!5e0!3m2!1sar!2sdz!4v1728510404163!5m2!1sar!2sdz" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div> <!-- /.col-lg-3 -->



      <div class="col-lg-3">
        <div class="widget">
          <h3>اتصال</h3>
          <address>Rue Meskine Bachir, Frenda</address>
          <ul class="list-unstyled links mb-4">
            <li><a href="tel://11234567890">+213</a></li>
            <li><a href="tel://11234567890">+213</a></li>
            <li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
          </ul>
        </div> <!-- /.widget -->
      </div> <!-- /.col-lg-3 -->

    </div> <!-- /.row -->

    <div class="row mt-5">
      <div class="col-12 text-center">
        <p class="copyright">Copyright &copy; All Rights Reserved</a> 
        </div>
      </div>
    </div> <!-- /.container -->
  </div> <!-- /.site-footer -->


    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/custom.js"></script>

    <script>
      $(window).on('scroll', function() {
        var $logo = $("#img-logo"); // Ensure your logo has this ID or class
  
        if ($(window).scrollTop() > 0) {
            // When the user scrolls down, change the logo to logo1.png
            $logo.attr('src', 'images/logo.png');
        } else if ($(window).scrollTop() === 0) {
            // When the user scrolls back up to the top, restore the original logo
            $logo.attr('src', 'images/logo1.png');
        }
      });
  </script>

  </body>

  </html>
