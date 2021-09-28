<?php include("header.php") ?>

<div class="row my-5">
                    <h3 class="fs-4 mb-3">liste des matiere </h3>

              
                <div class="col">
<?php 
require_once("connexionbd.php");  
$sql="SELECT * FROM `matiere` ";
$resultat=mysqli_query($link,$sql);

?>
<table class="table  bg-white rounded shadow-sm  table-hover" >
    <thead>
        <tr>
        <th>id</th>
            <th>nomcours</th>
            <th>lien</th>
            <th>type</th>
    
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
            <td > <?php echo $row['nomcours']; ?> </td>
            <td > <?php echo $row['lien']; ?> </td>
            <td > <?php echo $row['type']; ?> </td>
            
            
            <td> <a href="supprimermatiere.php?supmat=<?php echo $row['id']; ?>"> <i class="fas fa-trash"></i></a> </td>
    <td> <a href="modifiermatiere.php?modmat=<?php echo $row['id']; ?>"> <i class="fas fa-edit"></i></a></td>


        </tr>
    
    </tbody>

                    
<?php  }?>       
</table>             
 </div>
              
         <div class="ajouter">
<a href="ajoutermatiere.php" class="btn btn-danger" > <i class="fas fa-plus"></i></a>
         </div>     
  </div>
<?php include("footer.php") ?>