<?php session_start();
include('PanierHeader.php');
echo "<br> get : ";
	print_r($_GET);
	echo "<br> session : ";
	print_r($_SESSION);


if (isset($_GET['article']))
{
	$article = $_GET['article'];

}
else{
	$article="";
}

if (isset($_GET['prix']))
{
	$prix = $_GET['prix'];

}
else{
	$prix=0;
}


if (  $article
	or $prix
	or isset($_SESSION['article'])
	
	or ($_SESSION['article'] != "")
	
	
	 ) 
	//or $_GET['article']!=""
	
{
	$_SESSION['article'] .= " ".
	$article;
	$_SESSION['prix'] +=
	$prix;
	echo "<br> get : ";
	print_r($_GET);
	echo "<br> session : ";
	print_r($_SESSION);
}
?>
	
	<div class="containerArticle">	
		<img class="" src="assets/Mjaune.jpg">
		<div class="containerTextDroite">
			<p class="pArticle"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ratione pariatur aperiam suscipit architecto expedita voluptatibus eligendi laborum nihil, aspernatur consequuntur.</p>
			
			<p class="pPrixArticle"> <input type="number" name="qtite" min="1" max="20" placeholder="1">70£</p>
			<a id="AjoutPan" href="article1.php?article=article1&prix=70">Ajouter au panier</a>
		</div>
	</div>

<?php 
include('PanierFooter.php');
?>