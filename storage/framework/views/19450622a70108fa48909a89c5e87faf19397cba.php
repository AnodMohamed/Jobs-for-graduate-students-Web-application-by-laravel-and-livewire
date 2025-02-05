 <!-- slider section -->
 <section class=" slider_section position-relative">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>

    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-md-3 offset-md-2">
            <div class="slider_detail">
              <h1>
                Web
                <span>
                  objectives
                </span>
              </h1>
              <p>
                  To help the organizations to publish the offers jobs in web application-specific for fresh graduate students. 
              </p>
              <div>

              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="slider_img-box">
              <img src="images/slider-img.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-md-3 offset-md-2">
            <div class="slider_detail">
              <h1>
                Web
                <span>
                  objectives
                </span>
              </h1>
              <p>
                  To provide the organizations the ability to compare between applicants and nomination the right ones to make with them interview. 
              </p>
              <div>

              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="slider_img-box">
              <img src="images/slider-img.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-md-3 offset-md-2">
            <div class="slider_detail">
              <h1>
                Web
                <span>
                  objectives
                </span>
              </h1>
              <p>
              To facilitate the process of searching for a job for new graduates and get a chance to train or work with their sample knowledge and improve their skills.
              </p>
              <div>

              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="slider_img-box">
              <img src="images/slider-img.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel_btn-container">
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

</section>

<!-- end slider section -->
</div>




<!-- why section -->
<section class="Why_section layout_padding">
<div class="container">
  <h2 
    id="down"
    data-mdb-toggle="animation"
    data-mdb-animation-reset="true"
  >About us</h2>
  <p>
     Web application gathering opportunity providers, students looking for a training opportunity, and jobs for fresh grad students. The opportunity provider (the company) can register on the platform and post training opportunities, then publish it on the web application, enabling students to search for opportunities and apply for any of them, if they are compatible with their specialization and the requirements of the university. Then, students simply upload their CVs and in return, the opportunity provider can accept or reject the application.    </p>
 
</div>
</section>



<!-- end why section -->



<!-- portfolio section -->
<section class="portfolio_section layout_padding2">

<div class="container layout_padding2-top ">
  <div class="row">
    <div class="col-md-8">
      <div class="portfolio_img-box" style="width: 750px; height:322px">
        <img src="images/about-1.png" style="width: 100%; height:100% ">
      </div>
    </div>
    <div class="col-md-4">
      <div class="portfolio_img-box" style="width: 350px; height:322px">
        <img src="images/about-2.png"  style="width: 100%; height:100% ">
      </div>
    </div>
    <div class="col-md-4">
      <div class="portfolio_img-box" style="width: 350px; height:322px">
        <img src="images/about-3.png"  style="width: 100%; height:100% ">
      </div>
    </div>
    <div class="col-md-8">
      <div class="portfolio_img-box" style="width: 750px; height:322px">
        <img src="images/about-4.png" style="width: 100%; height:100% ">
      </div>
    </div>
  </div>
</div>
</section>


<!-- end portfolio section -->


<!-- team section  -->
<section class="team_section layout_padding">
<div class="container">
  <h2>
    Project Aims
  </h2>

</div>
<div class="container">
  <div class="team_card-container layout_padding2">

    <div class="team_card">
      <div class="team_detail-box">         
        <p>
          Facilitating the process of offering opportunities by companies and at-tracting graduates.       
        </p>       
      </div>
    </div>

    <div class="team_card">
      <div class="team_detail-box">         
        <p>
          Facilitating the process of searching for opportunities for both under-graduates and universities.
        </p>       
      </div>
    </div>

    <div class="team_card">
      <div class="team_detail-box">         
        <p>
          Create competition between companies by evaluating their training through universities.          
        </p>       
      </div>
    </div>
    <div class="team_card">
      <div class="team_detail-box">         
        <p>
          Increasing the productivity of coordinators of the universities by reduc-ing their working time through automating a large part of the tasks re-quired of them.
         </p>       
      </div>
    </div>
  </div>
</div>
</section>



<!-- about section -->

<section class="about_section layout_padding">
  <div class="container">
    <h2>
      LAST JOB ADS
    </h2>
  </div>

  <div class="container">
    <div class="about_card-container">

      <?php $__currentLoopData = $jobads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jobad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="about_card">
          <div class="about-detail">
            <div class="about_img-box">
              <img src="<?php echo e(asset('storage/gallery')); ?>/<?php echo e($jobad->image); ?>" alt="" class="w-100 h-100">
            </div>
            <div class="card_detail-ox">
              <h4>
                <?php echo e($jobad->name); ?>

              </h4>
              <p>
                <?php echo $jobad->skilles; ?>

              </p>
            </div>
          </div>
          <div>
            <a href="<?php echo e(route('jobad.view',['jobad_id'=>$jobad->id ])); ?>" class="about_btn">
              Read More
            </a>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
    
      
    </div>
  </div>
</section>

<!-- end about section -->


<!-- end team section -->



<!-- info section -->
<section class="info_section layout_padding">
<div class="container info_content">
  <div>
    <div class="row my-3">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12 ">
            <h5>
             Project scope
            </h5>
            <p class="text-white">
              Providing web application to help organizations connect with fresh graduates. Which will decrease the unemployment percentage and put the fresh graduate at entry levels. also offer time for companies during searching for employees with basic skills.
            </p>
          </div>
      
        </div>
        <div class="form_container mt-5">
          <a  href="<?php echo e(route('register')); ?>" class="btn btn-primary ">
            Sing up 
          </a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="info_img-box" style="text-align: center; font-size: 110px;">
          <i class="fas fa-graduation-cap text-white" ></i>
        
        </div>
   
      </div>


    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12 ">
            <h5>
            Contact with us
            </h5>

          </div>
      
        </div>

      </div>
      <div class="col-md-6">
        <div class="info_img-box" style="text-align: center; font-size: 15px;">
          <p class="text-white">
            munther6190628@gmail.com
          </p>
        
        </div>
   
      </div>


    </div>
  </div>

</div>
</section>




<?php /**PATH C:\xampp\htdocs\xampp\jfgsb-main\resources\views/livewire/home-component.blade.php ENDPATH**/ ?>