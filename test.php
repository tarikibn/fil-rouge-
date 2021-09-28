<?php  

//database_connection.php

$connect = new PDO("mysql:host=localhost;dbname=tarik", "root", "");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css">
    <title>Document</title>

</head>
<body>

<div class="container">
<div class="row">

      <div class="col-md-3">
      <div class="list-group">
					<h3>Price</h3>
					<input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="65000" />
                    <p id="price_show">1000 - 65000</p>
                    <div id="price_range"></div>
                </div>
          <div class="list-group">
            <h1>prix</h1>
           
<?php 
$query="SELECT DISTINCT(prix) FROM cours where statas='0' ORDER BY id desc";
$statement=$connect->prepare($query);
$statement->execute();
$result=$statement->fetchAll();
foreach($result as $row)
{
  ?>  
 <div class="list-group-item checkbox">
 <label><input type="checkbox" class="common_selector brand" value="<?php echo $row['prix']; ?>"  > <?php echo $row['prix']; ?></label>
 </div>
<?php
}
?>

        
          
        </div>
        <div class="list-group">
            <h1>niveau</h1>
           
<?php 
$query="SELECT DISTINCT `niveaux` FROM `cours` where statas='1'  ORDER BY `id`";
$statement=$connect->prepare($query);
$statement->execute();
$result=$statement->fetchAll();
foreach($result as $row)
{
  ?>  
 <div class="list-group-item checkbox">
 <label><input type="checkbox" class="common_selector niveau" value="<?php echo $row['niveaux']; ?>"  > <?php echo $row['niveaux']; ?></label>
 </div>
<?php
}
?>

        
          
        </div>
        <!-- 3 -->
        <div class="list-group">
            <h1>langue</h1>
           
<?php 
$query="SELECT DISTINCT `langue` FROM `cours` where statas='1'  ORDER BY id desc";
$statement=$connect->prepare($query);
$statement->execute();
$result=$statement->fetchAll();
foreach($result as $row)
{
  ?>  
 <div class="list-group-item checkbox">
 <label><input type="checkbox" class="common_selector langue" value="<?php echo $row['langue']; ?>"  > <?php echo $row['langue']; ?></label>
 </div>
<?php
}
?>

        
          
        </div>

      </div>
      <div class="col-md-9">
            	<br />
                <div class="row filter_data">

                </div>
                
            </div>
</div>


</div>

</style>

<style>
#loading
{
	text-align:center; 
	background: url('loader.gif') no-repeat center; 
	height: 150px;
}
</style>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var brand = get_filter('prix');
        var ram = get_filter('niveau');
        var storage = get_filter('langue');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action,prix:prix,niveau:niveau,langue:langue},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:1000,
        max:65000,
        values:[1000, 65000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>