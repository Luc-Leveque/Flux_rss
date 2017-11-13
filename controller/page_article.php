<?php
require "Model/article.php";

$id_a = $_GET['id_a'];


$articles = displayArticle($id_a); 

require "View/page_article.php";
?>