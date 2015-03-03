<?php include '_header.php' ?>
<div class="well">Login</div>

<form action="procesa_datos.php" method="post">

	usuaria: <input type="text" name="usuario" value="" /><br>
	password: <input type="password" name="password" value="" /><br>

<br>
<input type="submit" name="submit" value="Enviar" />

</form>








<div class="container">
<form action="procesa1.php" method="post">

<meta charset="UTF-8"/>
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           <A href="edit.html" >Edit Profile</A>

        <A href="edit.html" >Logout</A>
       <br>
<p class=" text-info">Jueves, 19 de febrero de 2015 </p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Usuario</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nombre de cliente:</td>
                        <td><input type="text" name="nombre" class="form-control input-sm chat-input" placeholder="nombre"> </td>
                      </tr>
                      <tr>
                        <td>D.N.I:</td>
                        <td><input type="text" name="DNI" class="form-control input-sm chat-input" placeholder="DNI"></td>
                      </tr>
                      <tr>
                        <td>Dirección:</td>
                        <td><input type="text" name="dirección" class="form-control input-sm chat-input" placeholder="dirección"></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Población:</td>
                        <td><input type="text" name="Población" class="form-control input-sm chat-input" placeholder="Población"></td>
                      </tr>
                        <tr>
                        <td>Provincia:</td>
                        <td><input type="text" name="provincia" class="form-control input-sm chat-input" placeholder="provincia"></td>
                      </tr>
                      <tr>
                        <td>Teléfono:</td>
                        <td><input type="text" name="teléfono" class="form-control input-sm chat-input" placeholder="teléfono"></td>
                      </tr>
                        <td>Email:</td>
                        <td><input type="text" name="email" class="form-control input-sm chat-input" placeholder="email"></td>
                 
                           
                      </tr>
                      <tr>
                        <td>Año de nacimiento:</td>
                        <td><input type="text" name="ano_de_nacimiento" class="form-control input-sm chat-input" placeholder="año de nacimiento"> </td>
                      </tr>
                     


                        <tr>
                        <td>Fecha de nacimiento</td>
                      <td> <input type="text" name="dia" value="" placeholder="Día" maxlength="2"> </td> <br>
                      <td><input type="text" name="mes" value="" placeholder="Mes" maxlength="2"> </td><br>
                      <td><input type="text" name="ano" value="" placeholder="Año" maxlength="4"> </td><br>
                      </tr>

                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">Cliente</a>
                  <a href="#" class="btn btn-primary">Operario</a>
                  <a href="#" class="btn btn-primary">Admin</a>
                  <a href="#" class="btn btn-primary">Superadmin</a>




                 <p> <input type="checkbox" name="option1" value="Aceptar_condiciones"> Aceptar condiciones<br></p>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                      
                    					<input type="submit" name="submit" value="Enviar" />

                        </span>



</form>
                    </div>
            
          </div>
        </div>
      </div>
    </div>






<?php include '_footer.php' ?>