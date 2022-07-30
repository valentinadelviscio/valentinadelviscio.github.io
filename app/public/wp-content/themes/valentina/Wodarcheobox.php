<?php
/**
 * Template Name: WoodArcheoBox
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


<a href="/portfolio">
   <button id="tasto-back" onclick="window.location.href = 'portfolio';">
	</button>
</a>	


<section id="swup">

<div id="paginetta1" class="swup-transition-fade">
     <div id="w-pagina-1">
          <div id="w-colonnasn-1">
               <div id="testo1wood">
                       <div id="titolone1"> Wood Archeo Box</div>
                       <div id="sottotitolo1"> Sustainable pavilion for an archaeological area </div>
                       <div id="testowood"> A reception hall next to the Suasa Archaeological Park (Italy).
                        Designed to offer a top view of the Park and the remains.
                        Wood panels and a garden-roof covering integrate it into the surrounding nature.</div>                
               </div>
          </div>
          <div id="w-colonnadx-1">
                <div id="img-1-1"></div>
          </div>
     </div>

     <div id="w-pagina-2">
          <div id="w-colonnasn-2">
                <div id="img-1-4"></div>
                <div id="testo2wood">
                        <div id="testowood"> The project site is located between two archaeological remains of the Roman age: the amphitheater and the underground theater.
                        A “C”-shaped volume hosts the facilities and encloses a central courtyard overlooking the monuments. </div>
                </div>
                <div id="testo3wood">
                       <div id="pallo3wood">
                       <div id="titoletto1">The Archaeological Park </div>
                       <div id="testowood"> The city of Suasa was built during the Roman age (III cent b.C.). The existing ruins consist of a Roman road, an amphitheater,
                        an underground theater, a trading forum and a patrician house.</div>
                </div></div>
          </div>
          <div id="w-colonnadx-2">
                <div id="img-1-3"></div>
          </div>
     </div>

     <div id="w-pagina-3">
          <div id="w-colonnasn-3">
                <div id="img-1-5"></div>
                <div id="testo5wood">
                       <div id="pallo5wood">
                       <div id="titoletto1"> X-Lam panels </div>
                       <div id="testowood"> Tightened cross wood panels represent a fast and eco-sustainable building dry system. </div>
                </div></div>
          </div>
          <div id="w-colonnadx-3">
                <div id="img-1-2"></div>
                <div id="testo4wood">
                        <div id="testowood"> The most visited areas (in yellow) directly link the internal courtyard with the outside.
                        An event/conference room allows users to animate the site.
                        A dressing room facing the amphitheater eases performers in their shows. </div>
                </div>
                
          </div>
     </div>

               <div id="partegiu">

                   <a href="/portfolio"><div id="tasto-back-5" onclick="window.location.href = 'portfolio';"></div></a>

                   <div id="lineaportfolio">
                       <div id="lineacubi-a"> 

                               <a href="/woodarcheobox"><button id="cubo010" onclick="window.location.href = 'woodarcheobox';"></button></a>
                               <a href="/sarajevo"><button id="cubo02" onclick="window.location.href = 'sarajevo';"></button></a>
                        </div>

                        <div id="lineacubi-b">
                                <a href="/pabellon"><button id="cubo03" onclick="window.location.href = 'pabellon';"></button></a>
                                <a href="/sports"><button id="cubo04" onclick="window.location.href = 'sports';"></button></a>
                        </div>
                        <div id="lineacubi-c">
                                <a href="/thesisproject"><button id="cubo05" onclick="window.location.href = 'thesisproject';"></button></a>
                                <a href="/otherprojects"><button id="cubo06" onclick="window.location.href = 'otherprojects';"></button></a>
                        </div>   

                   </div>
                </div>   
       </div>
  

</div>
</section>

<?php
get_footer();
?>