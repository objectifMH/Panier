<?php session_start();
include('PanierHeader.php');
if ( !isset($_SESSION['prix']))
{

	$_SESSION['article']="";
	$_SESSION['prix']=0;
}
?>

<style>
.carousel-page
{
	width:100%;
	height:400px;
	background-color:darkcyan;
	color:white;
}
</style>
<div id="my_carousel" class="carousel slide" data-ride="carousel">
<!-- Bulles -->
	<ol class="carousel-indicators">
		<li data-target="#my_carousel" data-slide-to="0" class="active"></li>
		<li data-target="#my_carousel" data-slide-to="1"></li>
		<li data-target="#my_carousel" data-slide-to="2"></li>
	</ol>
<!-- Slides -->
<div class="carousel-inner">
<!-- Page 1 -->
<div class="item active">  
<div class="carousel-page">
	<img src="assets/psg-maillot-exterieur-17.jpg" class="img-responsive" style="margin:0px auto;" />
</div> 
<div class="carousel-caption"> 1 </div>
</div>   
<!-- Page 2 -->
<div class="item"> 
	<div class="carousel-page">
		<img src="assets/psg-short-exterieur-17.jpg" class="img-responsive img-rounded" style="margin:0px auto;"  />
	</div> 
<div class="carousel-caption"> 2 </div>
</div>  
<!-- Page 3 -->
<div class="item">  
<div class="carousel-page">
	<img src="assets/psg-tech-pant-17.jpg" class="img-responsive img-rounded" 
style="margin:0px auto;max-height:100%;"  />
</div>  
<div class="carousel-caption"> 3 </div>
</div>     
</div>
<!-- Contrôles -->
	<a class="left carousel-control" href="#my_carousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#my_carousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
</div>
<nav>
		<a href="article1.php"><img class="imgNav" src="assets/psg-maillot-exterieur-17.jpg"></a>
		<a href="article2.php"><img class="imgNav" src="assets/psg-short-exterieur-17.jpg"></a>
		<a href="article3.php"><img class="imgNav" src="assets/psg-tech-pant-17.jpg"></a>
		<a href="article4.php"><img class="imgNav" src="assets/psg-maillot-domicile-17.jpg"></a>
		<a href="article5.php"><img class="imgNav" src="assets/psg-minikit-jr-17.jpg"></a>
	</nav>
	<main>

<?php 
include('PanierFooter.php');
?>