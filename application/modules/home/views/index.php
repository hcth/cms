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
    .hc-bx{
        margin-bottom: 35px;
    }

    @media(max-width: 767px) {
        .selectize-input {
            line-height: 43px !important;
            padding: 5px 5px 5px 40px !important;
        }

        .exp-itanaries:after {
            background: rgb(255 255 255 / 75%);
        }
    }
</style>
<?php
setlocale(LC_MONETARY, "en_IN");
?>
<section class="exp-itanaries main-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="adv-title-sec">
                    <h1 class="heading">Explore Destinations and Itineraries</h1>
                    <p class="para">Authentic itineraries planned by travel experts and local guides</p>
                    <div class="main-s-box s-bb">
                        <div class="adv-search">
                            <div class="search-box">
                                <i class="sprite-icon search-icon"></i>
                                <form autocomplete="off">
                                    <input type="text" id="search-full" class="s-input" name="search" id="advSearch" placeholder="Search for destination or place eg: Leh, Thailand etc">
                                    <div class="selectize-dropdown single form-control repositories no-res" style=" width: 594.25px; top: 10px; left: 0px; ">
                                        <!-- <div class="selectize-dropdown-content">
                                            <div data-selectable="" data-value="https://www.adventourist.in/story/leh-ladakh-historic-past-culture-life-of-the-people-popular-festivities" class=""><span class="title margin-top-10px"><span class="name"><i class="icon stories"></i>No Results Found ...</span></span>
                                                <ul class="meta"></ul>
                                            </div>

                                        </div> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="treding-itanaries">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="adv-title-sec">
                    <h1 class="heading">Trending Trips</h1>
                    <!-- <p class="para">Explore itineraries handcrafted by real travellers and local guides</p> -->
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

<section class="treding-itanaries bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="adv-title-sec">
                    <h1 class="heading">Trips under ₹ 15,000</h1>
                </div>
                <div class="sl-main-box">
                    <div class="sl-boxes">
                        <div class="sl-slide">
                            <?php
                            $itinerariesRecords = modules::run('itineraries/getitinerairesUnder15000');
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

<section class="treding-itanaries">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="adv-title-sec">
                    <h1 class="heading">Trips under ₹ 25,000</h1>
                </div>
                <div class="sl-main-box">
                    <div class="sl-boxes">
                        <div class="sl-slide">
                            <?php
                            $itinerariesRecords = modules::run('itineraries/getitinerairesUnder25000');
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

<section class="treding-itanaries bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="adv-title-sec">
                    <h1 class="heading">Great Himalayan escapade</h1>
                </div>
                <div class="sl-main-box">
                    <div class="sl-boxes">
                        <div class="sl-slide">
                            <a href="https://www.adventourist.in/itinerary/leh-ladakh-with-manali-tour-package" class="sl-items">
                                <div class="sl-img">
                                    <img src="<?php echo base_url(); ?>assets/images/itineraries/Leh-escade.jpg" alt="Trip to Leh for Breakseekers and Wanderers 10 Nights and 11 Days">
                                </div>
                                <div class="sl-tag">
                                    <label>Leh</label>
                                </div>
                                <div class="sl-name">
                                    Trip to Leh for Breakseekers and Wanderers 10 Nights and 11 Days
                                </div>
                                <div class="sl-itmn">
                                    <div class="tr-price"><label> Starts at ₹ 20,999.00</label></div>
                                    <div class="sl-days"><img src="<?php echo base_url(); ?>assets/images/clock-icon.svg" alt="clock icon"> <span>11 Days</span>
                                    </div>
                                </div>
                            </a>
                            <a href="https://www.adventourist.in/itinerary/Spiti-Valley-Itinerary-6-Days" class="sl-items">
                                <div class="sl-img">
                                    <img src="<?php echo base_url(); ?>assets/images/itineraries/Spiti-Valley-escade.jpg" alt="The Little Tibet  - Spiti Valley">
                                </div>
                                <div class="sl-tag">
                                    <label>Spiti Valley</label>
                                </div>
                                <div class="sl-name">
                                    The Little Tibet - Spiti Valley
                                </div>
                                <div class="sl-itmn">
                                    <div class="tr-price"><label> Starts at ₹ 17,999.00</label></div>
                                    <div class="sl-days"><img src="<?php echo base_url(); ?>assets/images/clock-icon.svg" alt="clock icon"> <span>6 Days</span>
                                    </div>
                                </div>
                            </a>
                            <a href="https://www.adventourist.in/itinerary/Himachal-Itinerary-for-8-Days" class="sl-items">
                                <div class="sl-img">
                                    <img src="<?php echo base_url(); ?>assets/images/itineraries/Himachal-escade.jpg" alt="The Land of Gods - Himachal Pradesh 7 Nights and 8 Days">
                                </div>
                                <div class="sl-tag">
                                    <label>Himachal Pradesh</label>
                                </div>
                                <div class="sl-name">
                                    The Land of Gods - Himachal Pradesh 7 Nights and 8 Days
                                </div>
                                <div class="sl-itmn">
                                    <div class="tr-price"><label> Starts at ₹ 13,999.00</label></div>
                                    <div class="sl-days"><img src="<?php echo base_url(); ?>assets/images/clock-icon.svg" alt="clock icon"> <span>8 Days</span>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="th-cms-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="adv-title-sec">
                    <h2 class="heading">Why choose Adventourist<br>to plan your trips</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="hc-bx">
                    <img src="<?php echo base_url(); ?>assets/images/thank-you/rupees-symbol.png">
                    <p>Best pricing</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="hc-bx">
                    <img src="<?php echo base_url(); ?>assets/images/thank-you/heart-symbole.png">
                    <p>100% Honest<br>recommendations</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="hc-bx">
                    <img src="<?php echo base_url(); ?>assets/images/thank-you/best-symbol.png">
                    <p>Best itineraries <br>planned by travel experts</p>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="hc-bx">
                    <img src="<?php echo base_url(); ?>assets/images/thank-you/support-symbol.png">
                    <p>Best in class <br>on-ground support</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="hc-bx">
                    <h1 class="h-plus">100 +</h1>
                    <p>Trips planned</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="hc-bx">
                    <img src="<?php echo base_url(); ?>assets/images/thank-you/5-start.png">
                    <p>Star travel company</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="talk-to-expert bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tls-exprt">
                    <div class="adv-title-sec">
                        <h3 class="heading">Experience a world-class vacation with adventourist</h3>
                    </div>

                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="trip-rt">
                    <a class="clnn" href="https://www.google.com/url?q=https://www.google.com/search?q%3Dadventourist%26rlz%3D1C5CHFA_enIN861IN861%26oq%3Dadventourist%26aqs%3Dchrome..69i57j69i60l3j69i61.4767j0j1%26sourceid%3Dchrome%26ie%3DUTF-8&sa=D&source=editors&ust=1619007136378000&usg=AOvVaw2RV4gUNgsuGDTKQskZle0z" target="_blank">
                        <i class="sprite-icon google-icon"></i>
                        <p>
                            <i class="sprite-icon big-start-icon"></i> <label>4.9</label>
                        </p>

                    </a>
                    <a class="clnn ml-40" href="https://www.facebook.com/adventourist.in/reviews/?ref=page_internal" target="_blank">
                        <i class="sprite-icon facebook-icon"></i>
                        <p>
                            <i class="sprite-icon big-start-icon"></i> <label>5</label>
                        </p>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="travel-stories">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="adv-title-sec">
                    <h1 class="heading">Read our travel blog</h1>
                    <!-- <p class="para">Read travellers real stories</p> -->
                </div>
                <!-- <div class="sl-main-box">
                    <div class="sl-boxes">

                        <?php
                        if (is_array($stories)) :
                            foreach ($stories as $vals) {
                        ?>
                                <div class="sl-items">
                                    <div class="sl-img">
                                        <a href="<?php echo base_url() ?>story/<?php echo $vals->meta_url; ?>" class="d-block background-white    margin-bottom-15px border_radius_10">
                                            <?php if (empty($vals->storiesImage)) { ?>
                                                <img src="<?php echo base_url(); ?>uploads/nostories.png" alt="<?php echo $vals->story_head; ?>" title="<?php echo $vals->story_head; ?>">
                                            <?php } else { ?>
                                                <img src="<?php echo base_url(); ?>assets/frontImage/stories/<?php echo $vals->storiesImage; ?>" alt="<?php echo $vals->story_head; ?>" title="<?php echo $vals->story_head; ?>">
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="sl-tag">
                                        <label>Bangkok and Pattaya</label>
                                    </div>
                                    <div class="sl-name">
                                        <a href="<?php echo base_url() ?>story/<?php echo $vals->meta_url; ?>" class="d-block background-white    margin-bottom-15px border_radius_10">
                                            <?= $vals->story_head; ?>
                                        </a>
                                    </div>
                                </div>
                        <?php
                            }
                        endif;
                        ?>
                    </div>
                    <div class="sl-controller">
                        <div class="left-btn">
                            <i class="sprite-icon left-icon"></i>
                        </div>
                        <div class="right-btn">
                            <i class="sprite-icon right-icon"></i>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="col-md-4">
                <a href="https://adventourist.in/travel-blog/category/travel-stories/" target="_blank" class="blg-bx">
                    <i class="sprite-icon story-icon"></i>
                    <h3>Travel stories</h3>


                </a>
            </div>
            <div class="col-md-4">
                <a href="https://adventourist.in/travel-blog/category/things-to-do/" class="blg-bx" target="_blank">
                    <i class="sprite-icon things-icon"></i>
                    <h3>Things to do</h3>

                </a>
            </div>
            <div class="col-md-4" target="_blank">
                <a href="https://adventourist.in/travel-blog/category/destination-guides/" target="_blank" class="blg-bx">
                    <i class="sprite-icon guides-icon"></i>
                    <h3>Destination guides</h3>

                </a>
            </div>
        </div>
    </div>
</section>

<section class="testi-m-section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="adv-title-sec">
                    <h2 class="heading">Don’t just take our word, see what our customers have to say</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="sl-main-box">
                    <div class="sl-boxes">
                        <div class="sl-items">
                            <div class="testimonial">
                                <div class="main-box">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <div class="c-img">
                                                <img src="<?= base_url(); ?>assets/images/gues-pics/YogeshChaudhary.jpeg">
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <div class="start">
                                                <i class="sprite-icon gold-start"></i>
                                                <i class="sprite-icon gold-start"></i>
                                                <i class="sprite-icon gold-start"></i>
                                                <i class="sprite-icon gold-start"></i>
                                                <i class="sprite-icon gold-start"></i>
                                            </div>
                                            <div class="para">

                                                “Very professional and very well organised. Best accommodation/hotels were selected for us.
                                                Numerous suggestions were given to us. No communication problem at all (that was the best
                                                part). All queries were solved immediately. Best team for the job. Most co-operative team with
                                                humble nature.”
                                                <blockquote>- Yogesh Choudhary,</blockquote>
                                                <label class="desgi">- Mumbai</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="sl-items">
                            <div class="testimonial">
                                <div class="main-box">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <div class="c-img">
                                                <img src="<?= base_url(); ?>assets/images/gues-pics/saifHans.jpg">
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <div class="start">
                                                <i class="sprite-icon gold-start"></i>
                                                <i class="sprite-icon gold-start"></i>
                                                <i class="sprite-icon gold-start"></i>
                                                <i class="sprite-icon gold-start"></i>
                                                <i class="sprite-icon gold-start"></i>
                                            </div>
                                            <div class="para">
                                                “These guys are true travellers and planners, they themselves have travelled to Leh several times on
                                                their motorcycle, I strongly recommend that you travel with them. I also found that their cost was
                                                very very affordable without compromising the quality of hotels and itinerary. They do not
                                                recommend commercial short trips, we were 4 friends travelling on a moderate budget however
                                                they accommodated all our requests. No need for second thought, if you want to go to Leh, just go
                                                with Adventourist.”

                                                <blockquote>- Saif Hans,</blockquote>
                                                <label class="desgi">- Mumbai</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sl-items">

                            <div class="testimonial">
                                <div class="main-box">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <div class="c-img">
                                                <img src="<?= base_url(); ?>assets/images/gues-pics/sakshiJewrajika.jpg">
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <div class="start">
                                                <i class="sprite-icon gold-start"></i>
                                                <i class="sprite-icon gold-start"></i>
                                                <i class="sprite-icon gold-start"></i>
                                                <i class="sprite-icon gold-start"></i>
                                                <i class="sprite-icon gold-start"></i>
                                            </div>
                                            <div class="para">
                                                “I had planned my trip with adventourist in the last moment and I am very happy that I came in
                                                contact with them. They were very helpful and cooperative anytime I needed help. They plan the trip
                                                according to how you wish and they always take care of their clients. The whole team was very
                                                helpful . I would like to plan a new trip soon. Special thanks to Mr Tejinder”
                                                <blockquote>- Sakshi Jewrajka,</blockquote>
                                                <label class="desgi">- Delhi</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

<section class="talk-to-expert">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tls-exprt">
                    <div class="adv-title-sec">
                        <h3 class="heading">Talk to our travel experts </h3>
                    </div>

                </div>
            </div>
            <div class="col-md-4 text-center">
                <a class="clnn" href="tel:+919930400694">
                    <i class="sprite-icon call-now-icon"></i>
                    <p>+919930400694</p>
                </a>
            </div>
            <div class="col-md-4 text-center">
                <a class="clnn" href="https://api.whatsapp.com/send?phone=919930400694&text=Hey%20there%20can%20you%20help%20me%20plan%20my%20trip" target="_blank">
                    <i class="sprite-icon whatsapp-icon"></i>
                    <p>WhatsApp us now</p>
                </a>
            </div>
            <div class="col-md-4 text-center">
                <a class="clnn" href="mailto:support@adventourist.in">
                    <i class="sprite-icon email-icon"></i>
                    <p>Email </p>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- <section class="things-to-do bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="adv-title-sec">
                    <h1 class="heading">Things to do</h1>
                    <p class="para">Get things to do populated by real travellers, the list keeps updating as and when any of our real travellers discover new experiences. A must-read before you visit any destination</p>
                </div>
                <div class="sl-main-box">
                    <div class="sl-boxes">

                        <?php
                        if (is_array($thingstodo)) :
                            foreach ($thingstodo as $vals) { ?>
                                <div class="sl-items">
                                    <div class="sl-img">
                                        <a href="<?php echo base_url() ?>things-to-do/<?php echo $vals->url; ?>">
                                            <img src="<?php echo base_url() ?>/assets/frontImage/thingstodothumb/<?php echo $vals->profileImage; ?>" alt="<?php echo $vals->articleHeadline; ?>" title="<?php echo $vals->articleHeadline; ?>">
                                        </a>
                                    </div>
                                    <div class="sl-tag">
                                        <label>
                                            <?php echo $vals->articleplace; ?>
                                        </label>
                                    </div>
                                    <div class="sl-name">
                                        <a href="<?php echo base_url() ?>things-to-do/<?php echo $vals->url; ?>">
                                            <?php echo $vals->articleHeadline; ?>
                                        </a>
                                    </div>
                                </div>
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



<section class="destination-guide bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="adv-title-sec">
                    <h1 class="heading">Destination guide</h1>
                </div>

                <div class="sl-main-box">
                    <div class="sl-boxes">
                        <div class="sl-items">
                            <div class="sl-img">
                                <a href="#">
                                    <img src="<?= base_url(); ?>assets/images/itineraries/img-1.jpg" alt="The Ski Resort Destination - Auli 5 Nights and 6 Days">
                                </a>
                            </div>
                            <div class="sl-tag">
                                <label>Bangkok and Pattaya</label>
                            </div>
                            <div class="sl-name">
                                <a href="#">The Ski Resort Destination - Auli 5 Nights and 6 Days</a>
                            </div>
                            <div class="sl-days">6 Days</div>
                        </div>
                        <div class="sl-items">
                            <div class="sl-img">
                                <a href="#">
                                    <img src="<?= base_url(); ?>assets/images/itineraries/img-2.jpg" alt="The Ski Resort Destination - Auli 5 Nights and 6 Days">
                                </a>
                            </div>
                            <div class="sl-tag">
                                <label>Bangkok and Pattaya</label>
                            </div>
                            <div class="sl-name">
                                <a href="#">The Ski Resort Destination - Auli 5 Nights and 6 Days</a>
                            </div>
                            <div class="sl-days">6 Days</div>
                        </div>
                        <div class="sl-items">
                            <div class="sl-img">
                                <a href="#">
                                    <img src="<?= base_url(); ?>assets/images/itineraries/img-3.jpg" alt="The Ski Resort Destination - Auli 5 Nights and 6 Days">
                                </a>
                            </div>
                            <div class="sl-tag">
                                <label>Bangkok and Pattaya</label>
                            </div>
                            <div class="sl-name">
                                <a href="#">The Ski Resort Destination - Auli 5 Nights and 6 Days</a>
                            </div>
                            <div class="sl-days">6 Days</div>
                        </div>
                        <div class="sl-items">
                            <div class="sl-img">
                                <a href="#">
                                    <img src="<?= base_url(); ?>assets/images/itineraries/img-4.jpg" alt="The Ski Resort Destination - Auli 5 Nights and 6 Days">
                                </a>
                            </div>
                            <div class="sl-tag">
                                <label>Bangkok and Pattaya</label>
                            </div>
                            <div class="sl-name">
                                <a href="#">The Ski Resort Destination - Auli 5 Nights and 6 Days</a>
                            </div>
                            <div class="sl-days">6 Days</div>
                        </div>
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
</section> -->








<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/selectize.bootstrap3.css">
<script src="<?php echo base_url(); ?>/assets/js/selectize.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/index.js"></script>
<script>
    $('.no-res').hide()
    // <select id="select-repo"></select>
    $('#search-full').selectize({
        valueField: 'url',
        labelField: 'name',
        searchField: 'name',
        options: [],
        create: false,
        maxItems: 1,
        render: {
            option: function(item, escape) {
                console.log(item);

                return '<div>' +
                    '<span class="title margin-top-10px">' +
                    '<span class="name"><i class="icon ' + item.type + '"></i>' + item.name + '</span>' +
                    '<span class="' + (item.by == '' ? 'hide' : 'by') + '">' + escape(item.by) + '</span>' +
                    '</span>' +
                    '<span class="description margin-top-10px">' + escape(item.metaDesc) + '</span>' +
                    '<ul class="meta">' +
                    (item.language ? '<li class="language">' + escape(item.language) + '</li>' : '') +
                    '</ul>' +
                    '</div>';
            }
        },
        score: function(search) {
            var score = this.getScoreFunction(search);
            // console.log(score);
            return function(item) {
                return score(item);
            };
        },
        load: function(query, callback) {
            if (!query.length) return callback();
            $.ajax({
                url: base_url + '/home/getSchemes/',
                type: 'post',
                dataType: 'json',
                data: {
                    'query': query
                },
                error: function() {

                    callback();
                },
                success: function(res) {
                    //console.log('res');
                    callback(res);
                }
            });
        },
        onItemAdd: function(val) {
            window.open(val, '_blank');
            return false;
        },
        onType: function(text) {
            if (!this.currentResults.items.length) {
                console.log('no res');
                $('.no-res').show()
                return '<div>' +
                    '<span class="title margin-top-10px">' +
                    '<span class="name"><i class="icon ' + item.type + '"></i>' + item.name + '</span>' +
                    '<span class="' + (item.by == '' ? 'hide' : 'by') + '">' + escape(item.by) + '</span>' +
                    '</span>' +
                    '<span class="description margin-top-10px">' + escape(item.metaDesc) + '</span>' +
                    '<ul class="meta">' +
                    (item.language ? '<li class="language">' + escape(item.language) + '</li>' : '') +
                    '</ul>' +
                    '</div>';
            } else {
                console.log('res found');
                $('.no-res').hide()

            }
        }
    });
</script>