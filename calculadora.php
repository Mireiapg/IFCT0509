<?php include '_header.php' ?>
<div class="well">CALCULADORA</div>

<form action="calculadora.php" method="post">
A <input type="number" name="numeroa"  placeholder="tu numero aquí" /> <br />
B <input type="number" name="numerob"  placeholder=" otro numero" /><br />





 <input type="checkbox" name="suma" value= "suma"> + <br>
 <input type="checkbox" name="resta" value= "resta"> - <br>
 <input type="checkbox" name="multi" value= "multi"> * <br>
 <input type="checkbox" name="division" value= "division"> / <br>




<p><input type="submit" name="submit"  /> </p>

</form>



<?php include '_footer.php' ?>