<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<title>CottonWood Compost</title>
		
		<meta charset="utf-8"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="main.css" type="text/css"/>
		<link rel="stylesheet" href="products.css" type="text/css"/>
		<link rel="stylesheet" href="bootstrap.css"/>
		<!-- Latest compiled and minified CSS -->
		<!--link rel="stylesheet" href="normalize.css"/-->
		<script src="http://code.jquery.com/jquery-1.11.2.js"></script>
		<script src="main.js"></script>
		<script src="sliderengine/amazingslider.js"></script>
	    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
	    <script src="sliderengine/initslider-1.js"></script>

		
		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'/>
		<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'/>


</head>
<body>
<?php include 'menubar.php' ?>
	

<!-- END OF MENUBAR============================================================================ -->
<video autoplay loop>

	<source src="video.mov" />
	<source src="video.webm"/>
</video>
<div class="vid-layer">
</div>


<!-- ==== Sections begin ==== -->
<section id="sectionOneProducts">

<h1 id="mainHeading" style="font-size:32px"></h1>
<script src="externalscripts/typed.js"></script>
<script>
  $(function(){
      $("#mainHeading").typed({
        strings: ["With Cottonwood Compost", "Reinforce your Soil"],
        typeSpeed: 0
      }).queue();
  });
</script>

</section>
<section id="sectionTwoProducts">
<div class="sectionHeading">
<h1>Compost</h1>
<h3 id="thirdHeading">What makes it all happen?</h3>
</div>

	<div class="row">
	<div class="col-md-6">
	<ul class="list-ingredients pull-left" id="listOne">		
			<li class="pushIn" id="actinomycetes">Actinomycetes</li>			
		
			<li class="pushIn" id="fungi">Fungi</li>
				
		
			<li class="pushIn" id="rotifers">Rotifers</li>
		
			<li class="pushIn" id="oxygen">Oxygen</li>
	
			<li class="pushIn" id="nutrients">Nutrients</li>
	</ul>
	</div>
	<div class="col-md-6">
	<ul class="list-ingredients" id="listTwo">
			<li class="pushIn" id="bacteria">Bacteria</li>
			<li class="pushIn" id="protozoa">Protozoa</li>
			<li class="pushIn" id="humus">Humus</li>
			<li class="pushIn" id="c-nratio">C:N Ratio</li>
			<li class="pushIn" id="temperature">Temperature</li>	

	</ul>
	</div>
	<script>
	$(document).ready(function(){
		$("#listOne").fadeIn('slow');
		$("#listTwo").fadeIn('slow');
	});
	</script>
</div>

	<div class="row" id="rowForDescriptionDivs">

		<div class= "col-md-8" id="descriptionDivIngredients">

		<h3 style="margin:15% 0 0 10%">Click on the above components to discover more about them</h3>

		</div>
	</div>

	<script type="text/javascript">

		$(document).ready(function(){
			$("#actinomycetes").click(function(){
				$("#descriptionDivIngredients").toggleClass('fade-in-wow')
				.html("<p> In composting, they play an important role in degrading complex organics such as cellulose, lignin, chitin, and proteins. Chemically able to break down debris such as woody stems, bark, or newspaper.</p>");
				$("#pictureDescript").attr("src", "images/products/actinomycetes.png").animate({marginLeft:'0', opacity:'1' , easing:'easeInBounce'},2000);
			});
		});
			$("#bacteria").click(function(){
				$("#descriptionDivIngredients").toggleClass('fade-in-wow')
				.html("<p>At 45 - 70C temperatures, beneficial thermophilic bacteria thrive, while many bacterial pathogens and weed seeds are killed, being very beneficial to commercially important crops (e.g., wheat, peppers, tomato, okra).</p>");
				$("#pictureDescript").attr("src", "images/products/bacteria.png").animate({marginLeft:'0', opacity:'1' , easing:'easeInBounce'},2000);
			});
			$("#fungi").click(function(){
				$("#descriptionDivIngredients").toggleClass('fade-in-wow')
				.html("<p>being molds and yeasts, they are responsible for decomposition of complex plant polymers and compost.<br/>Important because they break down tough debris, enabling bacteria to continue decomposition process once most cellulose is gone.<br/>Attacks organic residues that are too dry, acidic, or low in nitrogen for bacteria decomposition<br/>Fungi classified as saprophytes and in compost they form strict aerobes that grow both as unseen filaments and as grey or white fuzzy colonies on compost surface.</p>");
				$("#pictureDescript").attr("src", "images/products/fungi.png").animate({marginLeft:'0', opacity:'1' , easing:'easeInBounce'},2000);
			});
			$("#protozoa").click(function(){
				$("#descriptionDivIngredients").toggleClass('fade-in-wow')
				.html("<p>One celled microscopic animals that live in water droplets of compost, obtaining food from organic matter and consumers of ingesting bacteria and fungi.</p>");
				$("#pictureDescript").attr("src", "images/products/protozoa.png").animate({marginLeft:'0', opacity:'1' , easing:'easeInBounce'},2000);
			});
			$("#rotifers").click(function(){
				$("#descriptionDivIngredients").toggleClass('fade-in-wow')
				.html("<p>Microscopic multicellular organisms found in films of water in compost, feed an organic matter and also found on feed on bacteria and fungi.</p>");
				$("#pictureDescript").attr("src", "images/products/rotifers.png").animate({marginLeft:'0', opacity:'1' , easing:'easeInBounce'},2000);
			});
			$("#humus").click(function(){
				$("#descriptionDivIngredients").toggleClass('fade-in-wow')
				.html("<p>Maintaining C:N ratios prevents the development of foul odor nitrogenous gases as well as making the breakdown of complex organic molecules possible.  <em>Humic acid</em> is one of the many byproducts which provides binding sites for cations, replacing H+ ions at a slightly higher <em>pH</em>.  It’s for this reason that compost can be beneficial for amending soils by increasing <em>Cation Exchange Capacity<em> and adding nutrients.</p>");
				$("#pictureDescript").attr("src", "images/products/humus.png").animate({marginLeft:'0', opacity:'1' , easing:'easeInBounce'},2000);
			});
			$("#oxygen").click(function(){
				$("#descriptionDivIngredients").toggleClass('fade-in-wow')
				.html("<p>Oxygen is necessary for bacterial respiration that drives the composting process, occurring in open air piles called windrows.  All bacteria and fungi are living organisms and need oxygen, defining them aerobic.</p>");
				$("#pictureDescript").attr("src", "images/products/oxygen.png").animate({marginLeft:'0', opacity:'1' , easing:'easeInBounce'},2000);
			});
			$("#c-nratio").click(function(){
				$("#descriptionDivIngredients").toggleClass('fade-in-wow')
				.html("<p>Organisms that decompose organic matter use carbon as a source of energy and nitrogen for building cell structure.  They need more carbon than nitrogen.  If there is too much carbon, decomposition slows when the nitrogen is used up and some organisms die.  Other organisms form new cell material using their stored nitrogen.  In the process more carbon is burned, Thus the amount of carbon is reduced while nitrogen is recycled.  Decomposition takes longer, however, when the initial C:N ratio is much above 30.</p>");
				$("#pictureDescript").attr("src", "images/products/c-nratio.png").animate({marginLeft:'0', opacity:'1' , easing:'easeInBounce'},2000);
			});
			$("#nutrients").click(function(){
				$("#descriptionDivIngredients").toggleClass('fade-in-wow')
				.html("<p>The feedstock used is the primary determinant of the composition and physical and chemical properties of the final compost.  The feedstock and its composting process dictate the available nutrients, and texture of the produced compost.</p>");
				$("#pictureDescript").attr("src", "images/products/nutrients.png").animate({marginLeft:'0', opacity:'1' , easing:'easeInBounce'},2000);
			});
			$("#temperature").click(function(){
				$("#descriptionDivIngredients").toggleClass('fade-in-wow')
				.html("<p>At temperatures rising above 40<sup>0</sup>C the mesophilic microorganisms become less active and are replaced by those who are thermophilic, or heat loving.  At temperatures of 55<sup>0</sup>C and above, many microorganisms that are human or plant pathogens are destroyed.  Because temperatures over 65C kill many forms of microbes and limit the rate of decomposition, which gives reason to reduce heat levels with the aerobic tactics.  High temperatures accelerate the breakdown of proteins, fats, and carbohydrates like cellulose and hemicellulose and as supply of these high energy compounds is exhausted, the temperature gradually decreases. </p>");
				$("#pictureDescript").attr("src", "images/products/temperature.png").animate({marginLeft:'0', opacity:'1' , easing:'easeInBounce'},2000);
			});




		

	</script>
<!--
=================
Gallery Code
========================================-->
<div id="imageDiv">

<img id="pictureDescript" src="images/products/actinomycetes.png" class=""img-responsive/>

</div>

<!-- ==================================
=============================================================
-->

</section>





<!-- ==== Sections End ==== -->
<!--footer-->
<?php include ('footer.php') ?>
<!-- End footer -->

<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script source="js/jquery.zaccordion.js" type="text/javascript"></script>
</body>
</html>