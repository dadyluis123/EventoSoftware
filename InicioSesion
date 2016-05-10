<?php
include("mysqlConexion.php");
$cn=conectar1();
?>

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
$cor="";
	$ced="";
	//codigo para verificar si es el usurio y contrasena correcto
if(isset($_POST["btn1"]))
{
	$btn1=$_POST["btn1"];
	$cor=$_POST["txtCorreo"];
	$ced=$_POST["txtCedula"];
	//codigo para buscar datos por cedula desde la base de datos
	if($btn1=="Ingresar")
	{
		$sql="select Correo, Cedula from tb_inscritos where Correo='$cor' and Cedula='$ced'";
		//$cs=mysql_query($cn,$sql);
		$cs= mysqli_query($cn,$sql); 
			while($resul=mysqli_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			
         

			}
			
	}
	
	
	
}


?>

<body bgcolor="#66FFCC">
<link rel="shortcut icon" href="iconosistema.jpg">
<title>Inicio Sesion</title>
<center><table border="0" bgcolor="FFFFFF">
     <center><form action="" method="post">
          
	   	 
           <tr>
		   <td><center><img src="candado1.jpg"></center></td>
		   <td><center> <h1><font color="blue">Iniciar Sesion </font></h1></center></td>
		   </tr>
		   <tr>
		    
		   <td>Correo:*</td>
		   <td><center><input type="email" name="txtCorreo" value="<?php echo $var3?>" size=50 placeholder="Ingrese su correo"> </center></td>
		  
		   </tr>
		  
           
		   
		   <tr>
		    
		   <td>Cedula:*</td>
		   <td><center><input type="password" name="txtCedula" value="<?php echo $var5?>" size=50 placeholder="Ingrese su Cedula"> </center></td>
		   
		   </tr>
		  <tr>
		  </tr>
		  <br>
		   
		   <tr>
		 
		   <td>
		   </td>
		   <td> <center><input type="submit" name="btn1" value="Ingresar"><a href="Bienvenidos.php"><input type="button"  value="Cancelar"></center><br>
		  		   </td>
		   
		  </tr>
	   	  <tr>
		   <td>
		   
		   </td>
		   <td><font color="blue">No tienes cuenta?.</font><a href="FrmInscribirse.php">Registrate</center> </td> 
		 
		  </tr>
		
		  <?php

if($_POST)
{
    $cor=$_POST["txtCorreo"];
	$ced=$_POST["txtCedula"];
if($cor==""){
	echo "<font color='red'>Error... Falta llenar el correo o revise si es el correcto</font>";
}	
else{
	if(!is_numeric($ced)){
		echo "<font color='red'>Error... Falta llenar la cedula o revise si es el correcto</font>";
	}
}
}

?>
        </form></center>
		</table></center>
		<?php
		if(isset($_POST["btn1"]))
{
	$btn1=$_POST["btn1"];
	$cor=$_POST["txtCorreo"];
	$ced=$_POST["txtCedula"];
	//codigo para buscar datos por cedula desde la base de datos
	if($btn1=="Ingresar")
	{
		$sql="select Correo, Cedula from tb_inscritos where Correo='$cor' and Cedula='$ced'";
		//$cs=mysql_query($cn,$sql);
		$cs= mysqli_query($cn,$sql); 
			while($resul=mysqli_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			
			
				echo " <center><table border='0' bgcolor='#FFFF00'>
		        <tr>
				<td>Bienvenido:</td>
				<td> $var</td>
				<td> Has clic aqui para ingresar></td>
				<td> <a href='Informacionevento.php'>acceder</a></td>
				
				</tr>
				</table></center>
		";
		
			
         

			}
			if($var==$cor && $var1==$ced){
				
			}
			else{
				echo "<script> alert('Datos Incorrectos')</script>";
			}
			
	}
	
	
	
}
		?>
		<br>
</body>
