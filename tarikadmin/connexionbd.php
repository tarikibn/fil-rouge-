<?php 
$link=mysqli_connect('localhost','root','','tarik');
echo"";

// check les erreues 
if($link=== false)
{
    die("erreur de base de donnes ".mysqli_connect_error());
    echo "erreur";
}


?>