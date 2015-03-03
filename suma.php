<?php include '_header.php' ?>
<div class="well">Suma</div>

<?php  

$a=$_POST["numero_1"]; 

$b=$_POST["numero_2"];

?>

<!-- PHP dentro de HTML
 -->
<p>La suma de los dos numeros es <?php echo $a + $b; ?></p>

<!-- HTML dentro de PHP -->

<?php echo "<p>La suma de los dos numeros es = " . ($a + $b) . "</p>" ?>



<!-- Mi primer condicional -->


<?php           

if ($a < $b) echo "$a es menor que $b";

?>	


<?php $option2=$_POST["option2"]; ?>


 <p> <?php echo ($option2) ?> </p>

<?php include '_footer.php' ?>