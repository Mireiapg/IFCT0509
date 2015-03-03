<?php include '_header.php' ?>
<div class="well">Calcula</div>



<?php  

$a=$_POST["numeroa"]; 

$b=$_POST["numerob"];

?>


 <?php           

if ($_POST["suma"]) echo $a+$b; 

?>	<br>

<?php           

if ($_POST["resta"]) echo $a-$b;

?>	<br>

<?php           

if ($_POST["multi"]) echo $a*$b;

?>	<br>

<?php  
if ($_POST["division"]) echo $a/$b;

?>	















<?php include '_footer.php' ?>