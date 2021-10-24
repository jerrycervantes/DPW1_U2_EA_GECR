<!--Gerardo Cervantes Rodríguez-->
<!--Matricula:  ES1821002295-->
<!--gerardocervantes@nube.unadmexico.mx-->
<!--Grupo: DS-DPW1-2102-B2-002-->

<html>
<body bgcolor="Moccasin">
<b>Bienvenido a Prestamos y Ahorros!!!...</b><br><P>
<b>Estos son los datos de una Nueva Sucursal!!!...</b><br><P>
La sucursal es: &nbsp; <?php echo $name=$_POST['nombre'];?><br>	<!-- en php se genera la llamada para que se muestre mediante POST -->
El email es: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mail=$_POST['email'];?><br>
El telefono es: &nbsp;&nbsp;&nbsp;<?php echo	$telefono=$_POST['telefono'];?><br>	
La direccion es: <?php echo	$direccion=$_POST['direccion'];?>
</body>
</html>
