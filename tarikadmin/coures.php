<?php include("header.php") ?>

<div class="row my-5">
                    <h3 class="fs-4 mb-3">liste des coures </h3>

              
                <div class="col">
<?php 
require_once("connexionbd.php");  
$sql="SELECT * FROM `cours` ";
$resultat=mysqli_query($link,$sql);

?>
<table class="table  bg-white rounded shadow-sm  table-hover" >
    <thead>
        <tr>
        <th>id</th>
            <th>name</th>
            <th>description</th>
            <th>auteur</th>
            <th>image</th>
            <th>duration</th>
            <th>langue</th>
            <th>niveaux</th>
            <th>prix</th>
            <th>prixcours</th>
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
            <td > <?php echo $row['name']; ?> </td>
            <td > <?php echo $row['description']; ?> </td>
            <td > <?php echo $row['auteur']; ?> </td>
            <td><img  style="width:110px; height:60px ;   "  src="<?php echo $row['image'];?>" alt=""> </td>
            <td > <?php echo $row['duration']; ?> </td>
            <td > <?php echo $row['langue']; ?> </td>
            <td > <?php echo $row['niveaux']; ?> </td>
            <td > <?php echo $row['prix']; ?> </td>
            <td > <?php echo $row['prixcours']; ?> </td>
            <td> <a href="supprimer.php?supcar=<?php echo $row['id']; ?>"> <i class="fas fa-trash"></i></a> </td>
    <td> <a href="modifier.php?mod=<?php echo $row['id']; ?>"> <i class="fas fa-edit"></i></a></td>


        </tr>
    
    </tbody>

                    
<?php  }?>       
</table>             
 </div>
              
         <div class="ajouter">
<a href="addcoures.php " class="btn btn-danger" > <i class="fas fa-plus"></i></a>
         </div>     
  </div>
<?php include("footer.php") ?>