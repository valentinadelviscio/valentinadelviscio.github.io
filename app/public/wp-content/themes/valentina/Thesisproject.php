<?php
/**
 * Template Name: Thesisproject
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

<div id="paginetta5" class="swup-transition-fade">

      <div id="t-pagina-1">

             <div id="t-colonnasn-1">
                  <div id="testo1tesi">
                      <div id="titolonepicci5">Redrawing</div>
                      <div id="titolone5">the way home</div>
                       <div id="sottotitolo5">Conserving the landscape character of Ischitella</div>
                       <div id="testotesi">A 4K-inhabitants town built in XIII century on the Gargano promontory is currently facing
                         a critical situation.</div>
                       <div id="testotesi">Too many cars along a few roads and no alternatives to drive around.</div>
                       <div id="testotesi">The realization of a new suburban road, quite far from the downtown, returns public space and pathways to pedestrians.</div>
                  </div>
             </div>

             <div id="t-colonnacentro-1">
                
                      <div id="img-5-1"></div>
                
             </div>

             <div id="t-colonnadx-1">
                      <div id="t-palloncino">
                            
                            <div id="testo2tesi">
                                  <div id="titoletto5a">Too many vehicles</div>
                                  <div id="testotesi">Ischitella is nestled on a quiet and woody hill but it returns a destorted self-image of noise, traffic and air pollution.
                                        Walking around is messy and complicated, and this made inhabitants get used to take the wheel even when unnecessary.</div>
                             </div>
                       </div>
             </div>
      </div>


      <div id="t-pagina-2">
             <div id="t-colonnasn-2">                 
                 <div id="testo3tesi">
                      <div id="titoletto5">Current status</div>
                      <div id="testotesi">The town has a unique focal point composed of a main square and an uphill boulevard.</div>
                      <div id="testotesi">The boulevard hosts most of the shops and the trading activities, thus often resulting in traffic jams.</div>
                      <div id="testotesi">The overuse of vehicles also threatens the integrity of the historical character of the town.</div>
                 </div>
             </div>

             <div id="t-colonnacentro-2">
                <div id="img-5-2"></div>
             </div>

              <div id="t-colonnadx-2">
                       <div id="t-legenda">
                           <div id="casetta1"></div><div id="testocasetta">HISTORICAL BUILDINGS</div>
                            <div id="casetta2"></div><div id="testocasetta">SCHOOLS</div>
                            <div id="casetta3"></div><div id="testocasetta">CHURCHES</div>
                            <div id="casetta4"></div><div id="testocasetta">CITY HALL</div>
                       </div>

                      <div id="t-palloncino">
                                  <div id="testo4tesi">
                                  <div id="titoletto5a">A roaller coaster</div>
                                  <div id="testotesi">Despite the double choice a car driver has to move from B to A, there is currently only one way back to B from A.
                                    Intervention is necessary to balance the vehicles circulation.</div>
                             </div>
                       </div>
              </div>
      </div>




      <div id="t-pagina-3">
                <div id="t-colonnasn-3">
                        <div id="testo5tesi">
                           <div id="titoletto5">Strategy</div>
                           <div id="testotesi">A new road to connect the B-point with a new C-point.</div>
                           <div id="testotesi">Roundabouts on the A-B-C points enable a continuous and non-invasive driving throughout the town.</div>
                      </div>
                </div>

                <div id="t-colonnacentro-3">
                    <div id="img-5-3"></div>
                </div>

                <div id="t-colonnadx-3">
                       <div id="t-palloncino">                            
                            <div id="testo6tesi">
                                  <div id="titoletto5a">Where to hide cars?</div>
                                  <div id="testotesi">In new parking areas placed at the entrances of the town (in yellow).
                                        People will leave their own cars and reach the downtown by walking.
                                        A car-free boulevard will both improve the shopping time and help counteracting pollution. </div>
                             </div>
                       </div>
                </div>
        
      </div>

      <div id="t-pagina-4">
             
            <div id="t-palloncino1">
                             <div id="titoletto5">Ischitella, 2021</div>
            </div>

            

            <div id="t-palloncino2">
                        <div id="testo7tesi">
                                    <div id="testotesi">The sidewalks are used as parking lots and pedestrians spill out onto the carriageway.
                                     Walking is as unpleasant as driving.
                                     </div>
                        </div>
                      
            </div>

             
      </div>

      <div id="t-pagina-5">
                     <div id="t-palloncino3">
                             <div id="titoletto5">Ischitella, 2077</div>
                      </div>

                    
                     <div id="t-palloncino4">
                             <div id="testo8tesi">
                                    <div id="testotesi">Cars travelling outside return well-being and a more human dimension to the inside. </div>
                              </div>
                      </div>
    </div>


      <div id="t-pagina-6">
              <div id="img-5-6"></div>        
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
                                <a href="/thesisproject"><button id="cubo050" onclick="window.location.href = 'thesisproject';"></button></a>
                                <a href="/otherprojects"><button id="cubo06" onclick="window.location.href = 'otherprojects';"></button></a>
                        </div>   

                   </div>
                </div> 
       
</div>

</section>

<?php
get_footer();
?>