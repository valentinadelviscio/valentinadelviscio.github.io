<?php
/**
 * Template Name: Curriculum
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 * 
 */// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<head>
<script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
<script defer src="./js/scripts.js"></script>
<script defer src="./js/swup.min.js"></script>
<script src="./js/SwupPreloadPlugin.js"></script>
</head>

<body onload="document.body.classList.add('loaded')">
<?php
get_header();
?>



<a href="/home">
   <button id="tasto-back" onclick="window.location.href = 'home';">
	</button>
</a>	

<section id="swup">



<div id="organizz" class="swup-transition-fade">

<div id="paginacv">
 <div id="colonnatempo"></div>

 <div id="colonnascritte">
        <div id="commento1">
        Currently studying languages to get certifications soon and learning CSS as self-taught to bring my passion for design worldwide
        </div>
        <div id="laurea">
            <div id="soggetto">
                <div id="cosa"> Master’s Degree in Architecture </div>
                <div id="dove">University of Ferrara</div>
            </div>
            <div id="logo1"></div>

        </div>
        <div id="commento2"> 
          Architecture made me passionate of graphic representation. 
          Elaborating projects makes me live peacefully. 
        </div>
        <div id="trainee">
            <div id="soggetto">
                <div id="cosa">Internship</div>
                <div id="dove">L. Bergamini Architect</div>

            </div>
            

        </div>
        <div id="commento3"> 
        Team-working for a landscape Architecture competition in which
        i improved my photoediting skills
        </div>
        <div id="erasmus">
            <div id="soggetto">
                <div id="cosa">Erasmus+ Programme</div>
                <div id="dove">Universitat Politècnica de València</div>
            </div>
            <div id="logo2"></div>

        </div>
        <div id="commento4"> 
            Here i learn to work in multi-cultural teams and i took Design classes 
            which started to get me passionate about communication.
        </div>
        <div id="maturita">
                 <div id="soggetto">
                    <div id="cosa">Scientific High School Diploma</div>
                </div>
        </div>
    </div>


</div>


<div id="paginaskills">
<div id="skills1">
    <div id="col1">
        <div id="soft-ai"> 
            <div id="logo-ai"></div>
            <div id="text"> Adobe Illustrator</div>
        </div>

        <div id="soft-ps"> 
            <div id="logo-ps"></div>
            <div id="text"> Adobe Photoshop</div>
        </div>

        <div id="soft-id"> 
            <div id="logo-id"></div>
            <div id="text"> Adobe InDesign</div>
        </div>
    </div>
    <div id="col2">
        <div id="soft-xd"> 
            <div id="logo-xd"></div>
            <div id="text"> Adobe Xd</div>
        </div>

        <div id="soft-cs"> 
            <div id="logo-cs"></div>
            <div id="text"> HTML and CSS </div>
        </div>

        <div id="soft-wp"> 
            <div id="logo-wp"></div>
            <div id="text"> Wordpress </div>
        </div>
        
        
    </div>
    
</div>


<div id="skills2">
    <div id="col3">
       <div id="soft-sk"> 
            <div id="logo-sk"></div>
            <div id="text"> Sketchup </div>
        </div>

        <div id="soft-au"> 
            <div id="logo-au"></div>
            <div id="text"> AutoCad </div>
        </div>

        <div id="soft-re"> 
            <div id="logo-re"></div>
            <div id="text"> Revit </div>
        </div>


    </div>

    <div id="col4">
       <div id="text-ita"> 
            ITALIANO
        </div>

        <div id="text-eng"> 
            ENGLISH
        </div>

        <div id="text-esp"> 
          ESPAÑOL
        </div>
        
    </div>

</div>
</div>
<div id="paginafine">

    <div id="tasto-back-1" onclick="window.location.href ='home';"> </div>    

    <div id="contact-me">
        <div id="text"> Contact me!</div>
        
        <div id="tasto-back-2" onclick="window.location.href = 'contact';"> </div>
    </div>
   
   <a href="/contact">
   <div id="boxino" onclick="window.location.href = 'contact';">
      <div id="open-box"></div>
      <div id="cover-box"></div>
      
    </div></a>



</div>


</section>
</html>


<script type="text/javascript"></script>



</body>

<?php
get_footer();
?>