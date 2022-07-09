<?php

$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// echo $this->router->fetch_class();
// echo $this->router->fetch_method();


if (isset($listthumbnail) && !empty($listthumbnail)) {
    $listthumbnail = 'uploads/itinerariesthumb/' . $listthumbnail;
} else if (isset($realtravellerDetail[0]->listthumbnail) && !empty($realtravellerDetail[0]->listthumbnail)) {
    $listthumbnail = 'uploads/itinerariesthumb/' . $realtravellerDetail[0]->listthumbnail;
} else if (isset($storiesDetail[0]->listthumbnail) && !empty($storiesDetail[0]->listthumbnail)) {
    $listthumbnail = 'uploads/itinerariesthumb/' . $storiesDetail[0]->listthumbnail;
} else if (isset($thingstodo[0]->listthumbnail) && !empty($thingstodo[0]->listthumbnail)) {
    $listthumbnail = 'uploads/itinerariesthumb/' . $thingstodo[0]->listthumbnail;
} else if (isset($itinerariesRecs[0]->listthumbnail) && !empty($itinerariesRecs[0]->listthumbnail)) {
    $listthumbnail = 'uploads/itinerariesthumb/' . $itinerariesRecs[0]->listthumbnail;
} else {
    $listthumbnail = 'assets/images/adventourist-logo.png';
}


if (isset($budget) && !empty($budget)) {
    $budget = $budget;
} else if (isset($realtravellerDetail[0]->budget) && !empty($realtravellerDetail[0]->budget)) {
    $budget = $realtravellerDetail[0]->budget;
} else if (isset($storiesDetail[0]->budget) && !empty($storiesDetail[0]->budget)) {
    $budget = $storiesDetail[0]->budget;
} else if (isset($thingstodo[0]->budget) && !empty($thingstodo[0]->budget)) {
    $budget = $thingstodo[0]->budget;
} else if (isset($itinerariesRecs[0]->budget) && !empty($itinerariesRecs[0]->budget)) {
    $budget = $itinerariesRecs[0]->budget;
} else {
    $budget = 9999;
}

if (isset($title) && !empty($title)) {
    $title = $title;
} else if (isset($realtravellerDetail[0]->meta_title) && !empty($realtravellerDetail[0]->meta_title)) {
    $title = $realtravellerDetail[0]->meta_title;
} else if (isset($storiesDetail[0]->meta_title) && !empty($storiesDetail[0]->meta_title)) {
    $title = $storiesDetail[0]->meta_title;
} else if (isset($thingstodo[0]->meta_title) && !empty($thingstodo[0]->meta_title)) {
    $title = $thingstodo[0]->meta_title;
} else if (isset($itinerariesRecs[0]->meta_title) && !empty($itinerariesRecs[0]->meta_title)) {
    $title = $itinerariesRecs[0]->meta_title;
} else {
    $title = "Adventourist Website";
}

if (isset($descriptions) && !empty($descriptions)) {
    $descriptions = $descriptions;
} else if (isset($realtravellerDetail[0]->metaDesc) && !empty($realtravellerDetail[0]->metaDesc)) {
    $descriptions = $realtravellerDetail[0]->metaDesc;
} else if (isset($thingstodo[0]->metaDesc) && !empty($thingstodo[0]->metaDesc)) {
    $descriptions = $thingstodo[0]->metaDesc;
} else if (isset($storiesDetail[0]->meta_description) && !empty($storiesDetail[0]->meta_description)) {
    $descriptions = $storiesDetail[0]->meta_description;
} else if (isset($itinerariesRecs[0]->meta_description) && !empty($itinerariesRecs[0]->meta_description)) {
    $descriptions = $itinerariesRecs[0]->meta_description;
} else {
    $descriptions = "Adventourist Meta Descriptionn";
}
?>
<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NDHCWP9');
</script>
<!-- End Google Tag Manager -->

<?php
if ($current_url == base_url() || $current_url == base_url('home')) {
?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Adventourist",
            "url": "<?= base_url(); ?>",
            "logo": "<?= base_url(); ?>assets/images/adventourist-logo.png",
            "sameAs": [
                "https://www.facebook.com/adventourist.in",
                "https://twitter.com/adventourist_in",
                "https://www.instagram.com/adventourist.in/",
                "https://www.youtube.com/channel/UC4Q5nSMXXLIx5BW9OAYeBeg?sub_confirmation=0%3Fsub_confirmation%3D1"
            ]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "Adventourist",
            "url": "<?= base_url(); ?>",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "<?= base_url(); ?>travel-blog/?s={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "TravelAgency",
            "name": "Adventourist",
            "image": "<?= base_url(); ?>assets/images/adventourist-logo.png",
            "@id": "",
            "url": "<?= base_url(); ?>",
            "telephone": "+91-9930400694",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Adventourist, 1, Madhav Kunj, South Pond Road, Vile Parle West",
                "addressLocality": "Mumbai",
                "postalCode": "400056",
                "addressCountry": "IN"
            }
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "Adventourist",
            "image": "https://adventourist.in/travel-blog/",
            "description": "Premium Travel Experiential Agency",
            "brand": "Adventourist",
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "5",
                "bestRating": "5",
                "worstRating": "1",
                "ratingCount": "2",
                "reviewCount": "2"
            },
            "review": [{
                "@type": "Review",
                "name": "Very Friendly Team",
                "reviewBody": "We travelled to Ladakh with Adventourist and it was a great experience. A special mention here to Tejender Singh, our travel assistant for his help. Great person. Would surely recommend it to my friends and also looking forward to planning my next trip with Adventourist. Thanks a lot for a memorable trip.",
                "reviewRating": {
                    "@type": "Rating",
                    "ratingValue": "5",
                    "bestRating": "5",
                    "worstRating": "1"
                },
                "datePublished": "2021-01-06",
                "author": {
                    "@type": "Person",
                    "name": "Nikhil"
                },
                "publisher": {
                    "@type": "Organization",
                    "name": "Customer"
                }
            }, {
                "@type": "Review",
                "name": "Namrata",
                "reviewBody": "We went to ladakh by Adventourist and they arranged the trip very well. Prior to the trip they gave a proper download of dos and don'ts. During the trip everything was well coordinated. Overall it was a great experience and will love to have another experience with you guys again.",
                "reviewRating": {
                    "@type": "Rating",
                    "ratingValue": "5",
                    "bestRating": "5",
                    "worstRating": "1"
                },
                "datePublished": "2020-02-01",
                "author": {
                    "@type": "Person",
                    "name": "Namrata"
                },
                "publisher": {
                    "@type": "Organization",
                    "name": "Customer"
                }
            }]
        }
    </script>

    <meta property="og:title" content="Adventourist - Premium Experiential Travel Company in Mumbai">
    <meta property="og:site_name" content="Adventourist">
    <meta property="og:url" content="<?= base_url(); ?>">
    <meta property="og:description" content="Get your holidays, trips, vacations planned by real travellers and local guides at no extra cost. Best travel agency in Vile parle, Mumbai">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?= base_url($listthumbnail); ?>">


    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@adventourist_in">
    <meta name="twitter:title" content="Adventourist - Premium Experiential Travel Company in Mumbai">
    <meta name="twitter:description" content="Get your holidays, trips, vacations planned by real travellers and local guides at no extra cost. Best travel agency in Vile parle, Mumbai">
    <meta name="twitter:image" content="<?= base_url($listthumbnail); ?>">
<?php
} else {
?>
    <meta property="og:title" content="<?= $title; ?>">
    <meta property="og:site_name" content="Adventourist">
    <meta property="og:url" content="<?= $current_url; ?>">
    <meta property="og:description" content="<?= $descriptions; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?= base_url($listthumbnail); ?>">


    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@adventourist_in">
    <meta name="twitter:title" content="<?= $title; ?>">
    <meta name="twitter:description" content="<?= $descriptions; ?>">
    <meta name="twitter:image" content="<?= base_url($listthumbnail); ?>">

<?php
}

$class  = $this->router->fetch_class();
$method = $this->router->fetch_method();


if ($class == 'itineraries' && $method == 'detail') {
?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "<?= base_url(); ?>"
            }, {
                "@type": "ListItem",
                "position": 2,
                "name": "Itinerary",
                "item": "<?= base_url(); ?>itinerary/"
            }, {
                "@type": "ListItem",
                "position": 3,
                "name": "<?= $title; ?>",
                "item": "<?= $current_url; ?>"
            }]
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "<?= $title; ?>",
            "image": "<?= base_url($listthumbnail); ?>",
            "description": "<?= $descriptions; ?>",
            "brand": "Adventourist",
            "offers": {
                "@type": "Offer",
                "url": "<?= $current_url; ?>",
                "priceCurrency": "INR",
                "price": "<?= $budget; ?>",
                "availability": "https://schema.org/InStock"

            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "5",
                "bestRating": "5",
                "worstRating": "5",
                "ratingCount": "5"
            }
        }
    </script>


<?php
}
?>