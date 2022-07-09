<section class="exp-itanaries">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="adv-title-sec">
               <h1 class="heading">Sitemap</h1>
            </div>

         </div>
      </div>
   </div>
</section>
<section class="breadcrumb">
   <div class="container">
      <ul class="br-list">
         <li><a href="#">Home</a></li>
         <li>></li>
         <li>Sitemap</li>
      </ul>
   </div>
</section>

<section class="careers-section sitemap-sec">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <ul class="sitemap-list">
               <li>
                  <a href="<?= base_url(); ?>itineraries">Travel Itineraries</a>
                  <ul>
                     <?php
                     foreach ($itineraries as $vals) {
                     ?>
                        <li>
                           <a href="<?php echo base_url('itinerary/' . $vals->url); ?>"><?= $vals->headline; ?></a>
                        </li>
                     <?php
                     }
                     ?>
                  </ul>
               </li>
               <li>
                  <a href="<?= base_url(); ?>about-us">About Us</a>
               </li>
               <li>
                  <a href="<?= base_url(); ?>contact-us">Contact Us</a>
               </li>
               <li>
                  <a href="<?= base_url(); ?>terms-and-conditions">Terms &amp; Conditions</a>
               </li>
               <li>
                  <a href="<?= base_url(); ?>ourteam">Our Team</a>
               </li>
               <li>
                  <a href="<?= base_url(); ?>feedback_suggestions">Submit Feedback</a>
               </li>
               <li>
                  <a href="<?= base_url(); ?>faqs">FAQ's</a>
               </li>
               <li>
                  <a href="<?= base_url(); ?>career">Career</a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>


<div class="advent-sidebar">
   <div class="adven-brand">
      <a href="#">
         <img src="<?= base_url(); ?>assets/images/adventourist-logo.png" alt="Adventourist logo">
      </a>
      <div class="advent-close">&#10005;</div>
   </div>
   <div class="advent-form ds-none m-ds-block widget">
      <h3 class="heading">Menu</h3>
      <ul class="m-menu">
         <li><a href="#">Home</a></li>
         <li><a href="#">Travel itineraies</a></li>
         <li><a href="#">Travel stories</a></li>
         <li><a href="#">Things to do</a></li>
         <li><a href="#">Destination guide</a></li>
      </ul>
   </div>
   <div class="latest-itanaries">
      <h2 class="heading-2">Latest itineraries</h2>
      <div class="itn-list">
         <a href="#" class="itn-box">
            <div class="itn-img">
               <img src="<?= base_url(); ?>assets/images/itineraries/img-1.jpg">
            </div>
            <div class="itn-ttl">
               The Ski Resort Destination - Auli 5 Nights and 6 Days
            </div>
         </a>
         <a href="#" class="itn-box">
            <div class="itn-img">
               <img src="<?= base_url(); ?>assets/images/itineraries/img-2.jpg">
            </div>
            <div class="itn-ttl">
               The Ski Resort Destination - Auli 5 Nights and 6 Days
            </div>
         </a>
         <a href="#" class="itn-box">
            <div class="itn-img">
               <img src="<?= base_url(); ?>assets/images/itineraries/img-3.jpg">
            </div>
            <div class="itn-ttl">
               The Ski Resort Destination - Auli 5 Nights and 6 Days
            </div>
         </a>
      </div>
   </div>
   <div class="widget mks_social_widget mrt50">
      <h5 class="widget-title">Connect with us</h5>
      <p>Travel Stories &amp; Inspirations</p>
      <ul class="mks_social_widget_ul">
         <li><a href="https://www.facebook.com/adventourist.in" title="Facebook" class="social sprite-icon socicon-facebook" target="_blank"></a></li>
         <li><a href="https://twitter.com/adventourist.in" title="Twitter" class="social sprite-icon socicon-twitter" target="_blank"></a></li>
         <li><a href="https://www.instagram.com/adventourist.in/" title="Instagram" class="social sprite-icon socicon-instagram" target="_blank"></a></li>
         <li><a href="" title="Linkedin" class="social sprite-icon socicon-linkedin" target="_blank"></a></li>
      </ul>
   </div>
</div>
<div class="advent-action-overlay"></div>