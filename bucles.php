<?php 
	if(isset($_POST["submit"])) {


		$a = $_POST["a"];
	}


 ?>






<?php include '_header.php' ?>
<div class="well"><H5>TABLAS DE MULTIPLICAR<H5></div>
<div class="row">

			<div class="col-xs-2"> 
			<div class= "alert alert-info"> <h6> Tabla del 1<h6> </div>
			
<?php 	
for ($i=1; $i<=10; $i=$i+1) {
		echo " ".$i." x 1= ". $i*1 ."<br>";
		
	


}

 ?>
 </div>


			<div class="col-xs-2"> 
			<div class="alert alert-warning"> <h6> Tabla del 2<h6> </div>
			
<?php 	
for ($i=1; $i<=10; $i=$i+1) {
		echo " ".$i." x 2= ". $i*2 ."<br>";
		
	


}

 ?>
 </div>

 <div class="col-xs-2"> 
			<div class="alert alert-warning"> <h6> Tabla del 3<h6> </div>
			
<?php 	
for ($i=1; $i<=10; $i=$i+1) {
		echo " ".$i." x 3= ". $i*3 ."<br>";
		
	


}

 ?>
 </div>

 <div class="col-xs-2"> 
			<div class="alert alert-warning"> <h6> Tabla del 4<h6> </div>
			
<?php 	
for ($i=1; $i<=10; $i=$i+1) {
		echo " ".$i." x 4= ". $i*4 ."<br>";
		
	


}

 ?>
 </div>

 <div class="col-xs-2"> 
			<div class="alert alert-warning"> <h6> Tabla del 5<h6> </div>
			
<?php 	
for ($i=1; $i<=10; $i=$i+1) {
		echo " ".$i." x 5= ". $i*5 ."<br>";
		
	


}

 ?>
 </div>
 </div>

<div class="row">

			<div class="col-xs-2"> 
			<div class="alert alert-info"> <h6> Tabla del 6<h6> </div>
			
<?php 	
for ($i=1; $i<=10; $i=$i+1) {
		echo " ".$i." x 6= ". $i*6 ."<br>";
		
	


}

 ?>
 </div>

 <div class="col-xs-2"> 
			<div class="alert alert-warning"> <h6> Tabla del 7<h6> </div>
			
<?php 	
for ($i=1; $i<=10; $i=$i+1) {
		echo " ".$i." x 7= ". $i*7 ."<br>";
		
	


}

 ?>
 </div>

 <div class="col-xs-2"> 
			<div class="alert alert-warning"> <h6> Tabla del 8<h6> </div>
			
<?php 	
for ($i=1; $i<=10; $i=$i+1) {
		echo " ".$i." x 8= ". $i*8 ."<br>";
		
	


}

 ?>
 </div>

<div class="col-xs-2"> 
			<div class="alert alert-warning"> <h6> Tabla del 9<h6> </div>
			
<?php 	
for ($i=1; $i<=10; $i=$i+1) {
		echo " ".$i." x 9= ". $i*9 ."<br>";
		
	


}

 ?>
 </div>
<div class="col-xs-2"> 
			<div class="alert alert-warning"> <h6> Tabla del 10<h6> </div>
			
<?php 	
for ($i=1; $i<=10; $i=$i+1) {
		echo " ".$i." x 10= ". $i*10 ."<br>";
		
	


}

 ?>
 </div>
 </div>

<form action="bucles.php" method="post">
			<div class="alert alert-info"> <h4> ¿Que tabla quieres?<h4> </div><br />

 <input type="number" name="a" /> <br />
 <p><input type="submit" name="submit"  /> </p>


 





</form>
<?php 
 for ($i=1; $i<=10; $i=$i+1) {
		echo " ".$i." x ".$a."= ". $i*$a ."<br>";
	}

?>

<?php include '_footer.php' ?>