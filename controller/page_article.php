<?php
require "Model/article.php";

$id_a = $_GET['id_a'];


$articles = displayArticle($id_a); 

require "View/page_article.php";
?>


					if(isset($_POST['submit']) )
                    {   
                        $date = date("Y-m-d H:i:s");
                        $texte = $_POST['message'];
                        $requete = $bdd->query("INSERT INTO message(contenu,id_u,id_a,dateenvoie) VALUES ('".$texte."',$id ,$id_a,'".$date."')"); 
                        header('Location:article.php?id=".id_a."');
                    }
            
                
                
                 echo"<form method='post' action='#' class='decale'>																	
					
					<textarea id='ckeditor' name='message' ></textarea>
                    <input type=submit name=submit >
					</form>
					
					<script src='http://cdn.ckeditor.com/4.5.11/basic/ckeditor.js'></script>
					<script> CKEDITOR.replace('ckeditor'); </script>";
				