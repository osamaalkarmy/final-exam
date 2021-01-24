 <?php
require_once "pdo.php";
if(isset($_POST['ser'])){
  $s=$_POST['ser'];

  $sql="SELECT * FROM searsh WHERE ser=:ser";
  echo "<p>".$sql."</p>\n";
  $statement=$pdo->prepare($sql);
  $statement->execute(array(':ser' => $s ));
  $row=$statement->fetch(PDO::FETCH_ASSOC);
  var_dump($row);
  echo "-->\n";
  if($row===FALSE){
    echo "<h1> incorrect.</h1>\n";
  
    header("Location:index.php");
    
  }else{
    if ("small car" =>$s=$_POST['ser']) {

    
    header("Location:smallcar.php");
         }
    elseif ("extra small car" =>$s=$_POST['ser']) {
    header("Location:exsmallcar.php");
    }
    elseif ("med car"=>$s=$_POST['ser'] ) {
     header("Location:medcar.php");
    }
    elseif ("large car" =>$s=$_POST['ser']) {
    header("Location:largecar.php");
    }
    elseif ("small suv car" =>$s=$_POST['ser']) {
      header("Location:smallsuvcar.php");
    }
    elseif ("med suv car" =>$s=$_POST['ser']) {
    header("Location:medsuvcar.php");
    }
    elseif( "mini car"=>$s=$_POST['ser'] ) {
     header("Location:minicar.php");
    }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>car rental</title>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div id="wrapper">
	<div id="header">	
		<div class="id">
			<img src="logo.jpg" alt="Adv logo" 
			>
			<p style="margin:-3px 0px 0px 140px; font-size:11px;color:rgb(46, 85, 140)"> 
			RENT A CAR</p>
			
		</div>
		<div class="menu1">
			
					
			<form style="float:left;margin-left:240px;
				margin-top:-19px;margin-">
				<input type="text" placeholder="Search" name="ser">
				<input type="submit" value= "search"name="search">
	
			</form>	

			<a href="#">
				<img src="search.jpg" alt="search btn"
					style="width:20px;height:17px; float:left;margin-top:-18px;
					margin-left:394px;">
			</a>					
		 </div>
					
		
	</div> 
	<div class ="navtag1">
	<nav>
	<ul>
	<li><a style="padding-left:3px;margin-top:-15px;
	margin-left:-42px;padding-top:4px;" href="index.php" class="z">HOME</a></li>
	<li><a href="log.php" class="z">LOGIN</a></li>
	<li><a href="signup.php" class="z">SIGNUP</a></li>

	
	</ul></nav>	
	</div>
	<div class="blank">	
	
		
					
			
	</div>
	<div id="car_region">	
		<div class="white">
			<div class="box">
				<h5 class="price">10.99</h5>
				<p class="USD">USD/DAY</p>
				<input class="select" type="button" value="SELECT">
				<p class="total">Total 76.93 USD</p>
			</div>
			
			<div class="box">
				<img class="car" src="vehicles/car1.gif" alt="car1"	>
				<p class="car_name">Extra Small Car</p>
			</div>
			
			
			
			<div class="box">	
				<p class="equipment">
   					 Automatic Transmission</p>
   			    <p class="equipment_2">
   					 Air Conditioning</p>
   			    <p class="equipment_3">
   					 24 miles/gallon</p>			
			</div>
			
		</div>
		
			
	
				
			
	</div>
	
</div>

</body>
</html>