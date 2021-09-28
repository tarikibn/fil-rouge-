
<?php 

require_once("connexionbd.php");

if(isset($_GET['supetu']))
{
    $delete=$_GET['supetu'];
 
$sql="DELETE FROM `etudient` WHERE id='$delete' ";
  
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