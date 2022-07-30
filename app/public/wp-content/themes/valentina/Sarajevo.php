<?php
/**
 * Template Name: Sarajevo
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
<div id="paginetta2" class="swup-transition-fade">

   <div id="s-pagina-1">
       
       <div id="s-colonnasn-1">
            <div id="testo1sara">
                <div id="titolone2"> <div id="titolonepicci2"> Sarajevo</div> Study Hall </div>
                <div id="sottotitolo2"> Space for students in the new University Campus </div>
                <div id="testosara"> The study hall is placed on one of the main crossroads of the Campus. </div>
                <div id="testosara">It houses a street on the ground and hosts glass bridges on the upper floor to recreate a suspended unique space.</div>
                <div id="testosara">The building is part of a multi-team project and its structure has been continuously readapted to fit with
                the neighboring designs.</div>
            </div>
       </div>
       <div id="img-2-1"></div>

   </div>

   <div id="s-pagina-2">
        <div id="s-colonnasn-2">
            <div id="testo2sara">
                <div id="testosara"> Each type of study requires  different levels of concentration and/or interaction, as well as
                an available proper space.</div>
                <div id="testosara">The interior design begins with the research of the most suitable furniture for each request.</div>
            </div> 
            <div id="divisione-13">
                        <div id="sottotitolo2-13">review</div>
                        <div id="testosara">A flight of steps 
                        also usable
                        as extra sits</div>
                        
                </div>
            <div id="img-2-13"></div>
        </div>

        <div id="s-colonnadx-2">
            <div id="s-colsn">
                <div id="divisione">
                        <div id="img-2-5"></div>
                        <div id="titolello">
                           <div id="sottotitolo2-a">front pairs</div>
                           <div id="testosara">To share ideas
                            with  classmates</div>
                        </div>

                </div>
                <div id="divisione">
                        <div id="img-2-6"></div>
                        <div id="titolello">
                           <div id="sottotitolo2-b">circular</div>
                           <div id="testosara">For face-to-face
                           meetings</div>
                        </div>
                </div>
                <div id="divisione">
                        <div id="img-2-7"></div>
                        <div id="titolello">  
                           <div id="sottotitolo2-c">suspended</div>
                           <div id="testosara">To lose the contact with the ground</div>
                        </div>
                </div>
                <div id="divisione">
                        <div id="img-2-8"></div>
                        <div id="titolello">  
                           <div id="sottotitolo2-d">panoramic</div>
                           <div id="testosara">For the creativity
                           flow</div>
                        </div>
                    
                </div>

            </div>
            <div id="s-coldx">
                <div id="divisione">
                        <div id="img-2-9"></div>
                        <div id="titolello"> 
                           <div id="sottotitolo2-e">outdoor</div>
                           <div id="testosara">To relax the mind
                           in the fresh air</div>
                        </div>
                </div>
                <div id="divisione">
                        <div id="img-2-10"></div>
                        <div id="titolello">
                           <div id="sottotitolo2-f">silent</div>
                           <div id="testosara">For absolute quiet
                            needs</div>
                        </div>
    
                </div>
                <div id="divisione">
                        <div id="img-2-11"></div>
                        <div id="titolello">
                           <div id="sottotitolo2-g">solitary</div>
                           <div id="testosara">To keep yourself
                           focused</div>
                        </div>
                </div>
                <div id="divisione">
                        <div id="img-2-12"></div>
                        <div id="titolello">
                           <div id="sottotitolo2-h">aloud</div>
                           <div id="testosara">For free
                            brainstormings</div>
                        </div>
    
                </div>
                
            </div>

        </div>
   </div>


   <div id="s-pagina-3">
              <div id="img-2-2"></div>
              <div id="img-2-3"></div>
              <div id="img-2-2a"></div>

   </div>

   <div id="s-pagina-4">
        <div id="s-colonnasn-3">
            <div id="testo3sara">
                <div id="testosara"> The internal glass-doors system is designed to isolate classrooms and silent areas.</div>
                <div id="testosara">The external concrete covering calls to mind the pattern of the crumpled paper.</div>
           </div>
        </div>   
        <div id="img-2-4"></div> 
   </div>





   <div id="partegiu">

                   <a href="/portfolio"><div id="tasto-back-5" onclick="window.location.href = 'portfolio';"></div></a>

                   <div id="lineaportfolio">
                       <div id="lineacubi-a"> 

                               <a href="/woodarcheobox"><button id="cubo01" onclick="window.location.href = 'woodarcheobox';"></button></a>
                               <a href="/sarajevo"><button id="cubo020" onclick="window.location.href = 'sarajevo';"></button></a>
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
</section>
<?php
get_footer();
?>