<?php 
session_start();
session_destroy();

header("Location: products_index.php");
die;
