<?php
include("mysqlConexion.php");
$cn=conectar1();


?>
<body bgcolor="#99CC99">
<link rel="shortcut icon" href="iconosistema.jpg">
   
        <title>Inscripciones</title>
		<center><img src="sistema5.png"></font> </center>

 <center> <table border="0">
  <tr>
  <td><h1><font color="#99CC99">-------------------------------------------------------------------------------------------------------</font><td><a href="Bienvenidos.php"><img src="cerrar2.png"></a></td>
  </tr>
  </table></center>
<center><h1><font color="blue">Registro de Inscripciones al Evento de Software </font></h1></center>
<?php
$var="";
$var1="";
$var2="";
$var3="";
$var4="";
$var5="";
$var6="";
$var7="";
$var8="";
$var9="";

if(isset($_POST["btn1"]))
{
	$btn1=$_POST["btn1"];
	//$bus=$_POST["txtbuscar"];
	//codigo para buscar datos por cedula desde la base de datos
	if($btn1=="Buscar")
	{
		$sql="select *from tb_inscritos where Cedula='$bus'";
		//$cs=mysql_query($cn,$sql);
		$cs= mysqli_query($cn,$sql); 
			while($resul=mysqli_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
			$var5=$resul[5];
			$var6=$resul[6];
			$var7=$resul[7];
			$var8=$resul[8];
			$var9=$resul[9];
			
			}
	}
	//Generar codigo de numero o cupo 

	
	if($btn1=="Nuevo")
	{
		$sql="select Id from tb_inscritos";
		//$cs=mysql_query($cn,$sql);
		$cs= mysqli_query($cn,$sql); 
			while($resul=mysqli_fetch_array($cs)){
				$var10=$resul[0];
		       
		
			}
			if($var10==0)
			{
				$var="1";
			}
			else{
				 $var=$var10+1;
			}
	}
	
	//insertar datos en la base de datos )
	if($btn1=="Inscribir")
	{
		$cod=$_POST["txtcodigo"];
		$nom=$_POST["txtNombres"];
		$ape=$_POST["txtApellidos"];
		$cor=$_POST["txtCorreo"];
		$fec=$_POST["txtFecha"];
		$ced=$_POST["txtCedula"];
		$dir=$_POST["txtDireccion"];
		$tel=$_POST["txtTelefono"];
		$tal=$_POST["txtTaller"];
		$fp=$_POST["txtForma_Pago"];
		//$sql="Insert into tb_inscritos value('$cod','$nom','$ape','$cor','$fec','$ced','$dir','$tel','$tal','$fp')";
		
		//$cs= mysqli_query($cn,$sql); 
		//echo "<script> alert('Se Insertaron Correctamente los datos')</script>";
		//echo "<font color='RED'>Felicitaciones te registraste con exito...</font>";
		//echo "<a href='InicioSesion.php'> Inicia Sesion";
		
		
		if($_POST)
{
       
  if($cod==""||$nom==""||$ape==""||$cor==""||$fec==""||$ced==""||$dir==""||$tel==""||$tal==""||$fp==""){
	echo "<center><font color='red'>Error... Falta llenar los datos de los campos o de algun campo revise por favor...!</font></center>";
} 
else{
	
	$sql="Insert into tb_inscritos value('$cod','$nom','$ape','$cor','$fec','$ced','$dir','$tel','$tal','$fp')";
		
		$cs= mysqli_query($cn,$sql); 
	    
	echo "<script> alert('Se Insertaron Correctamente los datos')</script>";
		echo "<font color='blue'>Felicitaciones te registraste con exito...</font>";
		echo "<a href='InicioSesion.php'> Inicia Sesion";
}

}
	}
	
	//Codigo para actualizar los datos
	
	if($btn1=="Actualizar")
	{
		$cod=$_POST["txtcodigo"];
		$nom=$_POST["txtNombres"];
		$ape=$_POST["txtApellidos"];
		$cor=$_POST["txtCorreo"];
		$fec=$_POST["txtFecha"];
		$ced=$_POST["txtCedula"];
		$dir=$_POST["txtDireccion"];
		$tel=$_POST["txtTelefono"];
		$tal=$_POST["txtTaller"];
		$fp=$_POST["txtForma_Pago"];
		$sql="Update tb_inscritos set Nombres='$nom', Apellidos='$ape', Correo='$cor', Fecha_Nacimiento='$fec', Cedula='$ced', Direccion='$dir', Telefono='$tel', Taller='$tal', Forma_Pago='$fp'  where Id='$cod'"; 
		
		$cs= mysqli_query($cn,$sql); 
		echo "<script> alert('Se actualizaron correctamente los datos')</script>";
	}
	
	//codigo para eliminar los datos de la base de datos 
	
	if($btn1=="Eliminar")
	{
		$cod=$_POST["txtcodigo"];
	
		$sql="Delete from tb_inscritos  where Id='$cod'"; 
		
		$cs= mysqli_query($cn,$sql); 
		echo "<script> alert('Se eliminaron correctamente los datos')</script>";
	}
}
?>
     <center><table border="3" bgcolor="FFFFFF">
     <center><form action="" method="post">
           
	
		  
           <tr>
		   <td>Numero o Cupo:*</td>
		   <td><center><input type="text" name="txtcodigo"  placeholder="Ingrese cupo" value="<?php echo $var?>" size=50> </center></td>
		   </tr>
		   
		   <tr>
		   <td>Nombres:*</td>
		   <td><center><input type="text" name="txtNombres" value="<?php echo $var1?>" size=50 placeholder="Ingrese sus nombres"> </center></td>
		   </tr>
		   
		   
           <tr>
		   <td>Apellidos:*</td>
		   <td><center><input type="text" name="txtApellidos" value="<?php echo $var2?>" size=50 placeholder="Ingrese sus apellidos"> </center></td>
		   </tr>
	   
	   	 
           <tr>
		   <td>Correo:*</td>
		   <td><center><input type="email" name="txtCorreo" value="<?php echo $var3?>" size=50 placeholder="Ingrese su correo"> </center></td>
		   </tr>
		  
           <tr>
		   <td>Fecha de Nacimiento:*</td>
		   <td><center><input type="text" name="txtFecha" value="<?php echo $var4?>" size=50 placeholder="Ingrese fecha de naacimiento"> </center></td>
		   </tr>
		   
		   <tr>
		   <td>Cedula:*</td>
		   <td><center><input type="text" name="txtCedula" value="<?php echo $var5?>" size=50 placeholder="Ingrese su Cedula"> </center></td>
		   </tr>
		   <tr>
		   <td>Direccion:*</td>
		   <td><center><input type="text" name="txtDireccion" value="<?php echo $var6?>" size=50 placeholder="Ingrese su direccion"> </center></td>
		   </tr>
		   
		   <tr>
		   <td>Telefono:*</td>
		   <td><center><input type="text" name="txtTelefono" value="<?php echo $var7?>" size=50 placeholder="Ingrese su numero de telefono o celula"> </center></td>
		   </tr>
		   <tr>
		   <td>Taller:*</td>
		   <td><center><input type="text" name="txtTaller" value="<?php echo $var8?>" size=50 placeholder="Ingrese el Taller a recibir"> </center></td>
		   </tr>
		   <tr>
		   <td>Forma de Pago:*</td>
		   <td><center><input type="text" name="txtForma_Pago" value="<?php echo $var9?>" size=50 placeholder="Ingrese la forma de pago"> </center></td>
		   </tr>
		   
		   <tr>
		   <td>
		   </td>
		   <td>  <center><input type="submit" name="btn1" value="Nuevo"> <input type="submit" name="btn1" value="Inscribir"><input type="submit" name="btn1" value="Listar Inscritos"><a href="Bienvenidos.php"><input type="button"  value="Cancelar"></center></td>
			</tr>
	   	  
        </form></center>
		</table></center>
		<br>
   <center><h1><font color="blue">Datos almacenados de los Inscritos al evento de software</font></h1></center>
   </body>
   <?php
   if(isset($_POST["btn1"]))
{
	$btn1=$_POST["btn1"];
	//$bus=$_POST["txtbuscar"];
   if($btn1=="Listar Inscritos")
	{
		echo "<font color='blue'>Si estas registrado en esta lista...</font>";
		echo "<a href='InicioSesion.php'>Inicia Sesion";
		$sql="select *from tb_inscritos";
		
		$cs= mysqli_query($cn,$sql); 
		echo " <center><table border='3' bgcolor='FFFFFF'>
		        <tr>
				<td> Cod</td>
				<td> Nombres</td>
				<td> Apellidos</td>
				<td> Correo</td>
				<td> Fecha de Nacimiento</td>
				
				<td> Direccion</td>
				<td> Telefono</td>
				<td> Taller</td>
				<td> Forma de Pago</td>
				</tr>
		";
			while($resul=mysqli_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
			$var5=$resul[5];
			$var6=$resul[6];
			$var7=$resul[7];
			$var8=$resul[8];
			$var9=$resul[9];
			echo "<tr>
			<td>$var</td>
			<td>$var1</td>
			<td>$var2</td>
			<td>$var3</td>
			<td>$var4</td>
			<td>$var5</td>
			
			<td>$var7</td>
			<td>$var8</td>
			
			</tr>
			";
			}
			echo "</table>
			</center>";
			
	}
}
   ?>
