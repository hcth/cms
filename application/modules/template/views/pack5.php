<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adventourist: Road Trips | Things To Do | Stories</title>
  <meta name="Get your travel itineraries, road trip & vacation planned by real travellers and local guides at no extra cost">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
  <link rel="stylesheet" href="https://adventourist.in/package/css/style.css">
  <link rel="shortcut icon" href="https://adventourist.in/assets/images/favicon.ico" type="image/x-icon">
  <style>
    /* =======================================
        Color Variables
    ========================================*/
    :root {
      --text-white: #fff;
      --border-white: #fff;
      --bg-white: #fff;

      --text-black: #4e4e4e;
      --border-black: #4e4e4e;
      --bg-black: #4e4e4e;

      --text-gray: #cccccc;
      --border-gray: #cccccc;
      --bg-gray: #cccccc;

      --text-blue: #1a91f8;
      --border-blue: #1a91f8;
      --bg-blue: #1a91f8;

      /* rare backgrounds */
      --bg-extra-light-blue: #f0f5fe;
      --bg-light-blue: #e5f0fd;
      --bg-dark-blue: #106dbe;

      /* rare text */
      --text-lime: #25d366;
      --text-soot-black: #434343;
      --text-light-gray: #737373;

      /* rate border */
      --border-light-gray: #e0e0e0;
    }

    /* =======================================
            General CSS
========================================*/
    @import url("https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900;1000&display=swap");

    * {
      box-sizing: border-box;
    }

    @font-face {
      font-family: "Mulish";
      src: url("<?php echo base_url() ?>packassets/fonts/Mulish-ExtraBoldItalic.woff2") format("woff2"),
        url("<?php echo base_url() ?>packassets/fonts/Mulish-ExtraBoldItalic.woff") format("woff");
      font-weight: bold;
      font-style: italic;
      font-display: swap;
    }

    @font-face {
      font-family: "Mulish";
      src: url("<?php echo base_url() ?>packassets/fonts/Mulish-Black.woff2") format("woff2"),
        url("<?php echo base_url() ?>packassets/fonts/Mulish-Black.woff") format("woff");
      font-weight: 900;
      font-style: normal;
      font-display: swap;
    }

    @font-face {
      font-family: "Mulish";
      src: url("<?php echo base_url() ?>packassets/fonts/Mulish-BoldItalic.woff2") format("woff2"),
        url("<?php echo base_url() ?>packassets/fonts/Mulish-BoldItalic.woff") format("woff");
      font-weight: bold;
      font-style: italic;
      font-display: swap;
    }

    @font-face {
      font-family: "Mulish";
      src: url("<?php echo base_url() ?>packassets/fonts/Mulish-ExtraBold.woff2") format("woff2"),
        url("<?php echo base_url() ?>packassets/fonts/Mulish-ExtraBold.woff") format("woff");
      font-weight: bold;
      font-style: normal;
      font-display: swap;
    }

    @font-face {
      font-family: "Mulish";
      src: url("<?php echo base_url() ?>packassets/fonts/Mulish-BlackItalic.woff2") format("woff2"),
        url("<?php echo base_url() ?>packassets/fonts/Mulish-BlackItalic.woff") format("woff");
      font-weight: 900;
      font-style: italic;
      font-display: swap;
    }

    @font-face {
      font-family: "Mulish";
      src: url("<?php echo base_url() ?>packassets/fonts/Mulish-Bold.woff2") format("woff2"),
        url("<?php echo base_url() ?>packassets/fonts/Mulish-Bold.woff") format("woff");
      font-weight: bold;
      font-style: normal;
      font-display: swap;
    }

    @font-face {
      font-family: "Mulish";
      src: url("<?php echo base_url() ?>packassets/fonts/Mulish-ExtraLightItalic.woff2") format("woff2"),
        url("<?php echo base_url() ?>packassets/fonts/Mulish-ExtraLightItalic.woff") format("woff");
      font-weight: 200;
      font-style: italic;
      font-display: swap;
      @
    }

    @font-face {
      font-family: "Mulish";
      src: url("<?php echo base_url() ?>packassets/fonts/Mulish-Regular.woff2") format("woff2"),
        url("<?php echo base_url() ?>packassets/fonts/Mulish-Regular.woff") format("woff");
      font-weight: normal;
      font-style: normal;
      font-display: swap;
    }

    @font-face {
      font-family: "Mulish";
      src: url("<?php echo base_url() ?>packassets/fonts/Mulish-LightItalic.woff2") format("woff2"),
        url("<?php echo base_url() ?>packassets/fonts/Mulish-LightItalic.woff") format("woff");
      font-weight: 300;
      font-style: italic;
      font-display: swap;
    }

    @font-face {
      font-family: "Mulish";
      src: url("<?php echo base_url() ?>packassets/fonts/Mulish-ExtraLight.woff2") format("woff2"),
        url("<?php echo base_url() ?>packassets/fonts/Mulish-ExtraLight.woff") format("woff");
      font-weight: 200;
      font-style: normal;
      font-display: swap;
    }

    @font-face {
      font-family: "Mulish";
      src: url("<?php echo base_url() ?>packassets/fonts/Mulish-SemiBold.woff2") format("woff2"),
        url("<?php echo base_url() ?>packassets/fonts/Mulish-SemiBold.woff") format("woff");
      font-weight: 600;
      font-style: normal;
      font-display: swap;
    }

    @font-face {
      font-family: "Mulish";
      src: url("<?php echo base_url() ?>packassets/fonts/Mulish-Italic.woff2") format("woff2"),
        url("<?php echo base_url() ?>packassets/fonts/Mulish-Italic.woff") format("woff");
      font-weight: normal;
      font-style: italic;
      font-display: swap;
    }

    @font-face {
      font-family: "Mulish";
      src: url("<?php echo base_url() ?>packassets/fonts/Mulish-Light.woff2") format("woff2"),
        url("<?php echo base_url() ?>packassets/fonts/Mulish-Light.woff") format("woff");
      font-weight: 300;
      font-style: normal;
      font-display: swap;
    }

    @font-face {
      font-family: "Mulish";
      src: url("<?php echo base_url() ?>packassets/fonts/Mulish-SemiBoldItalic.woff2") format("woff2"),
        url("<?php echo base_url() ?>packassets/fonts/Mulish-SemiBoldItalic.woff") format("woff");
      font-weight: 600;
      font-style: italic;
      font-display: swap;
    }

    body {
      margin: 0;
      font-family: "Mulish";
      color: var(--text-soot-black);
      font-size: 18px;
      line-height: 1.5;
    }

    img {
      max-width: 100%;
      display: inline-block;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-weight: 600;
      color: var(--text-black);
    }

    h2 {
      font-size: 28px;
    }

    h3 {
      font-size: 20px;
    }

    a,
    button {
      cursor: pointer;
      border: none;
      outline: none;
      text-decoration: none !important;
      display: inline-block;
    }

    input {
      outline: none;
    }

    section {
      padding: 75px 0;
    }

    main.home-main {
      overflow: hidden;
    }

    .mfp-bg {
      z-index: 99999 !important;
    }

    .mfp-wrap {
      z-index: 99999 !important;
    }

    /* =======================================
        Reusable classes
========================================*/
    .wrapper {
      display: flex;
      flex-wrap: wrap;
    }

    .container {
      max-width: 1166px;
      margin: 0 auto;
    }

    .theme-input {
      padding: 0 15px;
      height: 50px;
      font-size: 15px;
      transition: 0.3s;
      background: rgba(255, 255, 255, 0.22);
      border: 1px solid rgba(255, 255, 255, 0.7);
      border-radius: 5px;
    }

    .theme-input:focus {
      border-color: var(--border-blue);
    }

    .theme-btn {
      color: var(--text-white);
      background-color: var(--bg-blue);
      border: none;
      border-radius: 6px;
      height: 50px;
      padding: 0 40px;
      font-size: 16px;
      display: inline-grid;
      place-content: center;
      transition: 0.3s;
      font-weight: 600;
    }

    select {
      border: 0px;
      outline: 0px;
    }

    .theme-btn:hover {
      background-color: var(--bg-dark-blue);
    }

    .title-block {
      text-align: center;
      max-width: 717px;
      margin: 0 auto 70px;
    }

    .title-block h2 {
      margin: 0 0 30px;
    }

    .w-50 {
      width: 50%;
    }

    .show-btn {
      display: none;
    }

    .register-fix-btn {
      position: fixed;
      right: 10px;
      bottom: -50px;
      transition: all 0.3s ease;
      -webkit-transition: all 0.3s ease;
      z-index: 99;
    }

    a.register-fix-btn {
      display: flex !important;
      align-items: center;
      border-radius: 50px;
      background: #fff;
      box-shadow: 2px 2px 4px 1px rgb(0 0 0 / 14%);
    }

    a.register-fix-btn img {
      width: 100%;
      max-width: 50px;
      border-radius: 50px;
    }

    .cl-txt label {
      font-size: 15px;
      font-weight: 600;
      cursor: pointer;
      margin-left: 8px;
      margin-right: 10px;
      color: #1e73be;
    }

    /* =======================================
            header
========================================*/
    header.header .wrapper {
      justify-content: space-between;
      align-items: center;
    }

    header.header .logo {
      width: 100%;
      max-width: 260px;
    }

    header.header {
      padding: 16px;
    }

    header.header .wrapper .nav-bar ul {
      list-style: none;
    }

    .nav-bar ul {
      list-style: none;
      display: flex;
      align-items: center;
    }

    .nav-bar ul li a {
      font-size: 16px;
      padding: 0 10px;
      color: var(--bg-black);
    }

    .nav-bar ul li a.active {
      color: #1a91f8;
    }

    .humberger-menu {
      padding: 5px;
      width: 35px;
      height: auto;
      aspect-ratio: 1/0;
    }

    .humberger-menu-cvr {
      display: none;
    }

    /* =======================================
            banner
========================================*/

    section.banner {
      padding: 165px 0 85px;
      background-image: url(<?php echo base_url() ?>packassets/images/banner.jpg);
      z-index: 1;
      background-position: 60% 89%;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }

    section.banner:before {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: linear-gradient(90deg,
          #ffffff 12.14%,
          rgba(255, 255, 255, 0.757218) 33.44%,
          rgba(255, 255, 255, 0) 62.99%);
      z-index: -1;
    }

    .banner-bg img {
      height: 100%;
    }

    .banner-bg {
      position: absolute;
      top: 25px;
      bottom: 0;
      left: 54%;
      z-index: -1;
    }

    .bnr-input-cover label {
      position: absolute;
      left: 12px;
      top: 50%;
      font-size: 14px;
      color: #000;
      transform: translateY(-50%);
      background-color: none;
      transition: 0.3s;
      padding: 0 10px;
    }

    .bnr-input-cover input::placeholder {
      font-size: 14px;
      color: #000;
    }

    .bnr-input-cover select {
      width: 100%;
      padding: 0 15px;
      height: 50px;
      font-size: 18px;
      transition: 0.3s;
      background: rgba(255, 255, 255, 0.22);
      border: 1px solid rgba(255, 255, 255, 0.7);
      border-radius: 5px;
      font-size: 14px;
      color: #000;
    }

    .bnr-input-cover {
      position: relative;
      margin-bottom: 20px;
    }

    .banner-box {
      width: 50%;
      max-width: 480px;
      position: relative;
    }

    .banner-content {
      max-width: 540px;
    }

    .banner-content ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .banner-content ul li {
      font-size: 23px;
      font-weight: 400;
      margin-bottom: 13px;
      line-height: 1.9;
    }

    .banner-content ul li p b {
      font-weight: 600;
      color: #434343;
      font-size: 20px;
    }

    .banner-content ul li:last-child {
      display: flex;
      align-items: center;
    }

    .banner-content ul li p {
      color: #434343;
      font-size: 20px;
      font-weight: 400;
      margin: 0;
    }

    .banner-content h2 {
      margin: 0 0 28px;
      font-size: 43px;
      font-weight: 700;
      color: #000;
    }

    .banner-content ul li img {
      margin-right: 24px;
      width: 100%;
      max-width: 35px;
    }

    .banner-form h3 {
      text-align: center;
      font-weight: 600;
      margin-bottom: 10px;
      color: #000000;
      font-size: 22px;
    }

    .banner-form.banner-box p {
      text-align: center;
      color: #000000;
      font-size: 16px;
      margin-bottom: 20px;
    }

    section.banner .wrapper {
      align-items: center;
      justify-content: space-between;
    }

    .bnr-input-cover input {
      width: 100%;
    }

    .wp-update label span {
      color: var(--text-lime);
    }

    .wp-update label {
      margin-left: 10px;
      font-size: 16px;
      color: #000;
    }

    .wp-update {
      margin-bottom: 20px;
    }

    .banner-form button {
      width: 100%;
    }

    .banner-content p {
      max-width: 766px;
      margin: 0 auto 46px;
      font-size: 20px;
      color: var(--bg-white);
    }

    .banner-content .theme-btn {
      padding: 0 15px;
    }

    .banner-content .wrapper {
      margin: 26px auto 0;
      max-width: 866px;
      justify-content: space-between;
    }

    .banner-form.banner-box {
      padding: 29px;
      position: relative;
      z-index: 1;
      background: rgba(255, 255, 255, 0.2);
      border: 1px solid #ffffff;
      backdrop-filter: blur(20px);
      border-radius: 10px;
      width: 100%;
    }

    .banner-form.banner-box>img {
      position: absolute;
      right: 0;
      bottom: 0;
      z-index: -1;
    }

    .wp-update input#wp {
      width: 15px;
      height: 15px;
      filter: brightness(0.8);
    }

    /* =======================================
            short-itinerary
========================================*/
    section.short-itinerary {
      background: #fff;
    }

    .short-itinerary-title h1 {
      text-align: center;
      font-size: 32px;
      font-weight: 700;
      margin-bottom: 64px;
    }

    .short-itinerary-inner .tabs ul {
      display: flex;
      align-items: center;
      /* justify-content: space-between; */
      margin: 0;
      padding: 0;
      list-style: none;
    }

    .short-itinerary-inner .tabs ul li a {
      padding: 19px 31px;
      text-align: center;
      margin-right: 17px;
      background: #ffffff;
      border-width: 1px 1px 0px 1px;
      border-style: solid;
      border-color: #f2f2f2;
      border-radius: 6px 6px 0px 0px;
      color: #000;
      font-size: 17px;
      font-weight: 500;
      box-shadow: 0 0 10px -4px #00000036;
    }

    .short-itinerary-inner .tabs ul li {
      border-bottom: 1px solid #1e73be;
    }

    .short-itinerary-inner .tabs ul li.ui-state-active a {
      padding: 19px 31px;
      text-align: center;
      background: #ffffff;
      border-width: 1px 1px 0px 1px;
      border-style: solid;
      border-color: #1e73be;
      border-radius: 6px 6px 0px 0px;
      margin-right: 17px;
      border-bottom: 1px solid #fff;
      margin-bottom: -1px;
      box-shadow: none;
      font-weight: 600;
    }

    .short-itinerary-inner .tabs ul li:last-child a {
      margin-right: 0;
    }

    .net-cvr.active span {
      transform: rotate(180deg);
    }

    .net-cvr span {
      transition: 0.3s;
    }

    .question-bx-cvr-text {
      display: flex;
      align-items: center;
    }

    .wrapper.net-cvr {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding-bottom: 38px;
    }

    .question-bx-cvr-text h2 {
      margin: 0;
      color: #232323;
      font-size: 20px;
      font-weight: 600;
      margin-right: 75px;
      position: relative;
    }

    .question-bx-cvr-text h4 {
      margin: 0;
      color: #363636;
      font-size: 22px;
      font-weight: 600;
    }

    .faq-accodian {
      margin-top: 54px;
    }

    .wrapper.net-cvr.active h4 {
      color: #1e73be;
    }

    .question-bx-cvr-text h2:before {
      content: "";
      position: absolute;
      width: 22px;
      height: 22px;
      background: #b6ddff;
      right: -50px;
      top: 0px;
      border-radius: 50px;
    }

    .question-bx-cvr {
      position: relative;
    }

    .question-bx-cvr:before {
      content: "";
      position: absolute;
      width: 1px;
      height: 100%;
      left: 93px;
      top: 3px;
      border: 1px dashed #b6ddff;
    }

    .question-bx-cvr:last-child:before {
      border: none;
    }

    .question-bx-cvr p {
      padding-left: 120px;
      margin: 0;
      padding-bottom: 30px;
    }

    .tabs-4-part {
      width: 60%;
    }

    .enquire-form {
      width: 40%;
    }

    .stor-itinery {
      background: linear-gradient(270deg,
          rgba(25, 118, 210, 0.24) 0%,
          rgba(129, 192, 255, 0) 100%);
      position: relative;
      padding: 55px 0;
      margin-top: 70px;
    }

    .enquire-form {
      width: 40%;
      position: absolute;
      right: 0;
      top: -50px;
    }

    .resort p {
      margin: 0;
    }

    .resort {
      width: 33.33%;
      text-align: center;
      padding: 0 15px;
    }

    .enquire-form .theme-input {
      padding: 0 15px;
      height: 50px;
      font-size: 18px;
      transition: 0.3s;
      background: rgba(255, 255, 255, 0.22);
      border: 1px solid #8a8a8a;
      border-radius: 5px;
    }

    .enquire-form .banner-form.banner-box {
      padding: 42px;
      position: relative;
      z-index: 1;
      width: 100%;
      background: #ffffff;
      box-shadow: 0px 4px 25px rgb(0 0 0 / 25%);
      border-radius: 12px;
    }

    .enquire-form .banner-form h3 {
      text-align: center;
      font-weight: 600;
      margin-bottom: 18px;
      color: #000000;
    }

    .enquire-form .theme-btn {
      margin-top: 25px;
    }

    .tabs-4-part h2 {
      font-size: 32px;
      font-weight: 700;
      color: #000;
      margin-bottom: 50px;
    }

    /* =======================================
            gallary-cvr1
========================================*/

    section.gallary-cvr1 {
      background: #f1f1f1;
      padding: 100px 0;
    }

    .gallary-cvr .wrapper {
      justify-content: space-between;
    }

    .inclusions ul {
      padding: 0;
      margin: 0;
      list-style: none;
    }

    .exclusions ul {
      list-style: none;
    }

    .inclusions {
      padding: 61px 31px 31px;
      background: #eaf3fc;
      border-radius: 6px;
      position: relative;
      width: 49%;
    }

    .inclusions h2 {
      font-size: 24px;
      font-weight: 700;
      color: #000;
    }

    .inclusions .bag-inclusions {
      position: absolute;
      top: -41px;
    }

    .exclusions .bag-inclusions {
      position: absolute;
      top: -30px;
    }

    .inclusions ul li img {
      width: 100%;
      max-width: 7px;
      margin-right: 10px;
      margin-top: 6px;
    }

    .inclusions ul li {
      font-size: 16px;
      font-weight: 400;
      margin-bottom: 10px;
      display: flex;
      align-items: flex-start;
    }

    .exclusions ul li img {
      width: 100%;
      max-width: 7px;
      margin-right: 10px;
      margin-top: 6px;
    }

    .exclusions ul li {
      font-size: 14px;
      font-weight: 400;
      margin-bottom: 10px;
      display: flex;
      align-items: flex-start;
    }

    .exclusions {
      padding: 61px 31px 31px;
      background: #ffecec;
      border-radius: 6px;
      position: relative;
      width: 49%;
    }

    .exclusions h2 {
      font-size: 24px;
      font-weight: 700;
      color: #000;
    }

    ul.exclusions-cvr li {
      display: flex;
      align-items: flex-start;
    }

    ul.exclusions-cvr li p {
      margin: 0;
      margin-left: 10px;
    }

    .modal-last-cvr-btn a {
      font-size: 15px;
      color: #000;
      font-weight: 600;
    }

    .modal-last-cvr-btn {
      margin-left: 0px;
      text-align: left;
      margin-right: 23px;
      font-weight: bold;
    }

    .exclusions-full {
      /*max-height: 158px;
            overflow: hidden;*/
      transition: 1s;
    }

    /* =======================================
            popup-slider
========================================*/
    section.popup-slider {
      background: #fff;
    }

    /* slider */
    @import url("https://fonts.googleapis.com/css?family=Abel");

    h1 {
      font-family: "Mulish", sans-serif;
      font-weight: 700;
      font-size: 40px;
      text-align: center;
    }

    /* .container {
  width: 80%;
  margin: 0 auto;
} */

    a {
      outline: 0 !important;
    }

    .magnific-img img {
      width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .magnific-img {
      display: inline-block;
      width: 32.3%;
    }

    a.image-popup-vertical-fit {
      cursor: -webkit-zoom-in;
    }

    .mfp-with-zoom .mfp-container,
    .mfp-with-zoom.mfp-bg {
      opacity: 0;
      -webkit-backface-visibility: hidden;
      /* ideally, transition speed should match zoom duration */
      -webkit-transition: all 0.3s ease-out;
      -moz-transition: all 0.3s ease-out;
      -o-transition: all 0.3s ease-out;
      transition: all 0.3s ease-out;
    }

    .mfp-with-zoom.mfp-ready .mfp-container {
      opacity: 1;
    }

    .mfp-with-zoom.mfp-ready.mfp-bg {
      opacity: 0.98;
    }

    .mfp-with-zoom.mfp-removing .mfp-container,
    .mfp-with-zoom.mfp-removing.mfp-bg {
      opacity: 0;
    }

    .mfp-arrow-left:before {
      border-right: none !important;
    }

    .mfp-arrow-right:before {
      border-left: none !important;
    }

    button.mfp-arrow,
    .mfp-counter {
      opacity: 0 !important;
      transition: opacity 200ms ease-in, opacity 2000ms ease-out;
    }

    .mfp-container:hover button.mfp-arrow,
    .mfp-container:hover .mfp-counter {
      opacity: 1 !important;
    }

    /* Magnific Popup CSS */
    .mfp-bg {
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1042;
      overflow: hidden;
      position: fixed;
      background: #0b0b0b;
      opacity: 0.8;
    }

    .mfp-wrap {
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1043;
      position: fixed;
      outline: none !important;
      -webkit-backface-visibility: hidden;
    }

    .mfp-container {
      text-align: center;
      position: absolute;
      width: 100%;
      height: 100%;
      left: 0;
      top: 0;
      padding: 0 8px;
      box-sizing: border-box;
    }

    .mfp-container:before {
      content: "";
      display: inline-block;
      height: 100%;
      vertical-align: middle;
    }

    .mfp-align-top .mfp-container:before {
      display: none;
    }

    .mfp-content {
      position: relative;
      display: inline-block;
      vertical-align: middle;
      margin: 0 auto;
      text-align: left;
      z-index: 1045;
    }

    .mfp-inline-holder .mfp-content,
    .mfp-ajax-holder .mfp-content {
      width: 100%;
      cursor: auto;
    }

    .mfp-ajax-cur {
      cursor: progress;
    }

    .mfp-zoom-out-cur,
    .mfp-zoom-out-cur .mfp-image-holder .mfp-close {
      cursor: -moz-zoom-out;
      cursor: -webkit-zoom-out;
      cursor: zoom-out;
    }

    .mfp-zoom {
      cursor: pointer;
      cursor: -webkit-zoom-in;
      cursor: -moz-zoom-in;
      cursor: zoom-in;
    }

    .mfp-auto-cursor .mfp-content {
      cursor: auto;
    }

    .mfp-close,
    .mfp-arrow,
    .mfp-preloader,
    .mfp-counter {
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    .mfp-loading.mfp-figure {
      display: none;
    }

    .mfp-hide {
      display: none !important;
    }

    .mfp-preloader {
      color: #ccc;
      position: absolute;
      top: 50%;
      width: auto;
      text-align: center;
      margin-top: -0.8em;
      left: 8px;
      right: 8px;
      z-index: 1044;
    }

    .mfp-preloader a {
      color: #ccc;
    }

    .mfp-preloader a:hover {
      color: #fff;
    }

    .mfp-s-ready .mfp-preloader {
      display: none;
    }

    .mfp-s-error .mfp-content {
      display: none;
    }

    button.mfp-close,
    button.mfp-arrow {
      overflow: visible;
      cursor: pointer;
      background: transparent;
      border: 0;
      -webkit-appearance: none;
      display: block;
      outline: none;
      padding: 0;
      z-index: 1046;
      box-shadow: none;
      touch-action: manipulation;
    }

    button::-moz-focus-inner {
      padding: 0;
      border: 0;
    }

    .mfp-close {
      width: 44px;
      height: 44px;
      line-height: 44px;
      position: absolute;
      right: 0;
      top: 0;
      text-decoration: none;
      text-align: center;
      opacity: 0.65;
      padding: 0 0 18px 10px;
      color: #fff;
      font-style: normal;
      font-size: 28px;
      font-family: Arial, Baskerville, monospace;
    }

    .slick-track {
      display: flex !important
    }

    .slick-slide {
      height: auto;
    }

    .mfp-close:hover,
    .mfp-close:focus {
      opacity: 1;
    }

    .mfp-close:active {
      top: 1px;
    }

    .mfp-close-btn-in .mfp-close {
      color: #333;
    }

    .mfp-image-holder .mfp-close,
    .mfp-iframe-holder .mfp-close {
      color: #fff;
      right: -6px;
      text-align: right;
      padding-right: 6px;
      width: 100%;
    }

    .mfp-counter {
      position: absolute;
      top: 0;
      right: 0;
      color: #ccc;
      font-size: 12px;
      line-height: 18px;
      white-space: nowrap;
    }

    .mfp-arrow {
      position: absolute;
      opacity: 0.65;
      margin: 0;
      top: 50%;
      margin-top: -55px;
      padding: 0;
      width: 90px;
      height: 110px;
      -webkit-tap-highlight-color: transparent;
    }

    .mfp-arrow:active {
      margin-top: -54px;
    }

    .mfp-arrow:hover,
    .mfp-arrow:focus {
      opacity: 1;
    }

    .mfp-arrow:before,
    .mfp-arrow:after {
      content: "";
      display: block;
      width: 0;
      height: 0;
      position: absolute;
      left: 0;
      top: 0;
      margin-top: 35px;
      margin-left: 35px;
      border: medium inset transparent;
    }

    .mfp-arrow:after {
      border-top-width: 13px;
      border-bottom-width: 13px;
      top: 8px;
    }

    .mfp-arrow:before {
      border-top-width: 21px;
      border-bottom-width: 21px;
      opacity: 0.7;
    }

    .mfp-arrow-left {
      left: 0;
    }

    .mfp-arrow-left:after {
      border-right: 17px solid #fff;
      margin-left: 31px;
    }

    .mfp-arrow-left:before {
      margin-left: 25px;
      border-right: 27px solid #3f3f3f;
    }

    .mfp-arrow-right {
      right: 0;
    }

    .mfp-arrow-right:after {
      border-left: 17px solid #fff;
      margin-left: 39px;
    }

    .mfp-arrow-right:before {
      border-left: 27px solid #3f3f3f;
    }

    .mfp-iframe-holder {
      padding-top: 40px;
      padding-bottom: 40px;
    }

    .mfp-iframe-holder .mfp-content {
      line-height: 0;
      width: 100%;
      max-width: 900px;
    }

    .mfp-iframe-holder .mfp-close {
      top: -40px;
    }

    .mfp-iframe-scaler {
      width: 100%;
      height: 0;
      overflow: hidden;
      padding-top: 56.25%;
    }

    .mfp-iframe-scaler iframe {
      position: absolute;
      display: block;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
      background: #000;
    }

    /* Main image in popup */
    img.mfp-img {
      width: auto;
      max-width: 100%;
      height: auto;
      display: block;
      line-height: 0;
      box-sizing: border-box;
      padding: 40px 0 40px;
      margin: 0 auto;
    }

    /* The shadow behind the image */
    .mfp-figure {
      line-height: 0;
    }

    .mfp-figure:after {
      content: "";
      position: absolute;
      left: 0;
      top: 40px;
      bottom: 40px;
      display: block;
      right: 0;
      width: auto;
      height: auto;
      z-index: -1;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
      background: #444;
    }

    .mfp-figure small {
      color: #bdbdbd;
      display: block;
      font-size: 12px;
      line-height: 14px;
    }

    .mfp-figure figure {
      margin: 0;
    }

    .mfp-bottom-bar {
      margin-top: -36px;
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      cursor: auto;
    }

    .mfp-title {
      text-align: left;
      line-height: 18px;
      color: #f3f3f3;
      word-wrap: break-word;
      padding-right: 36px;
    }

    .mfp-image-holder .mfp-content {
      max-width: 100%;
    }

    .mfp-gallery .mfp-image-holder .mfp-figure {
      cursor: pointer;
    }

    img.mfp-img {
      width: 100%;
      max-width: 500px !important;
    }

    .img-gallery-magnific-inner {
      width: 60%;
      padding: 10px;
    }

    .popup-slider-middle-part {
      width: 31%;
      padding: 10px;
    }

    .magnific-img-cvr {
      width: 100%;
      padding: 10px;
      height: 100%;
      max-width: 230px;
    }

    .popup-slider-middle-part>div a {
      padding-bottom: 10px;
    }

    .popup-slider-last-part .magnific-img a {
      margin-bottom: 11px;
    }

    .popup-slider-last-part {
      width: 31%;
      padding: 10px;
    }

    a.image-popup-vertical-fit {
      width: 100%;
    }

    section.img-gallery-magnific {
      display: flex;
      flex-wrap: wrap;
    }

    .popup-slider-middle-part.imgbox-md {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .imgbox-md>div.small {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      height: 100%;
    }

    .imgbox-md {
      width: 20% !important;
      max-width: 20%;
    }

    .magnific-img {
      width: 100%;
    }

    .imgbox-lg {
      width: 40% !important;
      max-width: 40% !important;
    }

    .magnific-img {
      width: 100%;
    }

    .imgbox-md a {
      padding: 0 !important;
      margin: 0 !important;
    }

    .magnific-img-cvr.imgbox-md {
      height: auto;
    }

    .magnific-img-cvr.imgbox-md>div,
    .magnific-img-cvr.imgbox-md>div>a,
    .magnific-img-cvr.imgbox-md>div,
    .magnific-img-cvr.imgbox-md>div>a>img {
      height: 100%;
      object-fit: cover;
      border-radius: 5px;
    }

    @media screen and (max-width: 800px) and (orientation: landscape),
    screen and (max-height: 300px) {

      /**
   * Remove all paddings around the image on small screen
   */
      .mfp-img-mobile .mfp-image-holder {
        padding-left: 0;
        padding-right: 0;
      }

      .mfp-img-mobile img.mfp-img {
        padding: 0;
      }

      .mfp-img-mobile .mfp-figure:after {
        top: 0;
        bottom: 0;
      }

      .mfp-img-mobile .mfp-figure small {
        display: inline;
        margin-left: 5px;
      }

      .mfp-img-mobile .mfp-bottom-bar {
        background: rgba(0, 0, 0, 0.6);
        bottom: 0;
        margin: 0;
        top: auto;
        padding: 3px 5px;
        position: fixed;
        box-sizing: border-box;
      }

      .mfp-img-mobile .mfp-bottom-bar:empty {
        padding: 0;
      }

      .mfp-img-mobile .mfp-counter {
        right: 5px;
        top: 3px;
      }

      .mfp-img-mobile .mfp-close {
        top: 0;
        right: 0;
        width: 35px;
        height: 35px;
        line-height: 35px;
        background: rgba(0, 0, 0, 0.6);
        position: fixed;
        text-align: center;
        padding: 0;
      }
    }

    @media all and (max-width: 900px) {
      .mfp-arrow {
        -webkit-transform: scale(0.75);
        transform: scale(0.75);
      }

      .mfp-arrow-left {
        -webkit-transform-origin: 0;
        transform-origin: 0;
      }

      .mfp-arrow-right {
        -webkit-transform-origin: 100%;
        transform-origin: 100%;
      }

      .mfp-container {
        padding-left: 6px;
        padding-right: 6px;
      }
    }

    /* =======================================
            why-adventourist
========================================*/
    section.why-adventourist {
      background: #f1f1f1;
    }

    .why-adventourist-text h2 {
      text-align: center;
      font-size: 32px;
      font-weight: 700;
      margin-bottom: 60px;
    }

    .best-pricing p {
      margin: 0;
      font-size: 18px;
      font-weight: 500;
      color: #000;
      max-width: 210px;
      margin: auto;
      margin-top: 25px;
    }

    .best-pricing {
      text-align: center;
      width: 33.33%;
      margin-bottom: 40px;
    }

    .h-plus {
      margin: 0;
      font-size: 42px;
      font-weight: 700;
      color: #4dc246;
    }

    /* =======================================
          trip-rt
========================================*/
    section#talk-to-expert {
      background: #fff;
    }

    .trip-rt a img.Google {
      width: 100%;
      max-width: 70px;
    }

    a.clnn p {
      margin: 25px 0 0 0;
      font-size: 25px;
      color: #191717;
      text-decoration: none;
    }

    .heading {
      font-size: 2.8rem;
      font-weight: 600;
      margin-bottom: 60px;
      color: var(--text-black);
      text-align: center;
    }

    .trip-rt img.star-img {
      width: 100%;
      max-width: 25px;
      margin: auto;
      display: inline-block;
    }

    .trip-rt a.clnn {
      margin: 0 11px;
    }

    .trip-rt {
      text-align: center;
    }

    /* =======================================
          section.testimonials
========================================*/
    section.testimonials {
      background: #e8f4ff;
      overflow: hidden;
    }

    .travel-experts-inner img {
      border-radius: 10px;
    }

    .testimonials-inner-text img {
      width: 100%;
      max-width: 170px;
      margin: auto;
    }

    .testimonials-inner-text {
      width: 33.33%;
      text-align: center;
      padding: 32px;
      border-radius: 18px;
      margin: 13px;
    }

    .testimonials-inner-text p {
      font-size: 16px;
      color: #000000;
      font-weight: 400;
      margin: 23px 0;
      line-height: 2;
    }

    .testimonials-inner-text span {
      font-size: 16px;
      font-weight: 700;
    }

    section.testimonials .why-adventourist-text {
      margin-bottom: 50px;
    }

    .testimonials-cvr .wrapper {
      padding-bottom: 50px;
    }

    .testimonials-cvr {
      /* overflow: hidden; */
      width: 100%;
    }

    ul.slick-dots {
      display: flex;
      align-items: center;
      list-style: none;
      position: absolute;
      bottom: 0;
      left: 36%;
      transform: translateX(-50%);
    }

    ul.slick-dots li button {
      border-radius: 50px;
      width: 5px;
      height: 5px;
      font-size: 0;
      background: #ebebeb;
      margin: 5px;
    }

    li.slick-active button {
      background: #4285f4 !important;
    }

    .star-img img {
      width: 100%;
      padding: 3px;
    }

    .star-img {
      display: flex;
      width: 100%;
      max-width: 25px;
      margin: auto;
      justify-content: center;
      margin-top: 17px;
    }

    /* travel-experts-1 */
    ul.slick-dots li {
      border-radius: 50px;
      background: gray;
      width: 6px;
      height: 6px;
      margin: 0 5px;
    }

    li.slick-active {
      background: #2897f8 !important;
    }

    ul.slick-dots li button {
      font-size: 0;
      display: none;
    }

    .travel-experts-cvr .wrapper {
      padding-bottom: 50px;
    }

    ul.slick-dots {
      left: 50%;
    }

    .humberger-menu.active {
      top: 34px;
    }

    /* =======================================
          travel-experts
========================================*/
    section.travel-experts {
      background: #fff;
    }

    section.travel-experts .why-adventourist-text {
      margin-bottom: 50px;
    }

    .travel-experts-inner {
      width: 33.33%;
      padding: 0 15px;
      text-align: center;
    }

    .travel-experts-inner-text {
      text-align: center;
      background: #e9e9e9;
      border-radius: 10px 10px 0px 0px;
      margin-top: -90px;
      position: relative;
      padding: 20px 0;
    }

    .travel-experts-inner-text h3 {
      font-size: 24px;
      font-weight: 500;
      color: #000;
      margin: 0;
    }

    .travel-experts-inner-text p {
      font-size: 16px;
      font-weight: 500;
      margin: 0;
      margin-top: 8px;
      color: #000;
    }

    /* =======================================
          footer
========================================*/
    footer.footer p {
      margin: 0;
      font-size: 12px;
    }

    footer.footer {
      text-align: center;
      background: #1e73be;
      padding: 15px 0;
      color: #fff;
    }

    .exp-slider-1 .slick-slider .slick-track,
    .slick-slider .slick-list {
      width: 100% !important;
    }

    .exp-slider-1 .tdt-slider .slick-slide {
      width: 100% !important;
    }

    /* =======================================
          media-qeury
========================================*/
    @media (max-width: 1439px) {
      header.header .logo {
        max-width: 200px;
      }

      .stor-itinery {
        margin-bottom: 100px;
      }


      .nav-bar ul li a {
        font-size: 15px;
        padding: 0 10px;
      }

      .banner-content ul li {
        font-size: 18px;
      }

      .banner-content ul li img {
        margin-right: 15px;
        width: 100%;
        max-width: 21px;
      }

      .banner-content ul li p b {
        font-size: 16px;
      }

      .banner-content ul li p {
        font-size: 16px;
      }

      .short-itinerary-inner .tabs ul li a {
        padding: 16px 28px;
        font-size: 14px;
      }

      .short-itinerary-inner .tabs ul li.ui-state-active a {
        padding: 16px 28px;
        font-size: 14px;
      }

      .question-bx-cvr-text h2 {
        font-size: 17px;
      }

      .question-bx-cvr-text h4 {
        font-size: 17px;
      }

      .question-bx-cvr-text h2:before {
        width: 20px;
        height: 20px;
      }

      .question-bx-cvr:before {
        left: 84px;
      }

      .question-bx-cvr p {
        font-size: 15px;
        padding-left: 11%;
      }

      section.short-itinerary {
        padding-bottom: 0;
      }

      ul.slick-dots {
        left: 50%;
      }

      .enquire-form {
        width: 50%;
      }

      .tabs-4-part {
        width: 50%;
      }

      .tabs-4-part h2 {
        font-size: 25px;
      }

      .resort p {
        font-size: 13px;
      }

      .enquire-form .banner-form.banner-box {
        padding: 32px;
      }
    }

    @media (max-width: 991px) {
      .banner-content {
        padding: 0 10px;
      }


      .stor-itinery {
        margin-bottom: 100px;
      }

      .banner-form.banner-box {
        width: 100%;
        margin: auto;
        margin-top: 40px;
      }

      .banner-content {
        width: 100%;
      }

      .short-itinerary-inner .tabs ul li a {
        padding: 9px 4px;
        font-size: 12px;
        margin-right: 7px;
      }

      .short-itinerary-inner .tabs ul li.ui-state-active a {
        padding: 9px 4px;
        font-size: 12px;
        margin-right: 7px;
      }

      .exclusions-full {
        max-height: 152px;
      }

      .exclusions {
        padding: 55px 21px 30px;
      }

      .exclusions ul li {
        font-size: 13px;
      }

      .inclusions {
        padding: 50px 11px 31px;
      }

      section.why-adventourist {
        padding-bottom: 0;
      }

      .img-gallery-magnific {
        padding-top: 0;
      }

      section.popup-slider {
        padding-bottom: 0;
      }

      .travel-experts-inner-text {
        margin-top: -20px;
        padding: 10px 0;
      }

      .travel-experts-inner {
        padding: 0 10px;
      }

      .travel-experts-inner-text h3 {
        font-size: 19px;
      }

      .travel-experts-inner-text p {
        font-size: 13px;
        margin-top: 4px;
      }

      .nav-bar {
        width: 100% !important;
        display: none;
        margin-top: 13px;
        order: 3;
      }

      .nav-bar ul {
        width: 100% !important;
        display: block;
        border: 1px solid #0003;
        border-radius: 8px;
        padding: 5px;
        top: 10px;
        background: #ffff;
      }

      .nav-bar ul li a {
        width: 100%;
        padding: 5px 10px;
      }

      .humberger-menu-cvr {
        display: block;
      }

      .humberger-menu span {
        width: 25px !important;
        height: 2px;
        background: #434343;
        display: block;
      }

      .humberger-menu {
        display: block;
        padding: 0;
        width: 22px;
      }

      .humberger-menu.active {
        top: 37px;
      }

      .enquire-form {
        width: 100%;
        position: static;
      }

      .tabs-4-part {
        width: 100%;
      }

      .tabs-4-part h2 {
        font-size: 25px;
        text-align: center;
      }

      .imgbox-lg {
        width: 65% !important;
        max-width: 65% !important;
      }

      .imgbox-md {
        width: 35% !important;
        max-width: 35%;
      }

      .magnific-img-cvr.imgbox-md {
        width: 50% !important;
        max-width: 50% !important;
      }

      .popup-slider-last-part.imgbox-md {
        width: 50% !important;
        max-width: 50% !important;
      }

      .popup-slider-middle-part.imgbox-md>div:first-child img {
        height: calc(100% - 22px);
        width: 100%;
        object-fit: cover;
        border-radius: 5px;
      }

      .popup-slider-middle-part.imgbox-md>div:first-child>a {
        height: 100%;
      }

      header.header {
        padding: 28px 0;
      }
    }

    @media (max-width: 767px) {

      .question-bx-cvr p {
        font-size: 15px;
        padding-left: 19%;
      }

      ul.slick-dots {
        left: 50%;
      }

      .stor-itinery {
        margin-bottom: 0px;
      }

      header.header {
        padding: 28px 0;
      }

      .short-itinerary-inner .tabs ul {
        flex-wrap: wrap;
      }

      .short-itinerary-inner .tabs ul li {
        width: 100%;
        margin: 8px 10px;
        border-bottom: none;
      }

      .short-itinerary-inner .tabs ul li a {
        padding: 10px 7px;
        font-size: 14px;
        width: 100%;
      }

      .short-itinerary-inner .tabs ul li.ui-state-active a {
        padding: 15px 0px;
        font-size: 14px;
        margin-bottom: 0px;
        border-bottom: 1px solid #1e73be;
      }

      .question-bx-cvr-text h2 {
        font-size: 14px;
        margin-right: 23px;
      }

      .question-bx-cvr-text h4 {
        font-size: 15px;
      }

      .question-bx-cvr-text h2:before {
        width: 10px;
        height: 10px;
        left: 43px;
        top: 5px;
      }

      .heading {
        font-size: 27px;
        margin-bottom: 41px;
      }

      .question-bx-cvr:before {
        left: 47px;
        width: 1px;
        border: 1px dashed #b6ddff;
        top: 7px;
      }

      section.img-gallery-magnific {
        flex-wrap: wrap;
      }

      .img-gallery-magnific-inner {
        width: 100% !important;
        padding: 0;
        max-width: 100% !important;
        /* margin-bottom: 5px; */
      }

      .imgbox-md {
        width: 100% !important;
        max-width: 100%;
      }

      .magnific-img-cvr.imgbox-md {
        width: 100% !important;
        max-width: 100% !important;
      }

      .popup-slider-last-part.imgbox-md {
        width: 100% !important;
        max-width: 100% !important;
      }

      .popup-slider-middle-part.imgbox-md>div:first-child img {
        height: calc(100% - 4px);
      }

      .popup-slider-middle-part {
        width: 100%;
        padding: 0;
      }

      .magnific-img-cvr {
        max-width: initial;
        padding: 0;
      }

      .popup-slider-last-part {
        width: 100%;
        padding: 0;
      }

      .popup-slider-last-part .magnific-img a {
        margin-bottom: 0;
      }

      .popup-slider-middle-part>div a {
        padding-bottom: 10px;
      }

      a.image-popup-vertical-fit {
        width: 100%;
        padding-bottom: 4px;
      }

      .inclusions {
        width: 100%;
        margin-bottom: 50px;
      }

      .exclusions {
        width: 100%;
      }

      .best-pricing {
        width: 50%;
      }

      section.travel-experts {
        padding-top: 70px;
        padding-bottom: 0;
      }

      .travel-experts-inner {
        width: 100%;
        margin-bottom: 30px;
      }

      .enquire-form {
        width: 100%;
        position: static;
      }

      .tabs-4-part {
        width: 100%;
      }

      .resort {
        width: 100%;
        padding: 0 35px;
        margin-bottom: 30px;
      }

      .tabs-4-part h2 {
        font-size: 26px;
        text-align: center;
      }

      .enquire-form .banner-form.banner-box {
        padding: 24px;
      }

      button.mfp-close,
      button.mfp-arrow {
        opacity: 1 !important;
      }

      a.register-fix-btn {
        width: 100%;
        justify-content: center;
        right: 0;
        padding: 9px 0;
        background: #1a91f8;
        border-radius: 0;
      }

      .cl-txt label {
        color: #ffffff;
      }

      a.register-fix-btn img {
        max-width: 37px;
        display: none;
      }

      .banner-content h2 {
        font-size: 27px;
        text-align: center;
      }

      .banner-content ul {
        padding-left: 10px;
      }

      .short-itinerary-2 {
        overflow: auto;
      }

      .short-itinerary-inner .tabs ul li.ui-state-active a {
        border-bottom: none;
      }

      .short-itinerary-inner .tabs ul li {
        margin: 8px 0px 0;
        border-bottom: none;
      }

      .short-itinerary-inner .tabs ul li a {
        border: none;
        box-shadow: none;
      }

      .short-itinerary-inner .tabs ul {
        flex-wrap: nowrap;
        width: 1318px;
        border-bottom: 1px solid #1e73be;
      }

      a.image-popup-vertical-fit {
        padding-bottom: 7px !important;
      }

      .popup-slider-middle-part.imgbox-md>div:first-child img {
        height: 100% !important;
      }
    }
  </style>
</head>

<body>

  <!-- header -->
  <header class="header">
    <div class="container">
      <div class="wrapper">
        <div class="logo">
          <a href="javascript:void(0)"><img src="<?php echo base_url() ?>packassets/images/adventourist-logo.png" alt=""></a>
        </div>
        <div class="nav-bar">
          <ul>
            <li><a href="#banner" class="active">Home</a></li>
            <li><a href="#short-itinerary">Itinerary</a></li>
            <li><a href="#gallary-cvr1">Inclusions & Exclusions</a></li>
            <li><a href="#popup-slider">Gallery</a></li>
            <li><a href="#why-adventourist">Why Adventourist? </a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#travel-experts">Talk to us</a></li>
          </ul>
        </div>
        <div class="humberger-menu-cvr">
          <div class="humberger-menu">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- /header -->
  <!-- main -->
  <a href="#!" class="register-fix-btn show-btn">
    <img src="<?php echo base_url() ?>packassets/images/call.png" alt="">
    <div class="cl-txt">
      <label>
        Enquire for Free
      </label>
    </div>
  </a>
  <main>
    <!-- banner -->
    <section class="banner" id="banner">
      <div class="container">
        <div class="wrapper">
          <div class="banner-content banner-box">
            <h2>Leh Bagpacking Trip 6 Nights and 7 Days</h2>
            <ul>
              <li><img src="<?php echo base_url() ?>packassets/images/flag.svg" alt=""><b>Destination:</b> Leh Ladakh </li>
              <li><img src="<?php echo base_url() ?>packassets/images/star.svg" alt=""><b>Trip category:</b> Adventure </li>
              <li><img src="<?php echo base_url() ?>packassets/images/airpalne.svg" alt=""><b>Best time to visit:</b> May - Oct
              </li>
              <li><img src="<?php echo base_url() ?>packassets/images/calender.svg" alt=""><b>Stay days:</b> 6 Nights and 7 Days
              </li>
              <li><img src="<?php echo base_url() ?>packassets/images/tag.svg" alt=""><b>Budget:</b> ₹ 16,499 Per Person onwards
              </li>
              <li><img src="<?php echo base_url() ?>packassets/images/waycheck.svg" alt=""> <b>Suitable for:</b> Friends, Families, Solo Travellers
              </li>
            </ul>
          </div>
          <div class="banner-form banner-box" id="form-3">
            <form class="stay_middle fixed" id="packageform">
              <h3>Enquire for Free</h3>
              <p>Our travel experts will call you, ask all your queries without hesitation.</p>
              <div class="bnr-input-cover">
                <input type="text" name="name" class="theme-input" id="f-name" placeholder="Full Name" required>
              </div>
              <div class="bnr-input-cover">
                <input type="email" name="email" class="theme-input" id="email" placeholder="Email" required>
              </div>
              <div class="bnr-input-cover">
                <input type="tel" name="phone" class="theme-input" placeholder="Mobile no" id="mobile" required>

              </div>
              <div class="bnr-input-cover">
                <select class="form-control" name="package" id="package">
                  <option selected="true" disabled="disabled">Choose Package</option>
                  <option>5N 6D Leh Ladakh</option>
                  <option>6N 7D Leh Ladakh</option>
                  <option>Leh Ladakh Customized</option>
                </select>
              </div>
              <div class="wp-update">
                <input type="checkbox" id="wp" checked><label for="wp">I Agree the Terms &
                  Conditions.</label>
              </div>

              <input type="hidden" id="destination" name="destination" value="<?php echo $destination; ?>" />
              <input type="hidden" id="platform" name="platform" value="<?php echo $platform; ?>" />
              <input type="hidden" id="campaigntype" name="campaigntype" value="<?php echo $ct; ?>" />
              <input type="hidden" id="adgroup" name="adgroup" value="<?php echo $ad; ?>" />
              <button type="button" class="theme-btn" id="savePackage">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /banner -->
    <!-- short-itinerary -->
    <section class="short-itinerary" id="short-itinerary">
      <div class="container">
        <div class="short-itinerary-title">
          <h1>Leh Ladakh 6 Nights and 7 Days - Iternary</h1>
        </div>
        <div class="short-itinerary-inner">
          <div id="tabs" class="tabs">
            <div id="tabs-1">
              <div class="faq-accodian">
                <div class="question-bx-cvr">
                  <div class="wrapper net-cvr active">
                    <div class="question-bx-cvr-text">
                      <h2>Day 1</h2>
                      <h4 class="">Arrive Leh -3505 meters/11567 Feet</h4>
                    </div>
                    <span><img src="<?php echo base_url() ?>packassets/images/arrow.png" alt=""></span>
                  </div>
                  <p class="active" style="display: block;">
                    <span style="display: block; margin-bottom:15px;"><b>Travel Time: 20 Mins</b></span>
                    The journey to paradise starts by arriving at Leh, 3500 meters above sea level. We drive to the hotel and have a wholesome breakfast before 9:30 AM. A half day of rest to start the travel experience with a fresh and zestful mind. A beautiful walk in the evening on the roads of Leh, to absorb the life and culture of the streets. Later in The evening, Explore the Local Market and Visit Shanti Stupa, Post which return to Hotel, Dinner and Overnight In Leh.
                  </p>
                </div>
                <div class="question-bx-cvr">
                  <div class="wrapper net-cvr">
                    <div class="question-bx-cvr-text">
                      <h2>Day 2</h2>
                      <h4>The Real Leh: Local Sightseeing</h4>
                    </div>
                    <span><img src="<?php echo base_url() ?>packassets/images/arrow.png" alt=""></span>
                  </div>
                  <p class="active" style="display: none;"><span style="display: block; margin-bottom:15px;"><b>Travel Time: 4 Hours</b></span>
                    An early start by having breakfast and leaving by 9 AM. Drive to the prestigious Hall of Fame, a museum constructed by the Indian Army and then visit the sacred Spituk Monastery. A beautiful drive towards Magnetic Hill, Pathar Sahib Gurudwara, Hall of Fame, Sham Valley and then to the meeting point of the feisty Zanskar and the Rich Indus ( Sangam Point / Confluence Point). Dinner and Overnight stay at Leh.
                  </p>
                </div>
                <div class="question-bx-cvr">
                  <div class="wrapper net-cvr">
                    <div class="question-bx-cvr-text">
                      <h2>Day 3</h2>
                      <h4 class="">Exploring the tri-armed valley of Nubra</h4>
                    </div>
                    <span><img src="<?php echo base_url() ?>packassets/images/arrow.png" alt=""></span>
                  </div>
                  <p class="active" style="display: none;"><span style="display: block; margin-bottom:15px;"><b>Travel Time: 5 Hours</b></span>
                    After breakfast and a 5-hour drive through the highest motorable road in the world, the Khardungla Pass, we arrive at Nubra, the valley that is surrounded by beautiful villages and tremendous scenery. By afternoon, we arrive at Hunder, take some rest and head towards exploring the villages of the beautiful town of Hunder. Experiencing the district of Diskit and a camel safari through the sand dunes. Dinner and A wholesome stay at the camp.
                  </p>
                </div>
                <div class="question-bx-cvr">
                  <div class="wrapper net-cvr">
                    <div class="question-bx-cvr-text">
                      <h2>Day 4</h2>
                      <h4 class="">Recapturing moments from history: Turtuk</h4>
                    </div>
                    <span><img src="<?php echo base_url() ?>packassets/images/arrow.png" alt=""></span>
                  </div>
                  <p class="active" style="display: none;">
                    <span style="display: block; margin-bottom:15px;"><b>Travel Time: 5 Hours</b></span>
                    Leave early after breakfast at around 8 am for the day excursion to Turtuk The drive from Nubra to Turtuk is one of the most fascinating and prestigious journeys in Ladakh. A less popular destination, recently opened for travelers to witness the spectacular beauty of the valley. This region is controlled mainly by Ladakh Scouts or a rear department of the Indian Army. Baltistan is a beautiful village with the charming people who once slept in Pakistan and woke up in India the next morning.A full day excursion at Turtuk village, back to the camps Dinner and Overnight at the camp in Nubra Valley.

                  </p>
                </div>
                <div class="question-bx-cvr">
                  <div class="wrapper net-cvr">
                    <div class="question-bx-cvr-text">
                      <h2>Day 5</h2>
                      <h4 class="">Pangong Tso Via Shyok River</h4>
                    </div>
                    <span><img src="<?php echo base_url() ?>packassets/images/arrow.png" alt=""></span>
                  </div>
                  <p class="active" style="display: none;"><span style="display: block; margin-bottom:15px;"><b>Travel Time: 6 Hours</b></span>
                    Post breakfast, we drive to Pangong via Shyok valley, a region comprising 2 valleys- Nubra and Shyok. The Nubra joins the Shyok in the region’s heart near Diskit before flowing westwards into Pakistan to eventually join the mighty Indus. Arrive at the highest salt water lake in the world and experience the heights of the lake and let the breeze take in. Dinner and Spend the night at Pangong lake camp.
                  </p>
                </div>
                <div class="question-bx-cvr">
                  <div class="wrapper net-cvr">
                    <div class="question-bx-cvr-text">
                      <h2>Day 6</h2>
                      <h4 class="">Leh Via Chang-La Pass</h4>
                    </div>
                    <span><img src="<?php echo base_url() ?>packassets/images/arrow.png" alt=""></span>
                  </div>
                  <p class="active" style="display: none;"><span style="display: block; margin-bottom:15px;"><b>Travel Time: 5 Hours</b></span>
                    Post Breakfast, Check out from Pangong hotel and drive Towards Leh crossing Chang La Pass, Visit Thiksey Monastery , Shey Palace, A Filmy Visit to the Rancho School, Proceed towards leh, Check in to the hotel. Rest of the day at leisure, Dinner and overnight stay In Leh.
                  </p>
                </div>
                <div class="question-bx-cvr">
                  <div class="wrapper net-cvr">
                    <div class="question-bx-cvr-text">
                      <h2>Day 7</h2>
                      <h4 class="">Depart from Leh</h4>
                    </div>
                    <span><img src="<?php echo base_url() ?>packassets/images/arrow.png" alt=""></span>
                  </div>
                  <p class="active" style="display: none;"><span style="display: block; margin-bottom:15px;"><b>Travel Time: 20 Mins</b></span>
                    Post Breakfast, Check out from the Hotel And Proceed towards Airport for Our Onward Journey. We May Physically Depart But our Hearts will Forever Stay In Leh…
                  </p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /short-itinerary -->
    <!-- gallary-cvr1 -->
    <section class="gallary-cvr1" id="gallary-cvr1" style="background-color:#fff;">
      <div class="container">
        <div class="gallary-cvr">
          <div class="wrapper">
            <div class="inclusions">
              <div class="bag-inclusions">
                <img src="<?php echo base_url() ?>packassets/images/bag.svg" alt="">
              </div>
              <h2>Inclusions</h2>
              <ul>
                <li><img src="<?php echo base_url() ?>packassets/images/dot.png" alt="">Assistance upon arrival and departure.</li>
                <li><img src="<?php echo base_url() ?>packassets/images/dot.png" alt="">Accommodation on double/ Twin/ Triple basis as per itinerary listed above.</li>
                <li><img src="<?php echo base_url() ?>packassets/images/dot.png" alt="">Accommodation on Breakfast and Dinner basis.</li>
                <li><img src="<?php echo base_url() ?>packassets/images/dot.png" alt="">All sightseeing by NON AC Innova/ Xylo / Tempo as per above mentioned.</li>
                <li><img src="<?php echo base_url() ?>packassets/images/dot.png" alt="">Environmental fee.</li>
                <li><img src="<?php echo base_url() ?>packassets/images/dot.png" alt="">Oxygen Cylinder.</li>
                <li><img src="<?php echo base_url() ?>packassets/images/dot.png" alt="">Inner line permit.</li>
              </ul>
            </div>
            <div class="exclusions">
              <div class="exclusions-full">
                <div class="bag-inclusions">
                  <img src="<?php echo base_url() ?>packassets/images/down.svg" alt="">
                </div>
                <h2>Exclusions</h2>
                <ul>
                  <li><img src="<?php echo base_url() ?>packassets/images/dot.png" alt="">Any Sightseeing or excursion that is not mentioned in the itinerary.</li>
                  <li><img src="<?php echo base_url() ?>packassets/images/dot.png" alt="">Monument,Guide, Other Expenses not mentioned in inclusion.</li>
                  <li><img src="<?php echo base_url() ?>packassets/images/dot.png" alt="">Any item of personal requirements, such as drinks, laundry, telephone, etc.</li>
                  <li><img src="<?php echo base_url() ?>packassets/images/dot.png" alt="">Any medical or evacuation expenses.</li>
                  <li><img src="<?php echo base_url() ?>packassets/images/dot.png" alt="">Any expenses occur due to natural climate, security and other unexpected reasons.</li>
                  <li><img src="<?php echo base_url() ?>packassets/images/dot.png" alt="">Any type of insurance- personal, medical, travel etc.</li>
                  <li><img src="<?php echo base_url() ?>packassets/images/dot.png" alt="">Any airfares.</li>
                  <li><img src="<?php echo base_url() ?>packassets/images/dot.png" alt="">Tips.</li>
                  <li><img src="<?php echo base_url() ?>packassets/images/dot.png" alt="">5% GST.</li>
                </ul>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /gallary-cvr1 -->
    <!-- popup-slider -->
    <section class="popup-slider" id="popup-slider">
      <div class="container">
        <div class="popup-slider-text">
          <h1>Gallery</h1>
        </div>

        <p>
        <section class="img-gallery-magnific">
          <div class="img-gallery-magnific-inner imgbox-lg">
            <div class="magnific-img large">
              <a class="image-popup-vertical-fit" href="img/gallery/adventourist-travel.jpg" title="">
                <img src="<?php echo base_url() ?>packassets/images/gallery/adventourist-travel.jpg" alt="adventourist travel" />
                <i class="fa fa-search-plus" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="popup-slider-middle-part imgbox-md">
            <div class="magnific-img medium ">
              <a class="image-popup-vertical-fit" href="img/gallery/leh-ladakh.jpg" title="">
                <img src="<?php echo base_url() ?>packassets/images/gallery/leh-ladakh.jpg" alt="leh ladakh trip" />
                <i class="fa fa-search-plus" aria-hidden="true"></i>
              </a>
            </div>
            <div class="magnific-img medium">
              <a class="image-popup-vertical-fit" href="img/gallery/leh-monastery-tour.jpg" title="">
                <img src="<?php echo base_url() ?>packassets/images/gallery/leh-monastery-tour.jpg" alt="leh monastery tour" />
                <i class="fa fa-search-plus" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="magnific-img-cvr imgbox-md">
            <div class="magnific-img large">
              <a class="image-popup-vertical-fit" href="img/gallery/sham-valley.jpg" title="">
                <img src="<?php echo base_url() ?>packassets/images/gallery/sham-valley.jpg" alt="Sham Valley Trip" />
                <i class="fa fa-search-plus" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="popup-slider-last-part imgbox-md">
            <div class="magnific-img small">
              <a class="image-popup-vertical-fit" href="img/gallery/leh-nubra.jpg" title="">
                <img src="<?php echo base_url() ?>packassets/images/gallery/leh-nubra.jpg" alt="leh nubra trip" />
                <i class="fa fa-search-plus" aria-hidden="true"></i>
              </a>
              <a class="image-popup-vertical-fit" href="img/gallery/leh-family-trip.jpg" title="">
                <img src="<?php echo base_url() ?>packassets/images/gallery/leh-family-trip.jpg" alt="leh family trip" />
                <i class="fa fa-search-plus" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="popup-slider-middle-part imgbox-md">
            <div class="magnific-img medium ">
              <a class="image-popup-vertical-fit" href="img/gallery/leh-trip.jpg" title="">
                <img src="<?php echo base_url() ?>packassets/images/gallery/leh-trip.jpg" alt="leh trip" />
                <i class="fa fa-search-plus" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="popup-slider-middle-part imgbox-md">
            <div class="magnific-img medium ">
              <a class="image-popup-vertical-fit" href="img/gallery/kargil-trip.jpg" title="">
                <img src="<?php echo base_url() ?>packassets/images/gallery/kargil-trip.jpg" alt="kargil trip" />
                <i class="fa fa-search-plus" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="popup-slider-middle-part imgbox-md">
            <div class="magnific-img medium ">
              <a class="image-popup-vertical-fit" href="img/gallery/turtuk.jpg" title="">
                <img src="<?php echo base_url() ?>packassets/images/gallery/turtuk.jpg" alt="Turtuk" />
                <i class="fa fa-search-plus" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="popup-slider-middle-part imgbox-md">
            <div class="magnific-img medium ">
              <a class="image-popup-vertical-fit" href="img/gallery/leh-group-trip.jpg" title="">
                <img src="<?php echo base_url() ?>packassets/images/gallery/leh-group-trip.jpg" alt="leh group trip" />
                <i class="fa fa-search-plus" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="popup-slider-middle-part imgbox-md">
            <div class="magnific-img medium ">
              <a class="image-popup-vertical-fit" href="img/gallery/vacation-to-leh.jpg" title="">
                <img src="<?php echo base_url() ?>packassets/images/gallery/vacation-to-leh.jpg" alt="vacation to leh" />
                <i class="fa fa-search-plus" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </section>
        <div class="clear"></div>
        </p>


      </div>
    </section>
    <!-- why-adventourist -->
    <section class="why-adventourist" id="why-adventourist">
      <div class="container">
        <div class="why-adventourist-text">
          <h2>Why Adventourist?</h2>
        </div>
        <div class="why-adventourist-inner-text">
          <div class="wrapper">
            <div class="best-pricing">
              <img src="<?php echo base_url() ?>packassets/images/rupees-symbol.png" alt="">
              <p>Best pricing</p>
            </div>
            <div class="best-pricing">
              <img src="<?php echo base_url() ?>packassets/images/heart-symbol.png" alt="">
              <p>100% Honest recommendations</p>
            </div>
            <div class="best-pricing">
              <img src="<?php echo base_url() ?>packassets/images/best-symbol.png" alt="">
              <p>Best in class on-ground support</p>
            </div>
            <div class="best-pricing">
              <img src="<?php echo base_url() ?>packassets/images/support-symbol.png" alt="">
              <p>Best itineraries planned by travel experts</p>
            </div>
            <div class="best-pricing">
              <h1 class="h-plus">100 +</h1>
              <p>Trips planned</p>
            </div>
            <div class="best-pricing">
              <img src="<?php echo base_url() ?>packassets/images/5-start.png" alt="">
              <p>Star travel company</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /why-adventourist -->
    <!-- talk-to-expert -->
    <section class="talk-to-expert bg-white">
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
              <a class="clnn" href="#" style="pointer-events: none;">
                <img src="<?php echo base_url() ?>packassets/images/adventourist-google-reviews.webp" class="Google" alt="">
                <p>
                  <img src="<?php echo base_url() ?>packassets/images/star.png" class="star-img" alt=""> <label>4.9</label>
                </p>

              </a>
              <a class="clnn ml-40" href="#" style="pointer-events: none;">
                <img src="<?php echo base_url() ?>packassets/images/adventourist-facebook-reviews.png" class="Google" alt="">
                <p>
                  <img src="<?php echo base_url() ?>packassets/images/star.png" class="star-img" alt=""> <label>5</label>
                </p>
              </a>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- /talk-to-expert -->
    <!-- testimonials -->
    <section class="testimonials" id="testimonials">
      <div class="container">
        <div class="why-adventourist-text">
          <h2>Testimonials</h2>
        </div>
        <div class="testimonials-cvr">
          <div class="wrapper exp-slider">
            <div class="testimonials-inner-text">
              <img src="<?php echo base_url() ?>packassets/images/nilesh-lohade.png" alt="adventourist reviews">
              <div class="star-img">
                <img src="<?php echo base_url() ?>packassets/images/star.png" alt="">
                <img src="<?php echo base_url() ?>packassets/images/star.png" alt="">
                <img src="<?php echo base_url() ?>packassets/images/star.png" alt="">
                <img src="<?php echo base_url() ?>packassets/images/star.png" alt="">
                <img src="<?php echo base_url() ?>packassets/images/star.png" alt="">
              </div>
              <p>This was the first time we connected with Adventourist Travel Company, and I must say it wasn't the feeling of a first timer. Mr. Tejendar and Ms. Kajal were so much co-operative, professional though friendly, and highly available through out our journey to Leh-Ladakh.
                They were always in touch with us, cab drivers, hotel managers, and local company representatives to make sure that things are going smooth for us. They were so accommodating (food arrangement for our kid) that, we didn't face single issue though at few locations we reached late due to traffic. Moreover, they have in person/firsthand experience of locations, so they suggested different food, restaurants, and market places which are really awesome and worthwhile.
                The drivers they have in Leh are so friendly, humble, and most of it very knowledgeable. Though I was visiting the place second time, we got to know so much minute details and history about the places there.
                I won't just recommend Adventourist Travel Company 😜, but insist to give it a shot at least once. I guarantee, you will fall in love with them.😍</p>
              <span>Nilesh Lohade</span>
            </div>
            <div class="testimonials-inner-text">
              <img src="<?php echo base_url() ?>packassets/images/divyam-sharma.png" alt="adventourist reviews">
              <div class="star-img">
                <img src="<?php echo base_url() ?>packassets/images/star.png" alt="">
                <img src="<?php echo base_url() ?>packassets/images/star.png" alt="">
                <img src="<?php echo base_url() ?>packassets/images/star.png" alt="">
                <img src="<?php echo base_url() ?>packassets/images/star.png" alt="">
                <img src="<?php echo base_url() ?>packassets/images/star.png" alt="">
              </div>
              <p>Came across their website while searching for a planner for Leh Ladakh. Was very cautious at the start but as conversations happened with Tejender from their team, I got impressed with their transparent and customer obsessed guidance and suggestions. The best travel I have had with any tour planner yet. My family trip to Leh Ladakh was all well curated, thanks to their insights and on ground connections. Can be tested with 100% confidence which generally is the worry of any travel seeker.</p>
              <span>Divyam Sharma</span>
            </div>
            <div class="testimonials-inner-text">
              <img src="<?php echo base_url() ?>packassets/images/aikata-chahar.png" alt="adventourist reviews">
              <div class="star-img">
                <img src="<?php echo base_url() ?>packassets/images/star.png" alt="">
                <img src="<?php echo base_url() ?>packassets/images/star.png" alt="">
                <img src="<?php echo base_url() ?>packassets/images/star.png" alt="">
                <img src="<?php echo base_url() ?>packassets/images/star.png" alt="">
                <img src="<?php echo base_url() ?>packassets/images/star.png" alt="">
              </div>
              <p>A big thank you to Kajal for arranging an amazing trip for us to Leh Ladakh. We were able to visit few non- touristy places & it was awesome.The driver assigned to us was very cooperative. We are recommending Adventourist to everyone as we were so happy with all the arrangements.</p>
              <span>Aikta Chahar</span>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- /testimonials -->
    <!-- travel-experts-1 -->
    <!-- <section class="travel-experts" id="travel-experts">
      <div class="container">
        <div class="why-adventourist-text">
          <h2>Talk to our travel experts</h2>
        </div>
        <div class="travel-experts-cvr">
          <div class="wrapper exp-slider-1">
            <div class="travel-experts-inner">
              <img src="<?php echo base_url() ?>packassets/images/tejender-singh.jpg" alt="">
              <div class="travel-experts-inner-text">
                <h3>Tejender Singh</h3>
              </div>
            </div>
            <div class="travel-experts-inner">
              <img src="<?php echo base_url() ?>packassets/images/kajal-mewada.jpg" alt="">
              <div class="travel-experts-inner-text">
                <h3>Kajal Mewada</h3>
              </div>
            </div>
            <div class="travel-experts-inner">
              <img src="<?php echo base_url() ?>packassets/images/minal-joshi.jpg" alt="">
              <div class="travel-experts-inner-text">
                <h3>Minal Joshi</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- /travel-experts-1 -->
    <!-- travel-experts -->
    <section class="travel-experts">
      <div class="container">
        <div class="why-adventourist-text">
          <h2>Talk to us now</h2>
        </div>
        <div class="travel-experts-cvr">
          <div class="wrapper">
            <div class="travel-experts-inner">
              <a class="clnn" href="tel:+919930400694">
                <img src="<?php echo base_url() ?>packassets/images/phone.png" alt="">
                <p>+919930400694</p>
              </a>
            </div>
            <div class="travel-experts-inner">
              <a class="clnn" href="https://api.whatsapp.com/send?phone=919930400694&text=Hey%20there%20can%20you%20help%20me%20plan%20my%20trip">
                <img src="<?php echo base_url() ?>packassets/images/whatsapp.png" alt="">
                <p>WhatsApp us now</p>
              </a>
            </div>
            <div class="travel-experts-inner">
              <a class="clnn" href="mailto:support@adventourist.in">
                <img src="<?php echo base_url() ?>packassets/images/email.png" alt="">
                <p class="mb-0">support@adventourist.in</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /travel-experts -->
  </main>
  <!-- /main -->
  <!-- footer -->
  <footer class="footer">
    <p>© Copyright 2023 by Adventourist. All rights Reserved.</p>
  </footer>
  <!-- /footer -->



  <!-- js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <script>
    $(document).scroll(function() {
      let appPosition = $('.short-itinerary').offset().top;
      if ($(this).scrollTop() > 500) {
        $('.show-btn').fadeIn(0.2).css("bottom", "20px");
        if ($(document).width() < 768) {
          $('.show-btn').fadeIn(0.2).css("bottom", "0px");
        }
      } else {
        $('.show-btn').fadeOut().css("bottom", "-50px");
      }
    });

    $('.register-fix-btn').click(function(e) {
      e.preventDefault();
      $(document).scrollTop($('#form-3').offset().top - 165);
    });
    // $('.read-more').click(function () {
    //     $(this).fadeOut("fast");
    //     $('.modal-close-btn').fadeIn('fast');
    //     $(".exclusions-full").css('max-height', '1600px');
    // });
    $('.modal-close-btn').click(function() {
      $(this).fadeOut("fast");
      $('.read-more').fadeIn('fast');
      $(".exclusions-full").css('max-height', '158px');
    });


    $(".nav-bar ul li a").click(function() {
      if ($(document).width() < 768) {
        $('.nav-bar').hide('fast');
        $('.humberger-menu').removeClass('active')
        $('.humberger-menu').show('fast')
      }
      $(".nav-bar ul li a").removeClass("active");
      $(this).addClass("active");
    });
    // Get all sections that have an ID defined
    const sections = document.querySelectorAll("section[id]");
    // Add an event listener listening for scroll
    $(document).scroll(function() {
      let scrollY = window.pageYOffset;
      sections.forEach(current => {
        const sectionHeight = current.offsetHeight;
        const sectionTop = current.offsetTop - 100;
        var sectionId = current.getAttribute("id");
        if (
          scrollY > sectionTop &&
          scrollY <= sectionTop + sectionHeight
        ) {
          document.querySelector("header a[href*=" + sectionId + "]").classList.add("active");
        } else {
          document.querySelector("header a[href*=" + sectionId + "]").classList.remove("active");
        }
      });
    });

    // navbar
    $('.nav-bar li a').click(function(e) {
      e.preventDefault();
      let navTarget = $(this).attr('href');
      if ($(document).width() < 768) {
        $(document).scrollTop($(navTarget).position().top - 60);
      } else {
        $(document).scrollTop($(navTarget).position().top - 70);
      }
    });
    $(function() {
      $("#tabs").tabs();
    });
    $(".nav-bar ul li a").click(function() {
      $(".nav-bar ul li a").removeClass("active");
      $(this).addClass("active");
    });
    $(".humberger-menu").click(function() {
      $('.nav-bar').toggle('fast');
      $(".humberger-menu").toggleClass("active");
    });

    $('.net-cvr').click(function() {
      $(this).next('p').toggle('fast');
      $(this).toggleClass('active');
      $('.net-cvr').not(this).removeClass('active').next('p').hide('fast')
    })

    $(document).ready(function() {
      $('.image-popup-vertical-fit').magnificPopup({
        type: 'image',
        mainClass: 'mfp-with-zoom',
        gallery: {
          enabled: true
        },

        zoom: {
          enabled: true,

          duration: 300, // duration of the effect, in milliseconds
          easing: 'ease-in-out', // CSS transition easing function

          opener: function(openerElement) {

            return openerElement.is('img') ? openerElement : openerElement.find('img');
          }
        }

      });

    });



    $('.exp-slider-1').slick({
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 3,
      autoplay: false,
      variableWidth: false,
      prevArrow: false,
      nextArrow: false,
      dots: true,
      responsive: [{
          breakpoint: 1440,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ],
      change: function(e, ui) {
        alert("hello")
      }
    });

    $('.exp-slider').slick({
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: false,
      nextArrow: false,
      dots: true,
      responsive: [{
          breakpoint: 1440,
          settings: {
            slidesToShow: 1,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 1,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
          }
        }
      ],
      change: function(e, ui) {
        alert("hello")
      }
    });
  </script>
  <script type="text/javascript">
    var base_url = "<?php echo base_url() ?>";
  </script>
  <script src="<?php echo base_url() ?>assets/js/project.js"></script>
</body>

</html>