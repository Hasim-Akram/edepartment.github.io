<?php 



	include 'functions.php';


	$depdeldata = $_GET['id'];




	$obj = new edep;


	$obj -> deletedep($depdeldata);

	header("location:dep_detail.php");






?>