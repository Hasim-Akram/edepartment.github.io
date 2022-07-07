<?php 

	include 'functions.php';


	$ddata = $_GET['id'];




	$obj = new edep;


	$obj -> deleteoffice($ddata);

	header("location:emp_detail.php");






?>