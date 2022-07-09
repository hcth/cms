
<?php
setlocale(LC_MONETARY, "en_IN");
?>
<div class="sl-main-box itn-search-result-section">
    <div class="sl-boxes ">
        <?php
        foreach ($itinerariesRecs as $vals) { ?>
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
        } ?>
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