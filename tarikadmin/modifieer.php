<?php 
include("header.php") ;

require_once('connexionbd.php');

?>

<form action=""  method="post" enctype="multipart/form-data">
<h1> update novlle  </h1>
id : <input type="text" name="imm" value="<?php echo $_GET['mod'];?>" readonly ><br>
nom du cours : <input type="text" name="marque" required ><br>
Description du cours <input type="text" name="pl" required  ><br>
auteur <input type="text" name="auto" required  ><br>
duration du cours <input type="text" name="dure" required  ><br>
langue: <select name="langue" id=""><br>
    <option value="arabe">arabe</option>
    <option value="fralncais">fralncais</option>
</select>

niveau: <select name="niveau" id=""><br>
    <option value="debut">debut</option>
    <option value="inter">inter</option>
    <option value="avance">avance</option>
</select>
prix: <select name="prix" id=""><br>
    <option value="gratuit">gratuit </option>
    <option value="paienet">paienet</option>
</select>

prix de cours : <input type="text" name="prixcours" required ><br>


phpto : <input type="file" name="phot"  required  ><br>
<input type="submit" name="btnmod" value="ajouter">


<p><a href="tableaudebord.php"> tableau de bord</a></p>

</form>




<?php
if(isset($_POST['btnmod']))
{
    $id=$_POST['imm'];
    $nomducours=$_POST['marque'];
    $Descriptionducours=$_POST['pl'];
    $auteurs=$_POST['auto'];
    $durationducours=$_POST['dure'];
    $lang=$_POST['langue'];
    $niv=$_POST['niveau'];
    $pri=$_POST['prix'];
    $prixdecours=$_POST['prixcours'];
    $lien=$_GET['mod'];
    $image=$_FILES['phot']['tmp_name'];
    $traget="../".$_FILES['phot']['name'];
    move_uploaded_file($image,$traget);
  $sql=" UPDATE cours SET id='$id',name='$nomducours',description='$Descriptionducours',auteur='$auteurs',image='$traget',duration='$durationducours',langue='$lang',niveaux='$niv',prix='$pri',prixcours='$prixdecours' WHERE id='$lien'";
  $resultat=mysqli_query($link,$sql);
  
  
  if($resultat)
  {
      echo "bien modifier";
  }
  else
  {
      echo "n'est pas modifier";
  }
  
}
?>




<?php include("footer.php") ?>