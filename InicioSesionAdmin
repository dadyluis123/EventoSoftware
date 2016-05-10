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
if(isset($_POST["btn1"]))
{
	$btn1=$_POST["btn1"];
	$cor=$_POST["txtCorreo"];
	$ced=$_POST["txtCedula"];
	//codigo para buscar datos por cedula desde la base de datos
	if($btn1=="Ingresar")
	{
		$sql="select Login, Contrasena from tb_usuarios where Login='$cor' and Contrasena='$ced'";
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
<title>Inicio Sesion Admin</title>
<center><table border="0" bgcolor="FFFFFF">
     <center><form action="" method="post">
          
	   	  <tr>
		   <td><center><img src="candado1.jpg"></center></td>
		   <td><center> <h1><font color="blue">Iniciar Sesion </font></h1></center></td>
		   </tr>
		   <tr>
		   </tr>  
           <tr>
		   <td>Login:*</td>
		   <td><center><input type="text" name="txtCorreo" value="<?php echo $var3?>" size=50 placeholder="Ingrese su usuario"> </center></td>
		   </tr>
		  
           
		   
		   <tr>
		   <td>Password:*</td>
		   <td><center><input type="password" name="txtCedula" value="<?php echo $var5?>" size=50 placeholder="Ingrese su contrasena"> </center></td>
		   </tr>
		   <br>
		   <tr>
		   </tr>  <br>
		   
		   <tr>
		   <td>
		   </td>
		   <td> <center> <input type="submit" name="btn1" value="Ingresar"><a href="Bienvenidos.php"><input type="button"  value="Cancelar"></center>
		  		   </td>
		   
		  </tr>  <br>
		   <tr>
		   </tr>
  <?php

if($_POST)
{
    $cor=$_POST["txtCorreo"];
	$ced=$_POST["txtCedula"];
if($cor==""){
	echo "<font color='red'>Error... Falta llenar el Login o revise si es correcto</font>";
}
else{
	if($ced==""){
	echo "<font color='red'>Error... Falta llenar el password  o verifique si correcto</font>";
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
		$sql="select Login, Contrasena from tb_usuarios where Login='$cor' and Contrasena='$ced'";
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
				<td> <a href='Principal.php'>acceder</a></td>
				
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

