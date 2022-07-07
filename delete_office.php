<?php 

	include 'functions.php';


	$offdata = $_GET['id'];




	$obj = new edep;


	$obj -> officedelete($offdata);

	header("location:office_detail.php");






?>