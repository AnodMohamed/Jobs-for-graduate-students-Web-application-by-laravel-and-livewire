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
  .overlay-content
  a:hover, a:focus {
     color: #1266f1;
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
              
              <ul class="navbar-nav my-2 mb-3 mb-lg-0 mr-5  ">
                <?php if(Auth::check()): ?>
                <li class="nav-item">
                  <p class="nav-link" >
                    <span><?php echo e(Auth::user()->name); ?></span></p>
                </li>
                <?php else: ?>

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

              <?php endif; ?>
              </ul>
             
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
                <a href="<?php echo e(route('home')); ?>">HOME</a>

                <?php if(auth()->guard()->check()): ?>
                    <?php if( Auth::user()->utype == 'ADM'): ?>
                    <a href="<?php echo e(route('admin.category')); ?>">Categories</a>
                    <a href="<?php echo e(route('admin.companies')); ?>">Compamies</a>
                    <a href="<?php echo e(route('admin.students')); ?>">Students</a>
                    <a href="<?php echo e(route('admin.jobads')); ?>">Job ads</a>

                    <?php elseif( Auth::user()->utype == 'COMPADM'): ?>
                      <a href="<?php echo e(route('company.jobs')); ?>">My Jobs</a>
                    <?php elseif( Auth::user()->utype == 'STD'): ?>
                      <a href="<?php echo e(route('student.requests')); ?>">My Jobs</a>
                    <?php endif; ?>         
 
                      <?php echo csrf_field(); ?>
                    <a  href="<?php echo e(route('profile.show')); ?>">Profile</a>

                <?php endif; ?>
               


                <a href="<?php echo e(route('allJobAds')); ?>">All Job Ads</a>

                <?php if(auth()->guard()->check()): ?>
                  <a title="Logout" href="<?php echo e(route('logout')); ?>"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"> Logout</a>
                  <form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>

                </form>
         
                <?php endif; ?>

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
      <span >Jobs for graduate Bahrain students </span>
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

<?php /**PATH C:\xampp\htdocs\xampp\jfgsb-main\resources\views/layouts/base.blade.php ENDPATH**/ ?>