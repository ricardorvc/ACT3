<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de empleados</h1>
		<input type="id" name="id" placeholder="id">
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
		<input type="text" name="fecharegistro" placeholder="Fecha">
		<input type="text" name="NoTelefono" placeholder="Telefono">
    	<input type="submit" name="Cliente">
    </form>
        <?php 
        include("index.php");
        ?>
</body>
</html>