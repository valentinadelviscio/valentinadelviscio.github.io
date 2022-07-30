<?php
/**
 * Template Name: SportsCentre
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

<div id="paginetta4" class="swup-transition-fade">
   <div id="r-pagina-1">
        <div id="r-colonnasn-1">
                <div id="titolone4">Sports</div>
                <div id="titolonepicci4">Center</div>
                <div id="sottotitolo4">Multi-sports building made with steel trusses</div>
                <div id="testo1sport">
                     <div id="testosport">Designed for training and to host basketball, volleyball, artistic gymnastics and martial arts events.</div>
                     <div id="testosport">The external walls are transparent in the public part and covered in the area reserved for athletes.</div>

                </div>
                

        </div>

        <div id="r-colonnadx-1">
                <div id="img-4-1"></div>
                <div id="img-4-2"></div>
        </div>

   </div>

   <div id="r-pagina-2">
       <div id="r-colonnasn-2">
       <div id="testo2sport">
                     <div id="testosport">The space for artistic gymnastics contains a continuous glass wall overlooking the playing field.</div>
                     <div id="testosport">The visual depth increases and at least one sporting activity can be watched from any spot of the gym.</div>

                </div>

       </div>
       <div id="r-colonnadx-2">
                <div id="img-4-2f"></div>
                <div id="img-4-1f"></div>
                <div id="img-4-0f"></div>
                <div id="img-4-01f"></div>

                <div id="img-4-2s"></div>
                <div id="img-4-1s"></div>
                <div id="img-4-0s"></div>
                <div id="img-4-01s"></div>

                <div id="img-4-2p"></div>
                <div id="img-4-1p"></div>
                <div id="img-4-0p"></div>
                <div id="img-4-01p"></div>
       </div>
        
   </div>

   <div id="r-pagina-3">
         <div id="img-4-3"></div>
        
   </div>

   <div id="partegiu">

                   <a href="/portfolio"><div id="tasto-back-5" onclick="window.location.href = 'portfolio';"></div></a>

                   <div id="lineaportfolio">
                       <div id="lineacubi-a"> 

                               <a href="/woodarcheobox"><button id="cubo01" onclick="window.location.href = 'woodarcheobox';"></button></a>
                               <a href="/sarajevo"><button id="cubo02" onclick="window.location.href = 'sarajevo';"></button></a>
                        </div>

                        <div id="lineacubi-b">
                                <a href="/pabellon"><button id="cubo03" onclick="window.location.href = 'pabellon';"></button></a>
                                <a href="/sports"><button id="cubo040" onclick="window.location.href = 'sports';"></button></a>
                        </div>
                        <div id="lineacubi-c">
                                <a href="/thesisproject"><button id="cubo05" onclick="window.location.href = 'thesisproject';"></button></a>
                                <a href="/otherprojects"><button id="cubo06" onclick="window.location.href = 'otherprojects';"></button></a>
                        </div>   

                   </div>
                </div> 
       
</div>
</section>
<?php
get_footer();
?>