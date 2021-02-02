<!DOCTYPE html>
<html>
<head>
	<title>Calc Store</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
</head>
<body>

	<br>
	<br>

  <div class="container"> 
  		<form action="index.php" method="post">
  			<div class="row">
  				<div class="col">
  					   <div class="form-group"> 
		   	  <input type="text" name="eng" placeholder="English" class="form-control">
		   </div>
  				</div>
  					<div class="col">
  					   <div class="form-group"> 
		   	  <input type="text" name="french" placeholder="French" class="form-control">
		   </div>  		
		   		</div>
  			</div>

  			<br>


  						<div class="row">
  				<div class="col">
  					   <div class="form-group"> 
		   	  <input type="text" name="kiswa" placeholder="kiswahili" class="form-control">
		   </div>
  				</div>
  					<div class="col">
  					   <div class="form-group"> 
		   	  <input class="btn btn-success"  type="submit" name="save" class="form-control" value="get average">
		   </div>  		
		   		</div>
  			</div>




	    </form>
  </div>


<?php
   //define variables as empty tags or values 
   $french = '';
   $english = '';
   $kiswahili = '';
   $sum;
   $average;

   //isset 
   if (isset($_POST['save'])) {
   	# code...
   	//capturing users input
     $french = $_POST['french'];
     $english = $_POST['eng'];
     $kiswahili = $_POST['kiswa'];
     $sum = $french + $english + $kiswahili;
     $average = $sum / 3;

     //avearge
     echo "<h1>".$average."</h1>";
     echo "<br>";

     switch ($average) {
  case $average>=60:
    # code...
     echo "1st division";
    break;
    case $average>=50;
    echo "2nd division";
    break;

    case $average>=35:
      # code...
    echo "3rd division";
      break;

  default:
    # code...
      echo "failed";
    break;
}

   }


   

  ?>


  

</body>
</html>