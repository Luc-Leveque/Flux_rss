<?php
require "Model/article.php";

$id_a = $_GET['id_a'];

if(isset($_SESSION['id_u'])){
    
    $id_u = $_SESSION['id_u'];
}

$articles = displayArticle($id_a); 

require "View/page_article.php";


if(isset($_POST['submit']) )
{   
    $contenu = $_POST['message'];

    commenter($id_u ,$id_a ,$contenu) ;
 
    header("Location:index?page=page_article&id_a=$id_a");
    
}

if(isset($_SESSION['id_u'])){
    
    $id_u = $_SESSION['id_u'];

    echo"<form method='post' action='#' class='decale'>																	

    <textarea id='ckeditor' name='message' ></textarea>
    <input type=submit name=submit >
    </form>

    <script src='http://cdn.ckeditor.com/4.5.11/basic/ckeditor.js'></script>
    <script> CKEDITOR.replace('ckeditor'); </script>";

}
?>

				