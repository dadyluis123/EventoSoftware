<?php
include("mysqlConexion.php");
$cn=conectar1();


?>
<html>
    <head>
	<link rel="shortcut icon" href="iconosistema.jpg">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>WebAppEventoSoftware</title>
        <style type="text/css">
            *{
             padding:0px;
             margin:0px
             }
             #header{
             margin:auto;
             width:800px;
             font-family:Arial, Helvetica, sans-serif;
            }
            ul, ol{
            list-style:none;
            }
             .nav li a {
            background-color:#009900;
            color:#fff;
            text-decoration:none;
            padding: 10px 15px;
             display:block;
            }
            .nav li a:hover{
            background-color:#3399CC; 
			
            }
            .nav > li {
              float:left;
            }
            .nav li ul {
             display:none;
             position:absolute;
             min-width:140px;
           }
           
             .nav li:hover > ul{
            display:block;
            }
           .nav li ul li{
            position:relative;
            }
            .nav li ul li ul{
            right:-140px;
            top:0px;
            }



        </style>
    </head>
    <body bgcolor="#99CC99">
       <center> <div class="Container">
            <center><img src="sistema5.png"></font> </center>
        
        <div id="header">
            <ul class="nav">
            <li><a href="">Inicio</a>
                <ul>
                   <li><a href="Informacionevento.php">Informacion Evento</a></li>
                      
                   </ul>
            </li>
            
            
            <li><a href="">Registrar</a>
                
                   <ul>
                   <li><a href="FrmInscritos.php">Inscribir</a></li>
                   <li><a href="MatrizInscritos.php">Buscar Inscritos</a></li>
                   </ul>
                
            </li>
			
			            <li><a href="">Cuentas de Usuarios</a>
                
                   <ul>
                   <li><a href="FrmCuentas.php">Crear Cuentas</a></li>
                   <li><a href="MatrizCuentas.php">Buscar Cuentas </a></li>
                   </ul>
                
                     </li>
			
            <li><a href="">Acerca de</a>
              <ul>
               <li><a href="Autor.php">Autor</a></li>
               </ul>
            </li>
           
            <li><a href=””> Ayuda</a>
                    <ul>
                   <li><a href="ayuda.html">Pantallas</a></li>
                      
                   </ul>
            </li>
			
			
			<li><a href=””> Cerrar Sesion</a>
                    <ul>
                   <li><a href="Bienvenidos.php">Cerrar Sesion</a></li>
                      
                   </ul>
            </li>
			
            </ul>
			

</center>
            
            
 
    </body>
</html>

<br>
<br>

<br>
<br>
<center><h1><font color="blue">Registro de Inscripciones al Evento de Software</font> </h1></center>
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
	$bus=$_POST["txtbuscar"];
	//codigo para buscar datos por cedula desde la base de datos
	if($btn1=="Buscar")
	{
		//$sql="select *from tb_inscritos where Cedula='$bus'";
		
		//$cs= mysqli_query($cn,$sql); 
		//	while($resul=mysqli_fetch_array($cs)){
			//$var=$resul[0];
			//$var1=$resul[1];
			//$var2=$resul[2];
			//$var3=$resul[3];
			//$var4=$resul[4];
			//$var5=$resul[5];
			//$var6=$resul[6];
			//$var7=$resul[7];
			//$var8=$resul[8];
			//$var9=$resul[9];
			
			//}
			
if($_POST)
{
       
if($bus==""){
	echo "<center><font color='red'>Error... Falta llenar el dato de la cedula a buscar...!</font></center>";
}	

else{
	
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
	
	// codigo para Insertar datos en la base de datos 
	if($btn1=="Insertar")
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
		
		//codigo que permite controlar espacios o datos incorrectos
if($_POST)
{
       
  if($cod==""||$nom==""||$ape==""||$cor==""||$fec==""||$ced==""||$dir==""||$tel==""||$tal==""||$fp==""){
	echo "<center><font color='red'>Error... Falta llenar los datos de los campos o de algun campo revise por favor...!</font></center>";
} 
else{
	
	$sql="Insert into tb_inscritos value('$cod','$nom','$ape','$cor','$fec','$ced','$dir','$tel','$tal','$fp')";
		
		$cs= mysqli_query($cn,$sql); 
	    
		echo "<script> alert('Se Insertaron Correctamente los datos')</script>";
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
		//$sql="Update tb_inscritos set Nombres='$nom', Apellidos='$ape', Correo='$cor', Fecha_Nacimiento='$fec', Cedula='$ced', Direccion='$dir', Telefono='$tel', Taller='$tal', Forma_Pago='$fp'  where Id='$cod'"; 
		
		//$cs= mysqli_query($cn,$sql); 
		//echo "<script> alert('Se actualizaron correctamente los datos')</script>";
		
		//codigo que permite controlar espacios o datos incorrectos
		if($_POST)
{
       
    if($cod==""||$nom==""||$ape==""||$cor==""||$fec==""||$ced==""||$dir==""||$tel==""||$tal==""||$fp==""){
	echo "<center><font color='red'>Error... Falta llenar los datos de los campos o de algun campo revise por favor...!</font><center>";
}   

else{
	
	$sql="Update tb_inscritos set Nombres='$nom', Apellidos='$ape', Correo='$cor', Fecha_Nacimiento='$fec', Cedula='$ced', Direccion='$dir', Telefono='$tel', Taller='$tal', Forma_Pago='$fp'  where Id='$cod'"; 
		
		$cs= mysqli_query($cn,$sql); 
		echo "<script> alert('Se actualizaron correctamente los datos')</script>";
}

}
	}
	
	//codigo para eliminar los datos de la base de datos 
	
	if($btn1=="Eliminar")
	{
		$cod=$_POST["txtcodigo"];
	
		//$sql="Delete from tb_inscritos  where Id='$cod'"; 
		
		//$cs= mysqli_query($cn,$sql); 
		//echo "<script> alert('Se eliminaron correctamente los datos')</script>";
		
		//codigo que permite controlar espacios o datos incorrectos
		if($_POST)
{
       
if($cod==""){
	echo "<center><font color='red'>Error... Falta llenar el dato del codigo a eliminar...!</font></center>";
}	

else{
	
	$sql="Delete from tb_inscritos  where Id='$cod'"; 
		
		$cs= mysqli_query($cn,$sql); 
		echo "<script> alert('Se eliminaron correctamente los datos')</script>";
}


	}
	}
}

?>
     <center><table border="3" bgcolor="FFFFFF">
     <center><form action="" method="post">
           <tr>
		   <td>Buscar por Cedula:</td>
           <td><center><input type="text" name="txtbuscar" size=40 placeholder="Ingrese numero de cedula buscar"><input type="submit" name="btn1" value="Buscar"></center></td>   
		   </tr>
	
		  
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
		   <td>  <center><input type="submit" name="btn1" value="Nuevo"> <input type="submit" name="btn1" value="Insertar"><input type="submit" name="btn1" value="Actualizar"><input type="submit" name="btn1" value="Listar"><input type="submit" name="btn1" value="Eliminar"><a href="Bienvenidos.php"><input type="button"  value="Cancelar"></center></td>
			</tr>


        </form></center>
		</table></center>
		<br>
   <center><h1><font color="blue">Datos almacenados de los Inscritos al evento de software</font></h1></center>
   <?php
   if(isset($_POST["btn1"]))
{
	$btn1=$_POST["btn1"];
	$bus=$_POST["txtbuscar"];
   if($btn1=="Listar")
	{
		$sql="select *from tb_inscritos";
		
		$cs= mysqli_query($cn,$sql); 
		echo " <center><table border='3' bgcolor='FFFFFF'>
		        <tr>
				<td> Cod</td>
				<td> Nombres</td>
				<td> Apellidos</td>
				<td> Correo</td>
				<td> Fecha de Nacimiento</td>
				<td> Cedula</td>
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
			<td>$var6</td>
			<td>$var7</td>
			<td>$var8</td>
			<td>$var9</td>
			</tr>
			";
			}
			echo "</table>
			</center>";
	}
}
   ?>
