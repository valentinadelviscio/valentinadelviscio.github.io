<?php
/**
 * Template Name: Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 * 
 */// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?php
get_header();
?>
<head>
<script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
<script defer src="./js/scripts.js"></script>
<script defer src="./js/swup.min.js"></script>
<script src="./js/SwupPreloadPlugin.js"></script>
</head>

<body onload="document.body.classList.add('loaded')">

<a href="/curriculum">
   <button id="tasto-back" onclick="window.location.href = 'curriculum';">
	</button>
</a>	

<section id="swup">

<div id="paginettacontact" class="swup-transition-fade">

   <div id="contact-me-frame">

    <div id="upper-contact">
               <div id="myinfo">
              
              <div id="birthday">17/05/1996</div>
              <div id="address"> P.zza Garibaldi 17 - 71010 Ischitella, Italy </div>
              <div id="telephone">+39 3473496059</div>
              <div id="gmail">valentinadelviscio@gmail.com</div>
              <div id="linkedin">linkedin.com/in/valentinadelviscio</div>

          </div>

    </div>






    <div id="lower-contact">
       <div id="tasto-back-3" onclick="window.location.href = 'curriculum';"></div>
       <div id="text">Watch my portfolio!</div>

       <div id="tasto-back-4" onclick="window.location.href = 'portfolio';"></div>
       <a href="/portfolio">
       <div id="boxino" onclick="window.location.href = 'portfolio';">
          <div id="open-box"></div>
          <div id="cover-box"></div>
         </div></a>

    </div>



   </div>

</div>

</section>

<?php
get_footer();
?>