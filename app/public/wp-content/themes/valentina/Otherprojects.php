<?php
/**
 * Template Name: Otherprojects
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

<div id="paginetta6" class="swup-transition-fade">
       
      <div id="o-pagina-1">
               <div id="o-colonna-1">
                    <div id="o-subject"> social </div>
                    <div id="o-title"> @ischitellansays </div>
                    <div id="o-date"> may 2020 - jun 2020 </div>
                    <div id="o-text"> Funny experiment of attributing distorted meanings to dialect words. Targeted for Ischitella’s people </div>
                    <div id="img-6-1"></div>
               </div>

               <div id="o-colonna-2">
                    <div id="o-subject">board games</div>
                    <div id="o-title-w">Wargano</div>
                    <div id="o-date-w">2016 - in progress</div>
                        <div id="o-textcolumn">
                             <div id="o-text-w">Game inspired by  the classic Risk and set on the Gargano promontory in the southern Italy.
                              </div> 
                             <div id="o-text-w">The game rules have been readapted on the new territory. The geographic area has been completely rearranged to fit with the goals of each player. </div>  
                        </div>
                    <div id="img-6-2"></div>
               </div>

               <div id="o-colonna-3">
                    <div id="o-subject">rebranding</div>
                    <div id="o-title">Cotino di Ròino</div>
                    <div id="o-date">mar 2022</div>
                    <div id="o-text">Packaging and labeling of locally produced extra-virgin olive oil cans</div>
                    <div id="img-6-3"></div>
               </div>

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
                                <a href="/sports"><button id="cubo04" onclick="window.location.href = 'sports';"></button></a>
                        </div>
                        <div id="lineacubi-c">
                                <a href="/thesisproject"><button id="cubo05" onclick="window.location.href = 'thesisproject';"></button></a>
                                <a href="/otherprojects"><button id="cubo060" onclick="window.location.href = 'otherprojects';"></button></a>
                        </div>   

                   </div>
                </div> 
       
</div>
</section>

<?php
get_footer();
?>