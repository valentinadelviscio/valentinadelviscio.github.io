<?php
/**
 * Template Name: Pabellon
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

<div id="paginetta3" class="swup-transition-fade">

       <div id="p-pagina-1">
              <div id="p-colonnasn-1">
                     <div id="titolone3">Pabellòn</div>
                     <div id="img-3-1"></div>
                     <div id=sottotitolo3>Modular pavilion for a Valèncian Museum</div>
                     <div id=testo1pabe>
                           <div id=testopabe>The Museum of Modern Arts yearly promotes a competition for the creation of the entrance pavilion.</div>
                           <div id=testopabe>The project consist of an internal colored area of iridescent glass with different light reflections.</div>
                     </div>
              </div>


              <div id="p-colonnadx-1">
                  <div id="img-3-2"></div>
                  <div id="riflessioni1"></div>
             </div>
       </div>
       

       <div id="p-pagina-2">
              <div id="p-colonnasn-2">
                       <div id="testo2pabe"> 
                             <div id="testopabe">A “fluid” environment made of rigid, linear and “angular” steel and glass cubes.</div>
                             <div id="testopabe">The perception of the space is modified by iridescence.</div>
                             <div id="testopabe">Extra-physical features make the receptive pavilion extremely visible.</div>
                       </div>
                       <div id="img-3-3"></div>
              </div>


              <div id="p-colonnadx-2">
                       <div id="img-3-4"></div>
                       <div id="riflessioni2"></div>
              </div>
       </div>

       <div id="p-pagina-3">

             <div id="p-colonnasn-3">
                        
                        <div id="testo3pabe">
                                <div id="titoletto3">What is iridescence?</div>
                                <div id="testopabe">An optical property not linked to the object but dependent only on the human eye.
                                        This ever-changing element provides a fluid experience and helps escaping the reality.
                                </div>
                        </div>
                       

                       <div id="primostep">
                           <div id="step1"></div>
                           <div id="step2"></div>

                        </div>
             </div>
        
             <div id="p-colonnadx-3">
                     <div id="secondostep">
                           <div id="step3"></div>
                           <div id="step4"></div>

                        </div>
                        <div id="terzostep">
                           <div id="step5"></div>
                           <div id="step6"></div>
                           <div id="step7"></div>

                        </div>
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
             <a href="/pabellon"><button id="cubo030" onclick="window.location.href = 'pabellon';"></button></a>
             <a href="/sports"><button id="cubo04" onclick="window.location.href = 'sports';"></button></a>
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