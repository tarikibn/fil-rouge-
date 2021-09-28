
<?php 

require_once("connexionbd.php");

if(isset($_GET['supcar']))
{
    $delete=$_GET['supcar'];
$sql="DELETE FROM cours WHERE id='$delete' ";
  
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