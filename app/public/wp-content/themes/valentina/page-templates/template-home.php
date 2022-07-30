<?php
/**
 * Template Name: Template: Home
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

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body onload="document.body.classList.add('loaded')">

<section id="swup" class="swup-transition-fade home-buttons">
  <div id="bottone-1">
   <a href="/curriculum" class="button1 bouncy">
      <button id="curro" onclick="window.location.href = 'curriculum';" 
          style="background-image:url\(<?php echo get_template_directory_uri();?>/img/cube-1.svg">
      </button>
     </a> 
  </div>
  <div id="text-1" style="background-image:url\(<?php echo get_template_directory_uri();?>/img/text-curriculum.svg">
  </div>
  
  
 <div id="bottone-2">
   <a href="/portfolio" class="button1 bouncy">
     <button id="porto" onclick="window.location.href = 'portfolio';" 
       style="background-image:url\(<?php echo get_template_directory_uri();?>/img/cube-1.svg">
      </button>
    </a>
    
  </div>
  <div id="text-2" style="background-image:url\(<?php echo get_template_directory_uri();?>/img/text-portfolio.svg">
  </div>

</section>

</div>

</div>


<?php
get_footer();
?>


