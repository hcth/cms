  <!-- Go to www.addthis.com/dashboard to customize your tools --> 
<style type="text/css">
    .johannes-goto-top{
       position: fixed;
    bottom: -50px;
    right: 20px;
    background: #424851;
    width: 45px;
    height: 50px;
    text-align: center;
    line-height: 52px;
    z-index: 9;
    opacity: 0.5;
    transition: 0.5s all;
    }
    .johannes-goto-top:hover{
        opacity: 1;
    }
    .johannes-goto-top.show{
        bottom: 20px;
    }
    .top-icon{
        background-position: -279px -14px;
    width: 25px;
    height: 23px;
    transform: rotate(
90deg
);
    }
    
</style>
  <a href="javascript:void(0)" id="johannes-goto-top" class="johannes-goto-top">
    <i class="sprite-icon top-icon"></i>
    </a>
  <!-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b99785dbe32fdd4"></script> -->
    <!-- Footer -->
    <div class="advent-sidebar">
    <div class="adven-brand">
        <a href="#">
            <img src="<?php echo base_url(); ?>assets/images/adventourist-logo.png" alt="Adventourist logo">
        </a>
        <div class="advent-close">&#10005;</div>
    </div>
    <div class="advent-form ds-none m-ds-block widget">
        <h3 class="heading">Menu</h3>
        <ul class="m-menu">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li><a href="<?php echo base_url();?>itinerary">Trips</a></li>
            <li><a href="<?php echo base_url();?>story">Travel stories</a></li>
            <li><a href="<?php echo base_url();?>things-to-do">Things to do</a></li>
            <li><a href="<?php echo base_url();?>travel-blog/category/destination-guides/">Destination guides</a></li>
        </ul>
    </div>
    <div class="latest-itanaries">
        <?= modules::run('itineraries/getLatestItineraries'); ?>
    </div>

    <div class="widget mks_social_widget mrt50">
        <h5 class="widget-title">Connect with us</h5>
        <p>Travel Stories &amp; Inspirations</p>
        <ul class="mks_social_widget_ul">
            <li><a href="https://www.facebook.com/adventourist.in" title="Facebook" class="social sprite-icon socicon-facebook" target="_blank"></a></li>
            <li><a href="https://twitter.com/adventourist_in" title="Twitter" class="social sprite-icon socicon-twitter" target="_blank"></a></li>
            <li><a href="https://www.instagram.com/adventourist.in/" title="Instagram" class="social sprite-icon socicon-instagram" target="_blank"></a></li>
            <li><a href="https://www.linkedin.com/company/adventourist-india" title="Linkedin" class="social sprite-icon socicon-linkedin" target="_blank"></a></li>
        </ul>
    </div>
</div>
<div class="advent-action-overlay"></div>
    <footer class="advent-footer">
        <div class="container">
        <div class="footer-divider"></div>
        <div class="row advent-footer-widgets justify-content-center">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="widget mks_social_widget ">
                    <h5 class="widget-title">Connect with us</h5>
                    <p>Travel Stories &amp; Inspirations</p>
                    <ul class="mks_social_widget_ul">
                    <li><a href="https://www.facebook.com/adventourist.in" title="Facebook" class="social sprite-icon socicon-facebook" target="_blank"></a></li>
                    <li><a href="https://twitter.com/adventourist_in" title="Twitter" class="social sprite-icon socicon-twitter" target="_blank"></a></li>
                    <li><a href="https://www.instagram.com/adventourist.in/" title="Instagram" class="social sprite-icon socicon-instagram" target="_blank"></a></li>
                    <li><a href="https://www.linkedin.com/company/adventourist-india" title="Linkedin" class="social sprite-icon socicon-linkedin" target="_blank"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="widget widget_nav_menu">
                    <h5 class="widget-title">Know more</h5>
                    <div class="menu-unnamed-container">
                    <ul class="menu">
                        <li><a href="<?php echo base_url('about-us'); ?>">About Adventourist</a></li>
                        <li><a href="<?php echo base_url('contact-us'); ?>">Contact us</a></li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="widget widget_nav_menu">
                    <h5 class="widget-title">Join Adventourist family</h5>
                    <div class="menu-footer-2-container">
                    <ul id="menu-footer-2" class="menu">
                        <li><a href="<?php echo base_url('career'); ?>">Careers</a></li>
                        <li><a href="<?php echo base_url('ourteam'); ?>">Our Team</a></li>
                        <li><a href="<?php echo base_url('faqs'); ?>">FAQs</a></li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="widget widget_nav_menu">
                    <h5 class="widget-title">Important links</h5>
                    <div class="menu-footer-3-container">
                    <ul class="menu">
                        <li><a href="<?php echo base_url('terms-and-conditions'); ?>">Terms &amp; Conditions</a></li>
                        <li><a href="<?php echo base_url('sitemaps'); ?>">Site Map</a></li>
                        <li><a href="<?php echo base_url('feedback-suggestions'); ?>">Feedback</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="advent-copyright">
            <p>© Copyright <script>document.write((new Date()).getFullYear())</script> by Adventourist.  All rights Reserved.</p>
        </div>
        </div>
    </footer>
    
    <!-- // Footer -->

<script src="<?php echo base_url('assets/js/jquery.lazy.min.js'); ?>"></script>
<script type="text/javascript">
    var btn = $('#johannes-goto-top');

    $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });

    btn.on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({scrollTop:0}, '300');
    });
</script>
<!-- <script src="<?php //echo base_url('assets/js/custom.js'); ?>"></script> -->