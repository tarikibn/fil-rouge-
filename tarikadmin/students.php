<?php include("header.php") ?>

<div class="row my-5">
                    <h3 class="fs-4 mb-3">liste des etudient </h3>

              
                <div class="col">
<?php 
require_once("connexionbd.php");  
$sql="SELECT * FROM `etudient`";
$resultat=mysqli_query($link,$sql);

?>
<table class="table  bg-white rounded shadow-sm  table-hover" >
    <thead>
        <tr>
        <th>id</th>
            <th>nom etudient</th>
            <th>prenom </th>
            <th>email</th>
            <th>password</th>	
            <th>image</th>
            <th>supprimez </th>
     <th>modifier</th>
          
        </tr>
    </thead>
    <tbody>
    <?php 
while($row=mysqli_fetch_assoc($resultat))
{
?>
        <tr>
              <td> <?php echo $row['id']; ?> </td>
            <td > <?php echo $row['nom']; ?> </td>
            <td > <?php echo $row['prenom']; ?> </td>
            <td > <?php echo $row['email']; ?> </td>
            <td > <?php echo $row['pass']; ?> </td>
            <td > <?php echo $row['image']; ?> </td>
            <td> <a href="supprimerstudent.php?supetu=<?php echo $row['id']; ?>"> <i class="fas fa-trash"></i></a> </td>
    <td> <a href="modifierstudent.php?modetu=<?php echo $row['id']; ?>"> <i class="fas fa-edit"></i></a></td>


        </tr>
    
    </tbody>

                    
<?php  }?>       
</table>             
 </div>
              
 <div class="ajouter">
<a href="ajouterstudent.php" class="btn btn-danger" > <i class="fas fa-plus"></i></a>
         </div>     
  </div>
<?php include("footer.php") ?>