<?php 
include("header.php") ;

require_once('connexionbd.php');

?>


<div class="container   ">
<h3 class="fs-4 mb-3">modifier les etudients </h3>
            <form class="form-horizontal " role="form" method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                    <label >id matiere</label>
                    <div class="col-sm-9">
                    <input type="text"  class="form-control"  name="id" value="<?php echo $_GET['modetu'];?>" readonly >
                    </div>
                </div>
                <div class="form-group">
                    <label >	nom</label>
                    <div class="col-sm-9">
                    <input type="text"  class="form-control"  name="name"  required  >
                    </div>
                </div>
                <div class="form-group">
                    <label >prenom </label>
                    <div class="col-sm-9">
                    <input type="text"  class="form-control"  name="prenom"  required  >
                    </div>
                </div>
                <div class="form-group">
                    <label >email </label>
                    <div class="col-sm-9">
                    <input type="text"  class="form-control"  name="email"  required  >
                    </div>
                </div>
                <div class="form-group">
                    <label >mot de passe</label>
                    <div class="col-sm-9">
                    <input type="text"  class="form-control"  name="password"  required  >
                    </div>
                </div>
             

                <div class="form-group">
                    <label >phpto</label>
                    <div class="col-sm-9">
                    <input type="file"   class="form-control" name="photo">
                    </div>
                </div>
               
              
                <input class="btn btn-danger" type="submit" name="btnmod" value="modifier">
             
                <a href="students.php" class="btn btn-danger"> fermez</a>
               


            </form> <!-- /form -->


    
        </div> <!-- ./container -->



<?php
              if(isset($_POST['btnmod']))
              {
                $id=$_POST['id'];
                $nom=$_POST['name'];       
                $prenom=$_POST['prenom'];
                $emails=$_POST['email'];
                $pass=$_POST['password'];
            
                $lien=$_GET['modetu'];
                $vide=$_FILES['photo']['tmp_name'];
                $traget="../".$_FILES['photo']['name'];
                move_uploaded_file($vide,$traget);
                $sql="UPDATE etudient SET id='$id',nom='$nom',prenom='$prenom',email='$emails',pass='$pass',image='$traget' WHERE id=' $lien'";
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