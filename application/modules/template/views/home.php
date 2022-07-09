<!DOCTYPE html>
<html lang="en-US">

<head>
  <?php require_once('include/seo_meta_tags.php'); ?>

  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
    if (isset($title) && !empty($title)) {
      echo $title;
    } else if (isset($realtravellerDetail[0]->meta_title) && !empty($realtravellerDetail[0]->meta_title)) {
      echo $realtravellerDetail[0]->meta_title;
    } else if (isset($storiesDetail[0]->meta_title) && !empty($storiesDetail[0]->meta_title)) {
      echo $storiesDetail[0]->meta_title;
    } else if (isset($thingstodo[0]->meta_title) && !empty($thingstodo[0]->meta_title)) {
      echo $thingstodo[0]->meta_title;
    } else if (isset($itinerariesRecs[0]->meta_title) && !empty($itinerariesRecs[0]->meta_title)) {
      echo $itinerariesRecs[0]->meta_title;
    } else {
      echo "Adventourist Website";
    }
    ?>
  </title>
  <meta name="title" content="<?php
                              if (isset($title) && !empty($title)) {
                                echo $title;
                              } else if (isset($realtravellerDetail[0]->meta_title) && !empty($realtravellerDetail[0]->meta_title)) {
                                echo $realtravellerDetail[0]->meta_title;
                              } else if (isset($storiesDetail[0]->meta_title) && !empty($storiesDetail[0]->meta_title)) {
                                echo $storiesDetail[0]->meta_title;
                              } else if (isset($thingstodo[0]->meta_title) && !empty($thingstodo[0]->meta_title)) {
                                echo $thingstodo[0]->meta_title;
                              } else if (isset($itinerariesRecs[0]->meta_title) && !empty($itinerariesRecs[0]->meta_title)) {
                                echo $itinerariesRecs[0]->meta_title;
                              } else {
                                echo "Adventourist Website";
                              }
                              ?>">
  <meta name="description" content="<?php
                                    if (isset($descriptions) && !empty($descriptions)) {
                                      echo $descriptions;
                                    } else if (isset($realtravellerDetail[0]->metaDesc) && !empty($realtravellerDetail[0]->metaDesc)) {
                                      echo $realtravellerDetail[0]->metaDesc;
                                    } else if (isset($thingstodo[0]->metaDesc) && !empty($thingstodo[0]->metaDesc)) {
                                      echo $thingstodo[0]->metaDesc;
                                    } else if (isset($storiesDetail[0]->meta_description) && !empty($storiesDetail[0]->meta_description)) {
                                      echo $storiesDetail[0]->meta_description;
                                    } else if (isset($itinerariesRecs[0]->meta_description) && !empty($itinerariesRecs[0]->meta_description)) {
                                      echo $itinerariesRecs[0]->meta_description;
                                    } else {
                                      echo "Adventourist Meta Descriptionn";
                                    }
                                    ?>">
  <meta name="keyword" content="<?php
                                if (isset($keywords) && !empty($keywords)) {
                                  echo $keywords;
                                } else if (isset($realtravellerDetail[0]->metatag) && !empty($realtravellerDetail[0]->metatag)) {
                                  echo $realtravellerDetail[0]->metatag;
                                } else  if (isset($storiesDetail[0]->meta_tags) && !empty($storiesDetail[0]->meta_tags)) {
                                  echo $storiesDetail[0]->meta_tags;
                                } else  if (isset($thingstodo[0]->metatag) && !empty($thingstodo[0]->metatag)) {
                                  echo $thingstodo[0]->metatag;
                                } else  if (isset($itinerariesRecs[0]->meta_tags) && !empty($itinerariesRecs[0]->meta_tags)) {
                                  echo $itinerariesRecs[0]->meta_tags;
                                } else {
                                  echo "Adventourist Meta Tag";
                                }
                                ?>">

  <?php
  $uri = $_SERVER['REQUEST_URI'];
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  ?>
  <link rel="canonical" href="<?= $url; ?>" />


  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon">
  <!-- Owl Carousel Assets -->
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"> -->

  <!--     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125860174-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125860174-1');
</script> -->


  <script id="mcjs">
    ! function(c, h, i, m, p) {
      m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m, p)
    }(document, "script", "https://chimpstatic.com/mcjs-connected/js/users/d7077c7fd9cea146d13b09e59/d147f303829eb185c70f8c939.js");
  </script>

  <!-- newcode-->

  <!-- Global site tag (gtag.js) - Google Ads: 787029942 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-787029942"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'AW-787029942');
  </script>

  <!-- Facebook Pixel Code -->
  <!-- 
<script>

!function(f,b,e,v,n,t,s)

{if(f.fbq)return;n=f.fbq=function(){n.callMethod?

n.callMethod.apply(n,arguments):n.queue.push(arguments)};

if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

n.queue=[];t=b.createElement(e);t.async=!0;

t.src=v;s=b.getElementsByTagName(e)[0];

s.parentNode.insertBefore(t,s)}(window,document,'script',

'https://connect.facebook.net/en_US/fbevents.js');



 fbq('init', '328244091233140');

fbq('track', 'PageView');

</script>

<noscript>

 <img height="1" width="1"

src="https://www.facebook.com/tr?id=328244091233140&ev=PageView

&noscript=1"/>

</noscript> 
-->

  <!-- End Facebook Pixel Code -->

  <!-- newcode ends -->
</head>

<body cz-shortcut-listen="true" class="thetop">

  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NDHCWP9" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php require_once('include/header.php'); ?>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

  <?php $this->load->view($module . "/" . $viewFile); ?>
  <?php require_once('include/footer.php'); ?>
  <!-- Begin Sign in Modal
<div class="modal fade" id="sign_in_old" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <form id="signform">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Sign In</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
         <div class="alert alert-danger signerror" style="display:none">

                 </div>
                  <div class="alert alert-success signsuccess" style="display:none">

                 </div>
      <div class="modal-body text-medium">
        <div class="form-group margin-bottom-20px">
                <input type="email" class="form-control" placeholder="Username" name="email">
            </div>
            <div class="form-group margin-bottom-20px">
                <input type="password" class="form-control" placeholder="Password" name="password" id="signpassword">
            </div>
           <div class="form-group">
                <a  class="btn btn-primary btn-block btn-lg" id="signin" style="color:#fff">Sign in</a>
            </div>
      </div> <!--/.modal body-->
  </div>
  </form>
  </div>
  </div>
  <!-- End sign in Modal -->

  <!-- Begin Sign in Modal -->

  <!-- End sign in Modal -->

  <div class="modal fade" id="sign_in" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body text-medium row">
          <div class="rightside col-lg-6 col-md-6 order-lg-12 order-md-12">
            <form id="signform">
              <div class="text-medium text-center margin-bottom-10px h4">Sign In</div>
              <div class="alert alert-danger signerror" style="display:none">

              </div>
              <div class="alert alert-success signsuccess" style="display:none">

              </div>
              <div class="form-group margin-bottom-10px">
                <input type="email" class="form-control" placeholder="Username" name="email">
              </div>
              <div class="form-group margin-bottom-0px">
                <input type="password" class="form-control" placeholder="Password" name="password" id="signpassword">
              </div>
              <div class="text-right margin-bottom-10px">
                <a style="cursor:pointer" data-toggle="modal" data-target="#forgotpassword" class="text-small">Forgot Password?</a>
              </div>
              <div class="form-group">
                <a class="btn btn-primary btn-block" id="signin" style="color:#fff">Sign in</a>
              </div>
            </form>
            <!--<div class="text-center margin-tb-20px">
                    <button class="btn loginBtn-facebook font-weight-700 text-white">
                        <i class="fa fa-facebook-square margin-right-5px" aria-hidden="true"></i>
                      Login with Facebook
                    </button>
                    <button class="btn loginBtn-google font-weight-700 text-white">
                    <i class="fa fa-google-plus-square margin-right-5px" aria-hidden="true"></i>
                      Login with Google
                    </button>
                </div>-->
            <div class="text-center margin-tb-10px">
              <button class="btn register_btn font-weight-700 text-white" data-toggle="modal" data-target="#sign_up">
                New to Adventourist? Sign Up
              </button>
            </div>
          </div>
          <!--/.-->
          <div class="leftside col-lg-6 col-md-6 text-center">
            <div class="margin-bottom-10px d-none d-md-block">
              <img src="<?php echo base_url() ?>assets/images/registered-real-traveller.jpg" alt="" class="img-fluid">
            </div>
            <div class="registered_real_traveller text-up-small padding-bottom-10px">
              <div>Registered Real Traveller?</div>
              <a class="text-small" data-toggle="modal" data-target="#sign_in_real">Sign in Here</a>
            </div>
          </div>
          <!--/.-->
        </div>
        <!--/.modal body-->
      </div>
    </div>
  </div>



  <!-- Begin Sign up Modal -->
  <div class="modal fade" id="sign_up" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form id="signup">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Sign Up</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="alert alert-danger registererror" style="display:none">

          </div>
          <div class="alert alert-success registersuccess" style="display:none">

          </div>
          <div class="modal-body text-medium">
            <div class="form-group margin-bottom-20px">
              <input type="text" class="form-control" placeholder="Name" name="username">
            </div>
            <div class="form-group margin-bottom-20px">
              <input type="email" class="form-control" placeholder="Email" name="email">
            </div>
            <div class="form-group margin-bottom-20px">
              <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <div class="form-group margin-bottom-20px">
              <input type="password" class="form-control" placeholder="Re-Enter Password" name="confirmpassword">
            </div>
            <div class="form-group">
              <a class="btn btn-primary btn-block btn-lg" id="signupForm" style="color:#FFF;">Sign Up</a>
            </div>
            <div class="other_login text-center">
              <div class="font-weight-700 text-large margin-bottom-10px">OR</div>
              <!--<button class="btn loginBtn-facebook font-weight-700 text-white btn-lg">
                <i class="fa fa-facebook-square margin-right-5px" aria-hidden="true"></i>
              Login with Facebook
            </button>-->
              <a href="<?php echo @$google_login_url; ?>" class="btn loginBtn-google font-weight-700 text-white btn-lg">
                <i class="fa fa-google-plus-square margin-right-5px" aria-hidden="true"></i>
                Login with Google
              </a>
            </div>
          </div>
          <!--/.modal body-->
        </div>
      </form>
    </div>
  </div>
  <!-- End sign up Modal -->


  <!-- Begin Forgot Password Modal -->
  <div class="modal fade" id="forgotpassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form id="forgotup">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Forgot Password Form</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="alert alert-danger registererror" style="display:none">

          </div>
          <div class="alert alert-success registersuccess" style="display:none">

          </div>

          <div class="form-group margin-bottom-20px">
            <input type="email" class="form-control" placeholder="Email" name="email">
          </div>

          <div class="form-group">
            <a class="btn btn-primary btn-block btn-lg" id="forgotForm" style="color:#FFF;">Submit</a>
          </div>
          <div class="other_login text-center">

          </div>
        </div>
        <!--/.modal body-->
    </div>
    </form>
  </div>
  </div>
  <!-- End Forgot Password Modal -->


  <div class="scrolltop">
    <div class="scroll icon"><i class="fa fa-4x fa-angle-up"></i></div>
  </div>




  <!-- <script type="text/javascript" src="<?php //echo base_url();
                                            ?>assets/js/loading.js"></script>   -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/sticky-sidebar.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() . 'assets/admin/js/common.js'; ?>" type="text/javascript"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/project.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/traveller.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/sha1.js" type="text/javascript"></script>
  <?php if (isset($module) && $module == "itineraries" || $module == "things_to_do") : ?>
    <!-- bootstrap multiselect -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-multiselect.css" type="text/css">
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-multiselect.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('.multiselect_dropdown').multiselect();
      });
    </script>
    <!-- end bootstrap multiselect -->

    <?php if (isset($module) && $module == "itineraries") : ?>

      <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>

      <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />

      <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-minima.css" />

      <script>
        $("#share").jsSocials({
          showCount: false,
          showLabel: false,
          shares: ["email", "twitter", "facebook", "whatsapp"]
        });
      </script>

    <?php endif; ?>

    <!-- price range slider -->
    <link rel='stylesheet' href='<?php echo base_url() ?>assets/css/jquery-ui.css'>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/index.js"></script>
    <!-- end price range slider -->
    <!--<script type="text/javascript" src="<?php echo base_url() ?>assets/js/custom.js"></script>-->

    <!-- Begin gallery -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/unite-gallery.css" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/unitegallery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/ug-theme-compact.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#gallery").unitegallery();
      });
    </script>

    <!-- End gallery -->
    <!--<script type="text/javascript" src="<?php echo base_url() ?>assets/js/custom.js"></script>-->

    <!-- begin tab -->
    <script>
      /* if in tab mode */

      // $("ul.tabs li").click(function() {
      //   var ulID = $(this).parent('ul').attr('id');
      //   $("#" + ulID + "_cont .tab_content").hide();
      //   var activeTab = $(this).attr("rel");
      //   $("#"+activeTab).fadeIn();

      //   $("#" + ulID + " li").removeClass("active");
      //   $(this).addClass("active");

      //   $(".tab_drawer_heading").removeClass("d_active");
      //   $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");

      // });

      /* if in drawer mode */
      $(".tab_drawer_heading").click(function() {
        var ulID = $(this).parent('div').attr('id');
        $("#" + ulID + " .tab_content").slideUp();

        var d_activeTab = $(this).attr("rel");
        $("#" + d_activeTab).slideDown();

        $("#" + ulID + " .tab_drawer_heading").removeClass("d_active");
        $(this).addClass("d_active");

        $("ul.tabs li").removeClass("active");
        $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");
      });
    </script>
    <!-- end tab -->

    <script>
      $(document).ready(function() {
        $(".itit").on("click", function() {
          $("html, body").animate({
            scrollTop: 1500
          }, "slow");
        })
      })
    </script>

    <!-- packaging checklist modal -->
    <div class="modal fade packaging_checklist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Packaging List</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-medium tab-xs">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#food" role="tab">Food</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Accessories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#clothes" role="tab">Clothes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#medicines" role="tab">Medicines & Other</a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="food" role="tabpanel">
                <?php
                if (isset($itinerariesRecs[0]->food) && !empty($itinerariesRecs[0]->food)) :
                  echo $itinerariesRecs[0]->food;
                endif; ?>
              </div>
              <div class="tab-pane" id="accessories" role="tabpanel">
                <?php if (isset($itinerariesRecs[0]->accessories) && !empty($itinerariesRecs[0]->accessories)) :
                  echo $itinerariesRecs[0]->accessories;
                endif; ?>
              </div>
              <div class="tab-pane" id="clothes" role="tabpanel">
                <?php if (isset($itinerariesRecs[0]->clothes) && !empty($itinerariesRecs[0]->clothes)) :
                  echo $itinerariesRecs[0]->clothes;
                endif; ?>
              </div>
              <div class="tab-pane" id="medicines" role="tabpanel">
                <?php if (isset($itinerariesRecs[0]->medicines) && !empty($itinerariesRecs[0]->medicines)) :
                  echo $itinerariesRecs[0]->medicines;
                endif; ?>
              </div>
            </div>
            <!-- // Nav tabs -->
          </div>
          <!--/.modal body-->
        </div>
      </div>
    </div>
    <!-- packaging checklist modal -->

    <!-- Add to bucket modal -->
    <div class="modal fade" id="add_to_bucket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add to Bucket List</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="inputName">Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputName">Description</label>
              <textarea class="form-control" rows="3"></textarea>
            </div>
            <div class="clearifix">
              <a href="#" class="btn btn-primary text-medium">Create Bucket</a>
            </div>
          </div>
          <!--/.modal body-->
        </div>
      </div>
    </div>
    <!-- Add to bucket modal -->

    <!-- ask travel expert modal -->
    <div class="modal fade ask_travel_expert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tell us what would you like to know about this itinerary ?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="alert alert-danger askourerror" style="display:none">

          </div>
          <div class="alert alert-success askoursuccess" style="display:none">

          </div>
          <div class="modal-body">
            <form id="itinerariesExperts">
              <div class="row">
                <div class="col-lg-6 col-sm-6">
                  <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" name="username">
                  </div>
                </div>
                <!--/.col-->
                <div class="col-lg-6 col-sm-6">
                  <div class="form-group">
                    <label for="inputName">What do you want to know ?</label>
                    <textarea class="form-control" rows="2" name="knowdescription"></textarea>
                  </div>
                </div>
                <!--/.col-->
                <div class="col-lg-6 col-sm-6">
                  <div class="form-group">
                    <label for="inputName">Email ID</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                </div>
                <!--/.col-->
                <div class="col-lg-6 col-sm-6">
                  <div class="form-group">
                    <label for="inputName">Mobile Number</label>
                    <input type="tel" class="form-control" name="mobile">
                  </div>
                </div>
                <!--/.col-->
                <input type="hidden" name="itinerariesId" value="<?php echo $itinerariesId; ?>">
                <div class="col-lg-12">
                  <a class="btn btn-primary text-medium" id="expertitineraries" style="color:#fff">Submit Query</a>
                </div>
                <!--/.col-->
                <div class="col-lg-12 margin-top-15px">
                  <div class="alert alert-danger expertformerror" style="display:none">

                  </div>
                </div>
                <!--/.col-->
                <div class="col-lg-12">
                  <div class="alert alert-success margin-top-10px expertformsuccess" style="display:none">

                  </div>
                </div>
              </div>
            </form>
          </div>
          <!--/.modal body-->
        </div>
      </div>
    </div>
    <!-- ask travel expert modal -->
  <?php endif; ?>

  <div class="modal fade" id="sign_in_real" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Real Traveller Sign In</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="alert alert-danger registererror" style="display:none">

        </div>
        <div class="alert alert-success registersuccess" style="display:none">

        </div>

        <div class="modal-body text-medium">
          <form id="realform">
            <div class="form-group margin-bottom-20px">
              <input type="email" class="form-control" placeholder="Username" name="email">
            </div>
            <div class="form-group margin-bottom-20px">
              <input type="password" class="form-control" placeholder="Password" name="password" id="realpassword">
            </div>
            <div class="form-group">
              <a href="#" class="btn btn-primary btn-block btn-lg" id="realforms">Sign in</a>
            </div>
          </form>
        </div>
        <!--/.modal body-->
      </div>
    </div>
  </div>

  <script>
    // $(window).on("load", function () {
    $(document).ready(function() {
      $("#itinerariesHomes").css('display', 'block');
      $(".itilistpage").css('display', 'block');
    });
  </script>

</body>

</html>