<?php 
 
require_once("header.php"); 

?>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">profile </button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">mon apprentissage</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <?php require_once("connexiondb.php"); 
  

    $sql="SELECT * FROM etudient where nom='".$_SESSION['motnom']."' ";
    $resultat=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($resultat);
    ?>  

<div class="col-lg-9 text-center p-5 my-5 display-4">
  
 <?php echo "votre nom :".$row['nom']; ?> <br>
 <?php echo "votre prenom: ".$row['prenom']; ?><br>
 <?php echo "votre email:".$row['email']; ?><br>


</div>





  </div>
  <div class="tab-pane fade " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  <?php require_once("connexiondb.php"); 
    $sqle="SELECT * FROM cours";
    $resultate=mysqli_query($link,$sqle);
    $rows=mysqli_fetch_assoc($resultate);
    ?> 
<div class="container">
  <div  class="mt-5 px-3">
  <div class="card" style="width: 18rem;">
  <img src="<?php echo $rows['image'];  ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $rows['name']; ?></h5>
    <p class="card-text"><?php echo $rows['description']; ?></p>
    <a href="courses.php" class="btn btn-primary">début</a>
  </div>
</div>


  </div>
</div>


  </div>
</div>


<?php require_once("footer.php");  ?>