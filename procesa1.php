
<?php include '_header.php' ?>

<div class="well">Procesa datos1</div>



 Hoy es    <?php echo date ("d-m-Y H:i:s"); 
  ?>



<?php $nombre=$_POST["nombre"]; ?>


 <p>Te llamas <?php echo strtoupper ($nombre) ?> </p>




<p>Tu nombre tiene
<?php 	
$text = ($nombre);
echo strlen($text);

 ?> caracteres </p>

<p>Naciste en el año
<?php $ano_de_nacimiento=$_POST["ano_de_nacimiento"]; ?>

<?php echo ($ano_de_nacimiento); ?> </p>


<p><?php echo date ("Y"); 
  ?></p>

<p>  Tienes <?php echo (  (int) date("Y") - (int)$ano_de_nacimiento) ?> años </p>



<?php $option1=$_POST["option1"]; ?>


 <p> <?php echo ($option1) ?> </p>






<?php include '_footer.php' ?>