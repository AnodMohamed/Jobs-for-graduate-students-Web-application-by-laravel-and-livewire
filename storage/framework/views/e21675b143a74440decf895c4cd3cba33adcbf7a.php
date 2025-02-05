<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Jobs for graduate Bahrain students </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet" />
  <?php echo \Livewire\Livewire::styles(); ?>


</head>
<style>
  .logo{
    color: #fff;
  }
  .logo:hover{
    color: #fff;
  }
  .logo h3{
    margin-left: 10px;
  }

  /* mobile */
  @media (max-width: 575.98px) { 
    .logo h3{
      display: none;
    } 

  }
</style>
<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand logo" href="<?php echo e(route('home')); ?>">
            <h1>
              <i class="fa-solid fa-briefcase logo" ></i>
            </h1>
            <h3>
              Jobs for graduate Bahrain students   
            </h3>
          </a>

          <div class="navbar-collapse" id="">
            <div class="d-none d-lg-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item">
                  <a class="nav-link"  href="<?php echo e(route('login')); ?>">
                    <img src="<?php echo e(asset('images/login.png')); ?>" alt="" />
                    <span>Login</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('register')); ?>">
                    <img src="<?php echo e(asset('images/signup.png')); ?>" alt="" />
                    <span>Sign Up</span>
                  </a>
                </li>
              </ul>
              <form class="form-inline my-2 mb-3 mb-lg-0 mr-5">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.html">HOME</a>
                <a href="team.html">TEAM</a>
                <a href="portfolio.html">PORTFOLIO</a>

                <a href="contact.html">CONTACT US</a>

              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
   
    <!-- start main section -->

	<?php echo e($slot); ?>


    <!-- end main section -->


  <!-- footer section -->
  <hr class="footer_hr">
  <section class="container-fluid footer_section">
    <p>
      &copy;
      2019 All Rights Reserved. Design by
      <a href="https://html.design/">Jobs for graduate Bahrain students </a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="<?php echo e(asset('js/jquery-3.4.1.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>



  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width")
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }
  </script>

  <?php echo \Livewire\Livewire::scripts(); ?>


  <?php echo $__env->yieldPushContent('scripts'); ?> 


</body>

</html>

<?php /**PATH C:\xampp\htdocs\jfgsb-main\resources\views/layouts/base.blade.php ENDPATH**/ ?>