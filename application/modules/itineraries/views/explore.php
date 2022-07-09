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

    /* .sl-days img {
        width: 17px;
        vertical-align: middle;
        margin-right: 5px;
    } */

    .clock {
        width: 17px !important;
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

<?php
setlocale(LC_MONETARY, "en_IN");
?>
<section class="exp-itanaries">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="adv-title-sec">
                    <h1 class="heading"><?= $breadcrum; ?></h1>
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
            <li><a href="<?php echo base_url('itineraries'); ?>">Itinerary</a></li>
            <li>></li>
            <li><?= $breadcrum; ?></li>
        </ul>
    </div>
</section>

<section class="careers-section our-team exp-all">
    <div class="container">
        <div class="row">

            <?php

            if (is_array($itinerariesRecs)) {
                foreach ($itinerariesRecs as $vals) {
            ?>


                    <div class="col-md-4">
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
                    </div>

            <?php
                }
            }
            ?>

        </div>
    </div>
</section>