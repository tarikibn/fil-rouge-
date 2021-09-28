<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Hello, world!</title>

    <style>
body{
  background:url('motagne.jpg');
  background-repeat: no-repeat;
  background-size: cover ;
}

    </style>
  </head>
  <body>
   

<div>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
      <li class="breadcrumb-item"><a href="#">courses</a></li>
      <li class="breadcrumb-item active" aria-current="page">toute catégorie</li>
    </ol>
  </nav>
</div>


<div class="container">
      <!-- <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <h1>brand</h1>
            <div class="list-group-item">
              <label > <input type="checkbox"> bonjour</label>
            </div>
            <div class="list-group-item">
              <label > <input type="checkbox"> bonjour</label>
            </div>
            <div class="list-group-item">
              <label > <input type="checkbox"> bonjour</label>
            </div>
        
        </div>
      </div>
      <div class="col-md-9">
            start carte 
<div class="row">
  <div class="col-md-4">
      <div>
<img src="download.jpg" class="w-100" alt="">
<div>
  <h1>lkkhvkhjhh</h1>
  <div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam a, vel accusantium rerum et magni nostrum quaerat modi ipsum obcaecati corrupti temporibus nesciunt, officia optio repellendus eligendi impedit provident similique!</p>
      <button>sfff</button>
      <button>dfqg</button>
  </div>
</div>
      </div>
     

  </div>
    end  carte
       
    </div>

  </div> -->




<!-- 
xxxx -->
<div class="container-fluid">
<div id="forma">
        <form  class="formlauto"  method="post" action="">
        <input type="text" name="motcle"> 
        <input type="submit" name="btsubmit" value="recherche" >

        </form>

   </div>
 
    <!-- start carte -->
    <br>

<div class="row m-4 d-inline-flex ">
<?php
include_once('connexionbd.php');

if(isset($_POST['btsubmit']))

{
$mc=$_POST['motcle'];
    $sql="SELECT * FROM `cours` WHERE `name` LIKE '%$mc%' ";
}
else
{
    $sql="SELECT * FROM `cours`";

}

$resultat=mysqli_query($link,$sql);
$nbr=mysqli_num_rows($resultat);
echo "<p> le nombre des cours exister .$nbr.</p> ";


while($ligne=mysqli_fetch_assoc($resultat))
{
?>

<div class="card m-3" style="width: 19rem;" data-aos="zoom-out-down">
  <img src="<?php echo $ligne['image'] ;?>" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title text-center"><?php echo $ligne['name'] ;?></h5>
    <p class="card-text"><?php echo $ligne['description'] ;?>.</p>

    <div class="card-footer text-muted">
    <a href="#" class="card-link"><?php echo $ligne['niveaux'] ;?></a>
    <a href="#" class="card-link"><?php echo $ligne['prixcours'] ;?></a>
  </div>
    
  </div>
</div>

  <?php } ?>
</div>

</div>











    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

 
  </body>
</html>