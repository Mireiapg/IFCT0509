
<?php 
	if(isset($_POST["submit"])) {


		$a = $_POST["a"];
		$b = $_POST["b"];
	}


 ?>




<?php include '_header.php' ?>
<div class="well">Calculator</div>

<form action="calculator.php" method="post">







<input type="number" name="a" /> <br />
<input type="number" name="b" /> <br />







<p><input type="submit" name="submit"  /> </p>

</form>
<h4> <?php echo "La suma es " . ($a+$b) ; ?> </h4>

<?php include '_footer.php' ?>

