<?php
	try
	{
		$bdd = new PDO("mysql:host=localhost;dbname=rss;charset=utf8","root","");
	
	}
    catch(Exeption $e)
	{
		die("erreur de connection");
	}

?>