<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>Todo list</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <nav>
		<h1>Todolist</h1>
	</nav>
	<div id="float_btn">
		<img src="assets/images/add.png" width="50px" height="50px">
	</div>
	<main>
<?php
    require "php/view/modal_create.php";
?>