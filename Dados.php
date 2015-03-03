
<?php 

$dados = '<img src="http://www.gifsanimados.org/data/media/710/dado-imagen-animada-0020.gif">';

	if(isset($_POST["Play"])) {
		$dados = '<img src="http://www.gifsanimados.org/data/media/710/dado-imagen-animada-0020.gif">';




	}

	if(isset($_POST["Stop"])) {
		$dados = "";
		$dadoazarO1= rand(1,6);
		$dadoazarO2= rand(1,6);
		$dadoazarH3= rand(1,6);
		$dadoazarH4= rand(1,6);
	}
switch ($dadoazarO1) {
    case 1:
        $imagenO1= '<img src="http://grabilla.com/0521a-350445f9-cbba-401f-acc5-33067ef460b1.png ">';
        break;
    case 2:
        $imagenO2= '<img src="http://grabilla.com/0521a-2621395f-ad17-4879-b4fa-25820c413c9a.png">';
 
        break;
    case 3:
            $imagenO3= '<img src="http://grabilla.com/0521a-20213e32-2637-4218-b7dc-81eda14589fa.png">';
	break;

	case 4:
            $imagenO4= '<img src="http://grabilla.com/0521a-e7cb4dc2-338a-40f7-82fb-0855f6a122cb.png">';
	break;

	case 5:
            $imagenO5= '<img src="http://grabilla.com/0521a-5e63ef66-25dc-4e0b-83b8-a10123f96c44.png">';

	break;

	case 6:
            $imagenO6= '<img src="http://grabilla.com/0521a-b0eb2cd7-4f5e-4e68-9f6a-611289e0773f.png">';
           
	break;


}

switch ($dadoazarO2) {
    case 1:
        $imagenO1_1= '<img src="http://grabilla.com/0521a-350445f9-cbba-401f-acc5-33067ef460b1.png ">';
        break;
    case 2:
        $imagenO2_2= '<img src="http://grabilla.com/0521a-2621395f-ad17-4879-b4fa-25820c413c9a.png">';
 
        break;
    case 3:
            $imagenO3_3= '<img src="http://grabilla.com/0521a-20213e32-2637-4218-b7dc-81eda14589fa.png">';
	break;

	case 4:
            $imagenO4_4= '<img src="http://grabilla.com/0521a-e7cb4dc2-338a-40f7-82fb-0855f6a122cb.png">';
	break;

	case 5:
            $imagenO5_5= '<img src="http://grabilla.com/0521a-5e63ef66-25dc-4e0b-83b8-a10123f96c44.png">';

	break;

	case 6:
            $imagenO6_6= '<img src="http://grabilla.com/0521a-b0eb2cd7-4f5e-4e68-9f6a-611289e0773f.png">';
           
	break;


}

switch ($dadoazarH3) {
    case 1:
        $imagenH1= '<img src="http://grabilla.com/0521a-350445f9-cbba-401f-acc5-33067ef460b1.png ">';
        break;
    case 2:
        $imagenH2= '<img src="http://grabilla.com/0521a-2621395f-ad17-4879-b4fa-25820c413c9a.png">';
 
        break;
    case 3:
            $imagenH3= '<img src="http://grabilla.com/0521a-20213e32-2637-4218-b7dc-81eda14589fa.png">';
	break;

	case 4:
            $imagenH4= '<img src="http://grabilla.com/0521a-e7cb4dc2-338a-40f7-82fb-0855f6a122cb.png">';
	break;

	case 5:
            $imagenH5= '<img src="http://grabilla.com/0521a-5e63ef66-25dc-4e0b-83b8-a10123f96c44.png">';

	break;

	case 6:
            $imagenH6= '<img src="http://grabilla.com/0521a-b0eb2cd7-4f5e-4e68-9f6a-611289e0773f.png">';
           
	break;


}

switch ($dadoazarH4) {
    case 1:
        $imagenH1_1= '<img src="http://grabilla.com/0521a-350445f9-cbba-401f-acc5-33067ef460b1.png ">';
        break;
    case 2:
        $imagenH2_2= '<img src="http://grabilla.com/0521a-2621395f-ad17-4879-b4fa-25820c413c9a.png">';
 
        break;
    case 3:
            $imagenH3_3= '<img src="http://grabilla.com/0521a-20213e32-2637-4218-b7dc-81eda14589fa.png">';
	break;

	case 4:
            $imagenH4_4= '<img src="http://grabilla.com/0521a-e7cb4dc2-338a-40f7-82fb-0855f6a122cb.png">';
	break;

	case 5:
            $imagenH5_5= '<img src="http://grabilla.com/0521a-5e63ef66-25dc-4e0b-83b8-a10123f96c44.png">';

	break;

	case 6:
            $imagenH6_6= '<img src="http://grabilla.com/0521a-b0eb2cd7-4f5e-4e68-9f6a-611289e0773f.png">';
           
	break;


}

$resultado = "La puntuación del ordenador es " . ($dadoazarO1 + $dadoazarO2); 
$resultado1= "La puntuación del  humano es " . ($dadoazarH3 + $dadoazarH4);

	



?>








<?php include '_header.php' ?>
<div class="well"> Dados </div>

   	<div class="container-fluid">

   	<div class="row">

			<div class="col-xs-3"> 
			<div class="well"> <h3> ORDENADOR </div>
			</div>

			<div class="col-xs-3"> 
			</div>

			<div class="col-xs-3"> 
			</div>

			<div class="col-xs-3">
			<div class="well"> <h3> HUMANO </div>
			</div>


   

			
<form action="Dados.php" method="post">
	<div class="row">

	<div class="col-xs-3"> 
    <div class="item">
		<?php 	echo $dados;
				echo $imagenO1 . " " . " ";
				echo $imagenO2 . " " . " ";
				echo $imagenO3 . " " . " ";
				echo $imagenO4 . " " . " ";
				echo $imagenO5 . " " . " ";
				echo $imagenO6 . " " . " ";
				echo $imagenO1_1;
				echo $imagenO2_2;
				echo $imagenO3_3;
				echo $imagenO4_4;
				echo $imagenO5_5;
				echo $imagenO6_6;


		 ?>
      </div>
      </div>

    <div class="col-xs-3"> 
    <div class="item">
      </div>
      </div>

      <div class="col-xs-3"> 
    <div class="item">
      </div>
      </div>

      <div class="col-xs-3"> 
    <div class="item">
        <?php 	echo $dados;
        		echo $imagenH1 . " ";
        		echo $imagenH2 . " ";
        		echo $imagenH3 . " ";
        		echo $imagenH4 . " ";
        		echo $imagenH5 . " ";
        		echo $imagenH6 . " ";
        		echo $imagenH1_1;
        		echo $imagenH2_2;
        		echo $imagenH3_3;
        		echo $imagenH4_4;
        		echo $imagenH5_5;
        		echo $imagenH6_6;






         ?>
      </div>
      </div>

      <div class="row">
      <div class="col-xs-2"> 
    <div class="item">
	</div>
	</div>

	<div class="col-xs-2"> 
    <div class="item">
	</div>
	</div>


    <div class="col-xs-2"> 
    <div class="item">
	<button type="submit" name="Play" class="btn btn-success">Play</button>
	</div>
	</div>

	<div class="col-xs-2"> 
    <div class="item">
      <button type="submit" name="Stop" class="btn btn-danger">Stop</button>
      </div>
      </div>

      <div class="col-xs-2"> 
    <div class="item">
	</div>
	</div>

	<div class="col-xs-2"> 
    <div class="item">
	</div>
	</div>


<div class="row">



<div class="col-xs-6"> 
    <div class="item">
   <?php echo $resultado; ?>


	
      </div>
      </div>



      <div class="col-xs-6"> 
    <div class="item">
		
		<?php 		echo $resultado1; ?>
		
					
		
	
	

      </div>
      </div>

      </div>


	



   	</form>

	</div>


















<?php include '_footer.php' ?>