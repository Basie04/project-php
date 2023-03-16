<?php 
session_start();
session_destroy();

$location = $_GET['from'];
header('Location: ' . $location . '_index.php');
die;
