<?php
session_start();

if(isset($_SESSION)) {
		session_destroy();

		//header("location:miniJeu.php");
		header("location:PanierIndex.php");
		//echo 'session détruite';
	}
?>