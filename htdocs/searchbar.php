 <?php
require_once "pdo.php";
if(isset($_POST['ser'])&&isset($_POST['link'])){
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
    if ($s=$_POST['ser'] =>'small car') {

    
    header("Location:smallcar.php");
         }
    elseif ($s=$_POST['ser'] =>'extra small car') {
    header("Location:exsmallcar.php");
    }
    elseif ($s=$_POST['ser'] =>'med car') {
     header("Location:medcar.php");
    }
    elseif ($s=$_POST['ser'] =>'large car') {
    header("Location:largecar.php");
    }
    elseif ($s=$_POST['ser'] =>'small suv car') {
      header("Location:smallsuvcar.php");
    }
    elseif ($s=$_POST['ser'] =>'med suv car') {
    header("Location:medsuvcar.php");
    }
    elseif ($s=$_POST['ser'] =>'mini car') {
     header("Location:minicar.php");
    }
  }
}
?>