<h2 class="heading-2">Latest itineraries</h2>
<div class="itn-list">
    <?php

    foreach ($latest as $iti) {
    ?>
        <a href="<?php echo base_url('itinerary/' . $iti->url); ?>" class="itn-box">
            <div class="itn-img">
                <img src="<?= base_url(); ?>uploads/itinerariesthumb/<?php echo $iti->listthumbnail; ?>" alt="<?= $iti->headline; ?>">
            </div>
            <div class="itn-ttl">
                <?= $iti->headline; ?>
            </div>
        </a>
    <?php
    }
    ?>
</div>
<?php // echo json_encode($latest); ?>