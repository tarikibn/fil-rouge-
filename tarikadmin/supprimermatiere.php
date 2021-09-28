
<?php 

require_once("connexionbd.php");

if(isset($_GET['supmat']))
{
    $delete=$_GET['supmat'];
 
$sql="DELETE FROM matiere WHERE id='$delete' ";
  
 $resultat=mysqli_query($link,$sql);
    if($resultat)
    {
echo "bien supprimez";
    }else
    {
        echo " n'est pas supprimez";
    }
}


?>  