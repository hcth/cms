<style type="text/css">
  .selectize-input {
    height: auto !important;
    line-height: 43px !important;

  }

  .selectize-dropdown,
  .selectize-dropdown.form-control {
    width: 100% !important;
    top: 55px !important;
    position: absolute;
  }

  .s-input {
    height: 55px;
  }

  .selectize-input,
  .selectize-input input {
    color: inherit !important;
  }

  .description {
    margin-left: 25px;
    display: block;
    font-size: 14px;
    font-weight: 300;
    margin-top: 6px;
  }

  .icon {
    margin-right: 9px !important;
    display: inline-block !important;
  }

  .name {
    display: block;
    font-size: 18px;
    font-weight: 600;
  }

  .selectize-dropdown {
    padding: 0 !important;
    overflow: hidden;
  }

  .by {
    margin-left: 22px;
    background: #008bec;
    font-size: 12px;
    padding: 4px 12px;
    border-radius: 30px;
    color: #fff;
    display: inline-block;
  }

  .hc-bx p {
    margin: 25px 0 0 0;
    font-size: 20px;
  }

  .th-cms-section {
    padding-bottom: 90px;
  }

  .sl-name p,
  .sl-name p big {
    margin: 0;
    font-size: inherit;
  }

  .tr-price {
    margin-bottom: 10px;
    font-size: 20px;
    font-weight: 600;
    color: #424851;
  }

  .tr-price span {
    text-align: center;
    font-size: 18px;
    border-radius: 100%;
    vertical-align: middle;
  }

  .tr-price label,
  .sl-days span {
    vertical-align: middle;
    margin-bottom: 0;
  }

  .sl-days img {
    width: 17px;
    vertical-align: middle;
    margin-right: 5px;
  }

  .sl-itmn>div.tr-price {
    margin-right: 10px;
  }

  .sl-itmn>div {
    display: inline-block;
  }

  .selectize-input.focus {
    box-shadow: none !important;
    -moz-box-shadow: none !important;
  }

  .selectize-dropdown .active {
    background-color: #f1f1f1 !important;
  }

  .selectize-control .icon.thingstodo,
  .icon.stories,
  .icon.itenaries {
    background-image: url(../../../assets/images/sprite-image.png) !important;
    display: inline-block !important;
    vertical-align: middle;
    width: 20px !important;
    height: 20px !important;
    background-position: -257px -312px;
    background-size: auto;
  }

  .selectize-control .icon {
    background-size: auto !important;
  }

  .h-plus {
    margin: 0;
    font-size: 42px;
    font-weight: 800;
    color: #4dc246;
  }

  @media(max-width: 767px) {
    .selectize-input {
      line-height: 33px !important;
    }

    .exp-itanaries:after {
      background: rgb(255 255 255 / 75%);
    }
  }
</style>
<section class="itineraries-main-section" style="background-image: url(<?php echo base_url(); ?>uploads/itinerariesthumb/<?php echo $itinerariesRecs[0]->listthumbnail; ?>);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sec-heading">
          <h1><?php echo $itinerariesRecs[0]->headline; ?></h1>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="it-wrapper">
  <section class="breadcrumb-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li>></li>
            <li><a href="<?php echo base_url('itineraries'); ?>">Itinerary </a></li>
            <li>></li>
            <li><?php echo $itinerariesRecs[0]->headline; ?></li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <section class="itineraies-items">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="box-item">
            <div class="bx-list-items">
              <div class="icon-bx">
                <i class="sprite-icon location-pin"></i>
              </div>
              <div class="txt-box">
                <h3>Destination</h3>
                <label><?php echo $itinerariesRecs[0]->destination; ?></label>
              </div>
            </div>
            <div class="bx-list-items">
              <div class="icon-bx">
                <i class="sprite-icon sun-icon"></i>
              </div>
              <div class="txt-box">
                <h3>Best time to Visit</h3>
                <div class="sl-card">
                  <?php
                  $monthsVisit = explode(",", $itinerariesRecs[0]->month_to_visit);
                  if (is_Array($monthsVisit)) :
                    foreach ($monthsVisit as $vals) {
                  ?>
                      <span class="itineraries_tag1"><?php echo $vals; ?></span>
                  <?php }
                  endif; ?>
                </div>
              </div>
            </div>
            <div class="bx-list-items">
              <div class="icon-bx">
                <i class="sprite-icon calendar-icon"></i>
              </div>
              <div class="txt-box">
                <h3>Stay Days</h3>
                <label> <?php echo $itinerariesRecs[0]->trip_nights; ?> nights and <?php echo $itinerariesRecs[0]->trip_days; ?> days</label>
              </div>
            </div>
            <div class="bx-list-items">
              <div class="icon-bx">
                <i class="sprite-icon family-icon"></i>
              </div>
              <div class="txt-box">
                <h3>Suitable For</h3>
                <div class="sl-card">
                  <?php $cat = explode(",", $itinerariesRecs[0]->category);
                  if (is_array($cat)) :
                    foreach ($cat as $value) {
                  ?>
                      <span class="itineraries_tag1">
                        <?php echo $value; ?></span>
                  <?php }
                  endif; ?>
                </div>
              </div>
            </div>
            <div class="bx-list-items">
              <div class="icon-bx">
                <i class="sprite-icon theme-icon"></i>
              </div>
              <div class="txt-box">
                <h3>Theme</h3>
                <div class="sl-card">
                  <?php $cat = explode(",", $itinerariesRecs[0]->type);
                  if (is_array($cat)) :
                    foreach ($cat as $value) {
                  ?>
                      <span class="itineraries_tag1">
                        <?php echo $value; ?></span>
                  <?php }
                  endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
        $mediaUpload = modules::run("itineraries/getItinerariesMedia", $itinerariesRecs[0]->itiid);
        // echo '<pre>';
        // print_r(($mediaUpload));
        ?>
        <div class="col-md-9">
          <div class="gallery-box">
            <div class="gallery-img">
              <img src="<?php echo base_url() ?>uploads/<?php echo $mediaUpload[1]->created_by ?>/itineraries/<?php echo $mediaUpload[1]->filename; ?>" alt="images">
            </div>
            <div class="sl-main-box">
              <div class="sl-boxes gallary-list" id="gallary-list">



                <?php
                if (is_array($mediaUpload)) {
                  foreach ($mediaUpload as $value) {

                    if ($value->upload_type == "image") {
                ?>

                      <div class="sl-items">
                        <div class="sl-img">
                          <img alt="Preview Image 1" src="<?php echo base_url() ?>uploads/<?php echo $value->created_by ?>/itineraries/<?php echo $value->filename; ?>" data-image="<?php echo base_url() ?>uploads/<?php echo $value->created_by ?>/itineraries/<?php echo $value->filename; ?>">
                        </div>
                      </div>
                      <?php
                    } else {
                      $video = explode("/", $value->filename);
                      if (is_array($video) && !empty($video[3])) {
                      ?>
                        <div class="sl-items">
                          <div class="sl-img">
                            <img alt="Youtube Video" data-type="youtube" data-videoid="<?php echo $video[3]; ?>" data-description="You can include youtube videos easily!">
                          </div>
                        </div>
                <?php
                      }
                    }
                  }
                } ?>
              </div>
              <div class="sl-controller">
                <div class="g-left-btn">
                  <i class="sprite-icon left-icon"></i>
                </div>
                <div class="g-right-btn">
                  <i class="sprite-icon right-icon"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="main-box">
            <div class="itanaries-details">
              <div class="itnr-desc">
                <h3>About This Itinerary</h3>
                <p><?php echo $itinerariesRecs[0]->about; ?></p>

              </div>
              <hr>
              <div class="itineraies-list">
                <div class="itnr-desc">
                  <h3>Detailed Itinerary</h3>
                </div>
              </div>

              <?php $itiDetails = modules::run("itineraries/getItinerariesDetails", $itinerariesRecs[0]->itiid);
              if (is_array($itiDetails)) :
                $i = 1;
                foreach ($itiDetails as $details) {
              ?>
                  <div class="itna-days-count">
                    <div class="crcl-bx">
                      <div class="day-circle">
                        <i><?php echo $i; ?></i>
                      </div>
                    </div>

                    <div class="itn-deatils">
                      <div class="itnr-desc">
                        <h3><?php echo $details->from_city; ?></h3>
                        <p>
                          <?php echo $details->details; ?>
                        </p>
                      </div>
                    </div>
                  </div>
              <?php $i++;
                }
              endif; ?>


            </div>
            <div class="share-itnr">
              <a class="socil" data-count="..." data-social="tw">
                <i class="sprite-icon twitter"></i>
              </a>
              <a class="socil" data-count="..." data-social="fb">
                <i class="sprite-icon facebook"></i>
              </a>
              <a class="socil" data-count="..." data-social="ln">
                <i class="sprite-icon Linkedin"></i>
              </a>
              <a class="socil" href="https://api.whatsapp.com/send?phone=919930400694&text=Hey%20there%20can%20you%20help%20me%20plan%20my%20trip">
                <i class="sprite-icon whats-app-icon"></i>
              </a>
              <a class="socil" id="email" href=":your@email.address?body=Comments about the color blue">
                <i class="sprite-icon emails-icon"></i>
              </a>
            </div>

          </div>
          <div class="main-box mrt25">
            <div class="itanaries-details">
              <div class="itnr-desc">
                <h3>Important Details</h3>
                <?php echo $itinerariesRecs[0]->imp_things; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
              
              <!-- <div class="add-space">
                               <img class="img-fluid" src="images/ad-banner.png" alt="ad">
                            </div> -->
              <div class="WhatsApp-space">
                <h2 class="what-head"><i class="sprite-icon whatsapp-line"></i>Get customized tour</h2>
                <div class="what-detail">
                  <div class="w-input">
                    <input type="date" name="date" id="date" placeholder="Selece Date">
                  </div>
                  <div class="tour-detail">
                    <div class="t-list mr-r30">
                      <h3>Adult</h3>
                      <div class="t-items-input">
                        <button class="minus">-</button>
                        <input class="count" type="text" value="0" name="adult" id="adult" min="1" max="10">
                        <button class="plus">+</button>
                      </div>
                    </div>
                    <div class="t-list">
                      <h3>Kids</h3>
                      <div class="t-items-input">
                        <button class="minus">-</button>
                        <input class="count" type="text" value="0" name="kid" id="kid" min="1" max="10">
                        <button class="plus">+</button>
                      </div>
                    </div>
                  </div>
                  <div class="t-send">
                    <button id='send_wa'><i class="sprite-icon whatsapp-line"></i>Send WhatsApp</button>
                  </div>
                </div>
              </div>
              <div class="tag-section">
                <div class="tag-box blue-bg">
                  <div class="tag-item">
                    <?php setlocale(LC_MONETARY, 'en_IN'); ?>
                    <i class="sprite-icon tag-icon"></i><label><?php echo money_format('%.0n', floor($itinerariesRecs[0]->budget)); ?></label>
                  </div>
                  <div class="tag-txt">
                    Per Person Onwards
                  </div>
                </div>

                <div class="enquiry-sec blue-bg">
                  <div class="enq-form">
                    <h2>Enquire for free</h2>
                    <form id="itinerariesExpertsnew">
                      <div class="eng-input">
                        <input type="text" class="form-control" autocomplete="off" placeholder="Name*" name="username">
                      </div>
                      <div class="eng-input">
                        <input type="email" class="form-control" autocomplete="off" placeholder="Email*" name="email">
                      </div>
                      <div class="eng-input">
                        <input type="tel" class="form-control" autocomplete="off" maxlength="10" placeholder="Mobile*" name="mobile">
                      </div>
                      <input type="hidden" name="knowdescription" value="Inquiry about <?php echo $itinerariesRecs[0]->destination; ?>">
                      <input type="hidden" id="destination" name="destination" value="<?php echo $itinerariesRecs[0]->destination; ?>">
                      <input type="hidden" id="platform" name="platform" value="Website" />
                      <input type="hidden" id="campaigntype" name="campaigntype" value="Organic" />
                      <input type="hidden" id="adgroup" name="adgroup" value="Itinerary Page" />
                      <input type="hidden" name="itinerariesId" value="<?php echo $itinerariesId; ?>">
                      <div class="eng-input agrement">
                        <label><input type="checkbox" name="" id="itncheck"> I Agree to the <a href="https://adventourist.in/terms-and-conditions">Terms and Conditions</a></label>
                        <!-- <span id="checkbox-error" style="display: none;" class="error">Please agree to terms and conditions.</span> -->
                      </div>
                      <div class="eng-input">
                        <button type="button" class="btn btn-yellow" id="expertitinerariesnew">Submit</button>
                      </div>
                      <div class="alert alert-danger margin-top-10px askourerror" style="display:none">
                        <strong>Failure!</strong> Please enter valid details.
                      </div>
                      <div class="alert alert-success askoursuccess" style="display:none">
                      </div>
                    </form>
                    <!-- <form id="itinerariesExpertsnew">
                          
                          <div class="eng-input agrement">
                            <input type="checkbox" name="aggrement" id="aggrement" required="required">
                            <label for="aggrement">Send me updates on WhatsApp & I agree to terms and conditions </label>
                          </div>
                        </form> -->
                  </div>
                </div>
              </div>
        </div>
      </div>
  </section>

  <section class="similar-itanaries">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="adv-title-sec">
            <h1 class="heading">Similar itineraries</h1>
            <p class="para">Explore itineraries handcrafted by real travellers and local guides</p>
          </div>
          <div class="sl-main-box">
            <div class="sl-boxes">
              <?php
              $itinerariesRecords = modules::run('itineraries/getitinerairesSimilar');
              if (is_array($itinerariesRecords)) :

                foreach ($itinerariesRecords as $vals) {
              ?>
                  <a class="sl-items" href="<?php echo base_url('itinerary/' . $vals->url); ?>">
                    <div class="sl-img">

                      <img src="<?= base_url(); ?>uploads/itinerariesthumb/<?php echo $vals->listthumbnail; ?>" alt="<?= $vals->headline; ?>">
                    </div>
                    <div class="sl-tag">
                      <label><?= $vals->destination; ?></label>
                    </div>
                    <div class="sl-name">
                      <?= $vals->headline; ?>
                    </div>
                    <div class="sl-itmn">

                      <div class="tr-price"><label> Starts at <?php echo money_format("%(#10n", $vals->budget); ?></label></div>
                      <div class="sl-days"><img src="<?php echo base_url(); ?>assets/images/clock-icon.svg" alt="clock icon"> <span><?= $vals->trip_days; ?> Days</span>
                      </div>
                    </div>
                  </a>
              <?php
                }
              endif; ?>

            </div>
            <div class="sl-controller">
              <div class="left-btn">
                <i class="sprite-icon left-icon"></i>
              </div>
              <div class="right-btn">
                <i class="sprite-icon right-icon"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<a class="call-now-sec" href="tel:+91 9930400694">
  <i class="sprite-icon call-now"></i>
  <div class="cl-txt">
    <label>
      Call now <br><span>to inquire for free</span>
    </label>
  </div>
</a>

<!-- <div class="advent-action-overlay"></div>
<div class="advent-sidebar">
  <div class="adven-brand">
    <a href="#">
      <img src="images/adventourist-logo.png" alt="Adventourist logo">
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
          <img src="images/itineraries/img-1.jpg">
        </div>
        <div class="itn-ttl">
          The Ski Resort Destination - Auli 5 Nights and 6 Days
        </div>
      </a>
      <a href="#" class="itn-box">
        <div class="itn-img">
          <img src="images/itineraries/img-2.jpg">
        </div>
        <div class="itn-ttl">
          The Ski Resort Destination - Auli 5 Nights and 6 Days
        </div>
      </a>
      <a href="#" class="itn-box">
        <div class="itn-img">
          <img src="images/itineraries/img-3.jpg">
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
</div> -->

<script type="text/javascript" src="https://rawgit.com/Belyash/jquery-social-buttons/master/src/jquery.social-buttons.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    var url = window.location.href;
    $(function() {
      <?php
      $uri = $_SERVER['REQUEST_URI'];
      $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
      $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
      ?>
      $('[data-social]').socialButtons({
        url: '<?= $url; ?>'
      });
    });

  $('#email').attr('href', 'mailto:your@email.address?body='+url+'');

    $('#send_wa').click(function() {
      var dest = $('#destination').val();
      var date = $('#date').val();
      var adult = $('#adult').val();
      var kid = $('#kid').val();

      var mess = 'https://api.whatsapp.com/send?phone=919930400694&text=Hi,%20I%20am%20planning%20to%20visit%20' + dest + '%20on%20' + date + '.%20We%20are%20' + adult + '%20adults%20and%20' + kid + '%20kids,%20Can%20you%20call%20back%20with%20more%20information?';
      window.open(mess, '_blank');

    });
  });
</script>