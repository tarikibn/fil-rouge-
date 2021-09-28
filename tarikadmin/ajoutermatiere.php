<?php 
include("header.php") ;
require_once("connexionbd.php");
?>





<div class="container   ">
<h3 class="fs-4 mb-3">modifier des matire </h3>
            <form class="form-horizontal " role="form" method="post" action="" enctype="multipart/form-data">
         
                <div class="form-group">
                    <label >nom du matiere</label>
                    <div class="col-sm-9">
                    <input type="text"  class="form-control"  name="name"  required  >
                    </div>
                </div>
        
             

                <div class="form-group col-sm-9 ">
                  <label for="">type </label>
                  <select class="form-control" name="type" >
                      <option value="">-- ---</option>
                    <option value="arabe">scientifique</option>
                    <option value="francais">programmation </option>
                  
                  </select>
                </div>
            
            
              
                <div class="form-group">
                    <label >lien de video</label>
                    <div class="col-sm-9">
                    <input type="file"   class="form-control" name="video">
                    </div>
                </div>
               
              
                <input class="btn btn-danger" type="submit" name="btnmod" value="ajouter">
             
                <a href="matiere.php" class="btn btn-danger"> fermez</a>
               


            </form> <!-- /form -->


    
        </div> <!-- ./container -->



<?php
              if(isset($_POST['btnmod']))
              {
             
                $nom=$_POST['name'];       
                $types=$_POST['type'];
        
                $vide=$_FILES['video']['tmp_name'];
                $traget="videos/".$_FILES['video']['name'];
                move_uploaded_file($vide,$traget);
$sql="INSERT INTO matiere(nomcours, lien,type) VALUES ('".$nom."','".$traget."','".$types."')";
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




<?php include("footer.php") ?>