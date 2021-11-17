<?php 

include("con_db.php");

if (isset($_POST['Cliente'])) {
    if (strlen($_POST['id']) >= 1 && strlen($_POST['NoTelefono']) >= 1) {
		$id = trim($_POST['id']);
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
		$NoTelefono = trim($_POST['NoTelefono']);
	    $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$id','$name','$email','$fechareg','$NoTelefono)";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>