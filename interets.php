<?php   
 session_start();       
  ?>
<?php
  if(isset($_POST['pass'])){

	$_SESSION["inter_re"]=1;
	
	/*******************POUR VERIFIER L'age si C'EST PLUS QUE 8ANS***********************/
	
	if($_POST['pass']==$_POST['Confirm_pass']){

	$_SESSION["email"]=$_POST['email']; 	
	$_SESSION["pass"]=$_POST['pass']; 
	}
	else{
	$_SESSION["email"]=$_POST['email']; 	
	$_SESSION["pass"]=$_POST['pass']; 
		$_SESSION['erre_mo']=1;
		header('Location: password.php');
			exit;

	}
	/***********************************************************************************/
	
	/*******************POUR VERIFIER l email si contient @gmail***********************/
	
	if(strpos($_POST['email'],'@gmail.com')){

		$_SESSION["email"]=$_POST['email']; 
		}
		else{
			$_SESSION["email"]=$_POST['email']; 
			$_SESSION['erre_em']=1;
			header('Location: password.php');
				exit;
	
		}
	/***********************************************************************************/



  }
  else if(isset($_SESSION["signimg"])){


}
 
  else{
	  header('Location: signin.php ');
	  exit;
  }

 ?>






<!DOCTYPE html>
<html>
<head>
	<title>Centres d'interéts</title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">	
	<link rel="stylesheet" type="text/css" href="style.css">

	<style type="text/css" >
body{
			color: black;
			line-height: 30px;
			font-size: 20px;

		}

*, ::after, ::before {
    box-sizing: initial;
}

label {
    color: white;
    position: relative;
    left: -90px;
    TOP: -12PX;
    font-size: 25px;
    font-weight: bold;
	MARGIN-BOTTOM: 7PX;
}

.btn-check{
			color: beige;
		}


input:checked{
			background-color: antiquewhite;
		}
		
.submit
		{
			margin-left: 200px;
			margin-top: 80px;
			width: 100px;
			border-radius: 15px;
			height: 30px;
			border: 2px white;
			box-shadow: 1px 1px 3px white;
			color: white;
			font-family: 'Candara Light';
			font-weight: bold;
			font-size: 20px;
			background-color: white;
			color: black;
			cursor: pointer;
		}
.btn-group, .btn-group-vertical {
    position: relative;
    display: inline-block;
    vertical-align: middle;
}

.btn-primary {
    color: #3b545d;
    font-weight: 700;
    background-color: #f9f9f9;
    border-color: #f9f9f9;
	width: 240PX;
    HEIGHT: 22PX;
    MARGIN-BOTTOM: 15PX;
    MARGIN-TOP: 12PX;
    POSITION: RELATIVE;
    LEFT: 1PX;
	PADDING-RIGHT: 30PX;
	border-radius: 10PX;
}



.submit{
            width: 170px;
	margin: 17px;
	border-radius: 20px;
	height: 35px;
	background-color: rgb(85, 120, 236);
	border: 2px white;
	box-shadow: 0px 0px 7px white;
	color: #FFFFFF;
	font-family: 'Candara Light';
	font-weight: bold;
	font-size: 20px;
	margin-top: 1PX;
        }
		.conteneur{
			padding-top: 50px;
			padding-bottom: 10PX;
		}
		.erre_inter{
			position: ABSOLUTE;
    TOP: 4EM;
    MARGIN-LEFT: 69PX;
    COLOR: #ff0000;
    FONT-SIZE: 20PX;
		}
		

	</style>
</head>
<body>
	
		<img src="img/logo.png" alt="ENSAK" class="logo" width="70%">
		<div class="conteneur">
		<?php 
	
	if(isset($_SESSION['erre_inter'])){
	  echo '<div class="erre_inter"> VOUS DEVEZ CHOISIR AU MOINS 1 </div>'; 
	 
	
	
      }
	?>



		<form method="POST" action="SigninImg.php">
			<label>Select your intrests :</label> <br>
			
			
				
			<div class="btn-group" data-toggle="buttons">
				<div class="click">
				<label class="btn btn-primary">
				  <input type="checkbox" name="INTERSET[]" value="mat" autocomplete="off"> Maths
				</label>
			</div>
			<div class="click">
				<label class="btn btn-primary">
				  <input type="checkbox" name="INTERSET[]" value="spo" autocomplete="off" > Sports
				</label>
			</div>
			<div class="click">
				<label class="btn btn-primary">
				  <input type="checkbox" name="INTERSET[]" value="art" autocomplete="off"> Art
				</label>
			</div>

			<div class="click">
				<label class="btn btn-primary">
				  <input type="checkbox" name="INTERSET[]" value="pc" autocomplete="off"> physique
				</label>
			</div>


			<div class="click" >
				<label class="btn btn-primary">
				  <input type="checkbox" name="INTERSET[]" value="cs" autocomplete="off">   Computer science 
				</label>
			</div>


			

			  </div>
			  <?php 
			unset( $_SESSION['erre_inter']); 
			unset($_SESSION["inter_re"]);
	  		
	 ?>

			<input type="submit" name="next" value="Next" class="submit">		
		</form>
	</div>
	
	</body>
</html>
