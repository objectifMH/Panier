<?php session_start();
include('PanierHeader.php');
echo "<br> get : ";
	print_r($_GET);
	echo "<br> session : ";
	print_r($_SESSION);

if (isset($_SESSION) or 
	$_SESSION['article']!= "" or 
	$_SESSION['prix']!= ""  or
	isset($_SESSION['article']) or 
	isset($_SESSION['prix']) 

	)
{
	$articles = explode(" ", $_SESSION['article']);
	echo "<br>";
	echo $_SESSION['article'];
	echo "<br>";
	print_r($articles);
	echo "<div class='affPanier'>";
		echo "<table>";
	foreach ($articles as $key => $value) {
		echo "<tr><td>$value</td></tr>";
	}

	echo "</table>";
	
	echo " article(s) : ".$_SESSION['article'];
	echo " prix : ".$_SESSION['prix'];
	echo "</div>";
}
?>




<?php 

include('PanierFooter.php');
?>