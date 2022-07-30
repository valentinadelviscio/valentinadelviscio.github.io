<?php
/**
 * Template Name: Portfolio main page
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
   
   
  
<section id="swup" class="swup-transition-fade">

   <a href="/home">
   <button id="tasto-back" onclick="window.location.href = 'home';">
	</button></a>		
	
   

    <div id="incolonnamento">
        <div id="primacolonna">
            <div id="prog1">
              <a href="/woodarcheobox" id="ccubo1">
              <button id="cubo1" onclick="window.location.href = 'woodarcheobox';"></button></a>
              
              <div id="scritte-1">
                  <div id="titolo-a"> WoodArcheoBox </div>
                  <div id="linea-a"></div>
                  <div id="scritta-a"> Castelleone di Suasa 2017</div>
               </div>
            </div>
            <div id="prog2">
                <a href="/sarajevo" id="ccubo2">
                <button id="cubo2" onclick="window.location.href = 'sarajevo';"></button></a>
                <div id="scritte-2">
                  <div id="titolo-a"> Study Hall </div>
                  <div id="linea-a"></div>
                  <div id="scritta-a"> Sarajevo 2018</div>
               </div>
                

            </div>
            <div id="prog3">
                <a href="/pabellon" id="ccubo3">
                <button id="cubo3" onclick="window.location.href = 'pabellon';"></button></a>
                <div id="scritte-3">
                  <div id="titolo-a"> Pabellòn Iridiscente </div>
                  <div id="linea-a"></div>
                  <div id="scritta-a"> València 2019 </div>
               </div>
                

         </div>
            

        </div>
        <div id="secondacolonna">
        <div id="prog4">
                <a href="/sports" id="ccubo4">
                <button id="cubo4" onclick="window.location.href = 'sports';"></button></a>
                <div id="scritte-4">
                  <div id="titolo-b"> Sports Centre </div>
                  <div id="linea-b"></div>
                  <div id="scritta-b"> Calderara di Reno 2020 </div>
               </div>
                

            </div>
            <div id="prog5">
                <a href="/thesisproject" id="ccubo5">
                <button id="cubo5" onclick="window.location.href = 'thesisproject';"></button></a>
                <div id="scritte-5">
                  <div id="titolo-b"> The way home </div>
                  <div id="linea-b"></div>
                  <div id="scritta-b"> Ischitella 2021 </div>
               </div>
                

            </div>
            <div id="prog6">
                <a href="/otherprojects" id="ccubo6">
                <button id="cubo6" onclick="window.location.href = 'otherprojects';"></button></a>
                <div id="scritte-6">
                  <div id="titolo-b"> Other projects </div>
                  <div id="linea-b"></div>
                  <div id="scritta-b"> 2015 since now :) </div>
               </div>
                

            </div>

        </div>

    </div>
   <button id="tasto-back" onclick="window.location.href = 'home';">
	</button>
    
 
 </div>
 </div>
</section>
</html>




<?php
get_footer();
?>
