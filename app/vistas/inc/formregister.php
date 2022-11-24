<div class="container w-75 my-5">
	<form role="form"  onsubmit="verificarPasswords(); return false" name="fe" action="<?php echo RUTA_URL;?>/paginas/formpasarela1" method="post" enctype="multipart/form-data">
	 <div class="row">
	 	<h4 class="text-center">Información personal</h4>
	    <div class="col">
	      	<div class="form-group">
				<label class="col-form-label mt-4" for="inputDefault">Nombre * </label>
				<input type="text" tabindex="1"  required="true" name="name" class="form-control" placeholder="Nombre: " value="<?php echo $datos['name_user'] ?>" id="inputDefault">
			</div>
			<div class="form-group">
			   <label class="col-form-label mt-4" for="inputDefault">Correo * </label>
			   <input type="email" tabindex="3" required="true" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo:" >
			</div>
	    </div>
	    <div class="col">
		    <div class="form-group">
					<label class="col-form-label mt-4" for="inputDefault">Apellidos * </label>
					<input type="text" tabindex="2" required="true" name="apellid" class="form-control" placeholder="Apellidos: " id="inputDefault" value="<?php echo $datos['apellidos_user'] ?>">
		    </div>
		   	<div class="form-group">
				<label class="col-form-label mt-4" for="inputDefault">Teléfono * </label>
				<input type="text" tabindex="4" required="true" name="telefon" class="form-control" placeholder="Teléfono: " id="inputDefault" value="<?php echo $datos['telefono_user'] ?>">
		    </div>
	  </div>
	</div>
	<br>
		<h4 class="text-center mt-4">Domicilio</h4>
		<div class="form-group">
				<label class="col-form-label mt-4" for="inputDefault">Nombre de la empresa * </label>
				<input type="text" tabindex="5" required="true" name="name_company" class="form-control" placeholder="Nombre de la empresa: " id="inputDefault" value="<?php echo $datos['company_user'] ?>">
		</div>
		<div class="form-group">
				<label class="col-form-label mt-4" for="inputDefault">Dirección * </label>
				<input type="text" tabindex="6" required="true" name="direction" class="form-control" placeholder="Dirección: " id="inputDefault" value="<?php echo $datos['direccion_user'] ?>">
		</div>
		<div class="form-group">
				<label class="col-form-label mt-4" for="inputDefault">Dirección 2 </label>
				<input type="text" tabindex="7" name="direction2" class="form-control" placeholder="Dirección 2: " id="inputDefault" value="<?php echo $datos['direccion_user2'] ?>">
		</div>
		<div class="row">
				<div class="col">
						<div class="form-group">
						<label class="col-form-label mt-4" for="inputDefault">Estado * </label>
						<input type="text" tabindex="8" required="true" name="estado" class="form-control" placeholder="Estado: " id="inputDefault" value="<?php echo $datos['estado_user'] ?>">
				</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label class="col-form-label mt-4" for="inputDefault">Ciudad * </label>
						<input type="text" tabindex="9" required="true" name="ciudad" class="form-control" placeholder="Ciudad: " id="inputDefault" value="<?php echo $datos['ciudad_user'] ?>">
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label class="col-form-label mt-4" for="inputDefault">C.P. * </label>
						<input type="text" tabindex="10" required="true" name="CP" class="form-control" placeholder="C.P.: " id="inputDefault" value="<?php echo $datos['cp_user'] ?>">
					</div>
				</div>
		</div>
		<br>
		<div class="row my-4">
			<div class="col-md-6">
				<label>Ingrese Contraseña *</label>
					<div class="input-group">
				<input required="true" id="txtPassword" tabindex="11" type="Password" Class="form-control">
				<div class="input-group-append">
						<button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<label>Repetir Contraseña *</label>
				<div class="input-group">
				   <input required="true" id="txtPassword2" tabindex="12" type="Password" name="pass" Class="form-control">
				</div>
			</div>
					<!-- <h4 class="text-center mt-4">Seguridad de tu cuenta</h4>
				<div class="col">
					  <div class="form-floating mt-4">
					    <input type="password" tabindex="11" required="true" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
					    <label for="floatingPassword">Password *</label>
					  </div>
				</div> -->
				<!--<div class="col">
					  <div class="form-floating mt-4">
					    <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
					    <label for="floatingPassword">Password</label>
					  </div>
				</div>-->
		</div>
    <!--<div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4">Elige paquete: </label>
      <select class="form-select" id="exampleSelect1">
        <option value="99">$99.00/mx</option>
        <option value="209">$209.00/mx</option>
      </select>
    </div>-->
    <br><br>
	  <input type="submit" tabindex="13" class="btn btn-primary" value="Continuar">
	</form>
</div>