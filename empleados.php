<!--Gerardo Cervantes Rodríguez-->
<!--Matricula:  ES1821002295-->
<!--gerardocervantes@nube.unadmexico.mx-->
<!--Grupo: DS-DPW1-2102-B2-002-->

<html>

<body bgcolor="palegreen">

<b>Bienvenido a Prestamos y Ahorros!!!...</b><br><P>
<b>Estos son los datos de un Nuevo Empleado!!!...</b><br><P>
Hola <?php echo $name=$_POST['nombre'];?><br>	<!-- en php se genera la llamada para que se muestre mediante POST -->
Tu email es: <?php echo $mail=$_POST['email'];?><br>
Tu teléfono es: <?php echo	$mail=$_POST['telefono'];?><br>	
Tu RFC es: <?php echo	$rfc=$_POST['RFC'];?><br>	
Tienes: <?php echo	$mail=$_POST['edad'];?> años de edad<br>	
Tu direccion es: <?php echo	$mail=$_POST['direccion'];?>
</body>
</html>
