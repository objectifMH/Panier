<?php session_start();
include('PanierHeader.php');



// $mail = 'weaponsb@mail.fr'; // Déclaration de l'adresse de destination.
// if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
// {
// 	$passage_ligne = "\r\n";
// }
// else
// {
// 	$passage_ligne = "\n";
// }
// //=====Déclaration des messages au format texte et au format HTML.
// $message_txt = "Salut à tous, voici un e-mail envoyé par un script PHP.";
// $message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</body></html>";
// //==========
 
// //=====Création de la boundary
// $boundary = "-----=".md5(rand());
// //==========
 
// //=====Définition du sujet.
// $sujet = "Hey mon ami !";
// //=========
 
// //=====Création du header de l'e-mail.
// $header = "From: \"WeaponsB\"<weaponsb@mail.fr>".$passage_ligne;
// $header.= "Reply-to: \"WeaponsB\" <weaponsb@mail.fr>".$passage_ligne;
// $header.= "MIME-Version: 1.0".$passage_ligne;
// $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
// //==========
 
// //=====Création du message.
// $message = $passage_ligne."--".$boundary.$passage_ligne;
// //=====Ajout du message au format texte.
// $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
// $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
// $message.= $passage_ligne.$message_txt.$passage_ligne;
// //==========
// $message.= $passage_ligne."--".$boundary.$passage_ligne;
// //=====Ajout du message au format HTML
// $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
// $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
// $message.= $passage_ligne.$message_html.$passage_ligne;
// //==========
// $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
// $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
// //==========
 
// //=====Envoi de l'e-mail.
// mail($mail,$sujet,$message,$header);
// //==========
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




<?php 

include('PanierFooter.php');
?>