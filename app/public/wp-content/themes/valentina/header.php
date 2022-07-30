<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type');
$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>

<link rel="stylesheet" type="text/css" href="style.css">

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700&display=swap" rel="stylesheet">
	<script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
    <script src="./js/scripts.js"></script>
    <script defer src="./js/swup.min.js"></script>
  <script src="./js/SwupPreloadPlugin.js"></script>
	<?php wp_head(); ?>

</head>

<body onload="document.body.classList.add('loaded')">
<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<div class="top-bar">

  <!-- ******************* The Navbar Area ******************* -->
	
	<div class="info-contact"> 
		<a href="/home" class="transition-fade">
		<button class="name-surname" onclick="window.location.href = 'home';">
			Valentina Del Viscio
	
		</button></a>
	</div>
  
	<div class="dropdown">
	 <input id="hamburger" data-toggle="dropdown" type="button" 
	      style="background-image:url\(<?php echo get_template_directory_uri();?>/img/minebars.svg">
	 </input>
	 <ul class="dropdown-menu" class="transition-fade fade-in">
         <a href="/curriculum" onclick="window.location.href = 'curriculum';">CURRICULUM</a>
         <a href="/portfolio" onclick="window.location.href = 'portfolio';">PORTFOLIO</a>
         <a href="/contact" onclick="window.location.href = 'contact';">CONTACT ME</a>
	 </ul>
          



	</div>
	
	
</div>



</body>

<script type="text/javascript"></script>
<script>
    const swup = new Swup({
      // when this option is enabled, swup disables browser native scroll control (sets scrollRestoration to manual) and takes over this task. 
      // This means that position of scroll on previous page(s) is not preserved (but can be implemented manually based on use case). 
      // Otherwise swup scrolls to top/#element on popstate as it does with normal browsing.
      animateHistoryBrowsing: false,
      // animation selector
      animationSelector: '[class*="transition-"]',
      // defines link elements that will trigger the transition
      linkSelector: 'a[href^="' + window.location.origin + '"]:not([data-no-swup]), a[href^="/"]:not([data-no-swup]), a[href^="#"]:not([data-no-swup])',
      // stores previously loaded contents of the pages in memory
      cache: true,
      // default container(s)
      containers: ['#swup'],
      // request headers
      requestHeaders: {
        'X-Requested-With': 'swup',
        Accept: 'text/html, application/xhtml+xml'
      },
      // enable/disable plugins
      // see below
      plugins: [],
      // skips popState handling when using other tools manipulating the browser history
      skipPopStateHandling: function skipPopStateHandling(event) {
        return !(event.state && event.state.source === 'swup');
      }
})
</script>