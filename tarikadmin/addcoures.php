<?php 
include("header.php") ;
require_once("connexionbd.php");
?>




<div class="container   ">
<h3 class="fs-4 mb-3">modifier des coures </h3>
            <form class="form-horizontal " role="form" method="post" action="" enctype="multipart/form-data">
         
                <div class="form-group">
                    <label >nom du cours</label>
                    <div class="col-sm-9">
                    <input type="text"  class="form-control"  name="name"  required  >
                    </div>
                </div>
                <div class="form-group">
                    <label >Description du cours</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control"  name="description" required>
                    </div>
                </div>
                <div class="form-group">
                    <label >auteur </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name= "auteur" required>
                    </div>
                </div>
                <div class="form-group">
                    <label >duration du cours</label>
                    <div class="col-sm-9">
                        <input type="text"  class="form-control" name="duration">
                    </div>
                </div>

                <div class="form-group col-sm-9 ">
                  <label for="">langue</label>
                  <select class="form-control" name="langue" >
                      <option value="">-- ---</option>
                    <option value="arabe">arabe</option>
                    <option value="francais">francais</option>
                  
                  </select>
                </div>
                <div class="form-group col-sm-9 ">
                  <label for=""> niveau apprendre </label>
                  <select class="form-control" name="niveau" >
                      <option value="">-- select---</option>
                    <option value="debutant">debutant </option>
                    <option value="intermédiaire">intermédiaire</option>
                    <option value="avancer">avancer</option>
                  </select>
                </div>
                <div class="form-group col-sm-9 ">
                  <label for=""> prix d'apprentissage </label>
                  <select class="form-control" name="prix" >
                      <option value="">--select ---</option>
                    <option value="gratuit">gratuit </option>
                    <option value="paiement">paiement</option>
                  </select>
                </div>
            
                <div class="form-group">
                    <label >prix de cours</label>
                    <div class="col-sm-9">
                    <input type="text"   class="form-control" name="prixcours">
                    </div>
                </div>
              
                <div class="form-group">
                    <label >image du cours</label>
                    <div class="col-sm-9">
                    <input type="file"   class="form-control" name="image">
                    </div>
                </div>
               
              
                <input class="btn btn-danger" type="submit" name="btajouter" value="ajouter">
             
                <a href="coures.php" class="btn btn-danger"> fermez</a>
               


            </form> <!-- /form -->

            <?php
              if(isset($_POST['btajouter']))
              {
              
                $nom=$_POST['name'];
                $desc=$_POST['description'];
                $ecriture=$_POST['auteur']; 
                $dure=$_POST['duration'];
                $lag=$_POST['langue'];
                $niv=$_POST['niveau'];
                $choixprix=$_POST['prix'];
                $monie=$_POST['prixcours'];
                $phot=$_FILES['image']['tmp_name'];
                $traget="../".$_FILES['image']['name'];
                move_uploaded_file($phot,$traget);

$sql="INSERT INTO cours(name,description,auteur,image,duration,langue,niveaux,prix,prixcours) VALUES ('".$nom."','".$desc."','".$ecriture."','".$traget."','".$dure."','".$lag."','".$niv."','".$choixprix."','".$monie."')";             
 $resultat=mysqli_query($link,$sql);
                 if($resultat)
                 {
                     echo "bien ajouter";
                 }
                 else
                 {
                     echo "n'est pas ajouter";
                 }
              }
           ?>

    
        </div> <!-- ./container -->


      




<?php include("footer.php") ?>