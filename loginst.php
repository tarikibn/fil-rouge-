
<!DOCTYPE html>
<html>
    
<head>
	<title>My Awesome Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="stylelogin.css">
</head>
<!--Coded with love by Mutiullah Samim-->

    

<body>
	<div class="container h-100">
	<div class="loginb">
    <div class="row">
            <div class="col-lg-6">
<img src="ana.png" class="w-100" alt="">
            </div>
            <div class="col-lg-6">
            <div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="Recommendation.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form  action="" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="txtlogin" class="form-control input_user" value="" placeholder="username">
						</div>

						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="txtpw" class="form-control input_pass" value="" placeholder="password">
						</div>
					
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="btnsubmit" class="btn login_btn">Login</button>
				   </div>


                   <?php require_once('connexionbd.php');
                    
                    if(isset($_POST['btnsubmit']))
                    {
                      $nom=$_POST['txtlogin'];
                      $pass=$_POST['txtpw'];
                     
                      $sql=" SELECT * FROM `etudient` WHERE `nom`='$nom' AND `pass`='$pass'";
                  
                      if($resulat=mysqli_query($link,$sql))
                      {
                    $row=mysqli_fetch_assoc($resulat);
                        if($row !=0)
                        {
                          session_start();
                          $_SESSION['motnom']=$_POST['txtlogin'];
                          header("location:./user/users.php");
                        }
                        else{
                          echo ' <p style=" color: #F2F2F2;"> le mot de passe ou nom invalid</p>';
                        }
                      }
                    
                    }
                                     
                    
                    
                    ?>
					</form>

                
				</div>
		
			
			</div>
		</div>
            </div>
        </div>
    </div>
	</div>
</body>
</html>


