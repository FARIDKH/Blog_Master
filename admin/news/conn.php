<?php 

include "db.php";
$insertNews = new Database('localhost','root','','blog');

$insertNews->insert_news($_POST['text']);


header ("Location:create.php");

?>