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
        
       <center> <div id="header">
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
            
          
 


<br>
<br>

<br>
<br>
<center><h1><font color="blue">Registro de Cuentas de Usuarios </font> </h1></center>
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
		if($_POST)
{
       
if($bus==""){
	echo "<font color='red'>Error... Falta llenar el Login a buscar...!</font>";
}	

else{
		$sql="select *from tb_usuarios where Login='$bus'";
		//$cs=mysql_query($cn,$sql);
		$cs= mysqli_query($cn,$sql); 
			while($resul=mysqli_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
							
			}
}
}
			
	}
	//Generar codigo de numero o cupo 

	
	if($btn1=="Nuevo")
	{
		$sql="select Id from tb_usuarios";
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
	if($btn1=="Insertar")
	{
		$cod=$_POST["txtcodigo"];
		$nom=$_POST["txtNombres"];
		$ape=$_POST["txtApellidos"];
		$cor=$_POST["txtCorreo"];
		
		if($_POST)
{
       
  if($cod==""||$nom==""||$ape==""||$cor==""){
	echo "<font color='red'>Error... Falta llenar los datos de los campos o de algun campo revise por favor...!</font>";
} 
else{
		$sql="Insert into tb_usuarios value('$cod','$nom','$ape','$cor')";
		
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
		
		 if($cod==""||$nom==""||$ape==""||$cor==""){
	echo "<font color='red'>Error... Falta llenar los datos de los campos o de algun campo revise por favor...!</font>";
} 
else{
		$sql="Update tb_usuarios set Login='$nom', Contrasena='$ape', Tipo='$cor' where Id='$cod'"; 
		
		$cs= mysqli_query($cn,$sql); 
		echo "<script> alert('Se actualizaron correctamente los datos')</script>";
	}
}

	
	//codigo para eliminar los datos de la base de datos 
	
	if($btn1=="Eliminar")
	{
		$cod=$_POST["txtcodigo"];
		 if($cod==""){
	echo "<font color='red'>Error... Falta llenar los datos de del codigo a eliminar revise por favor...!</font>";
} 
else{
		$sql="Delete from tb_usuarios  where Id='$cod'"; 
		
		$cs= mysqli_query($cn,$sql); 
		echo "<script> alert('Se eliminaron correctamente los datos')</script>";
	}
	}
}
?>
     <center><table border="1" bgcolor="FFFFFF">
     <center><form action="" method="post">
           <tr>
		   <td>Buscar por Login:*</td>
           <td><center><input type="text" name="txtbuscar" size=40 placeholder="Ingrese login a buscar"><input type="submit" name="btn1" value="Buscar"></center></td>   
		   </tr>
	
		  
           <tr>
		   <td>Codigo:*</td>
		   <td><center><input type="text" name="txtcodigo"  placeholder="Ingrese un codigo o presione el boton Nuevo" value="<?php echo $var?>" size=50> </center></td>
		   </tr>
		   
		   <tr>
		   <td>Login:*</td>
		   <td><center><input type="text" name="txtNombres" value="<?php echo $var1?>" size=50 placeholder="Ingrese el Login"> </center></td>
		   </tr>
		   
		   
           <tr>
		   <td>Password:*</td>
		   <td><center><input type="text" name="txtApellidos" value="<?php echo $var2?>" size=50 placeholder="Ingrese su password"> </center></td>
		   </tr>
	   
	   	 
           <tr>
		   <td>Tipo:*</td>
		   <td><center><input type="text" name="txtCorreo" value="<?php echo $var3?>" size=50 placeholder="Ingrese el tipo de usuario"> </center></td>
		   </tr>
		  	   
		   <tr>
		   <td>
		   </td>
		   <td>  <center><input type="submit" name="btn1" value="Nuevo"> <input type="submit" name="btn1" value="Insertar"><input type="submit" name="btn1" value="Actualizar"><input type="submit" name="btn1" value="Listar"><input type="submit" name="btn1" value="Eliminar"><a href="Bienvenidos.php"><input type="button"  value="Cancelar"></center></td>
			</tr>
	   	  
        </form></center>
		</table></center>
		<br>
   <center><h1><font color="blue">Datos almacenados de las cuentas de usuarios</font></h1></center>
   <?php
   if(isset($_POST["btn1"]))
{
	$btn1=$_POST["btn1"];
	$bus=$_POST["txtbuscar"];
   if($btn1=="Listar")
	{
		$sql="select *from tb_usuarios";
		
		$cs= mysqli_query($cn,$sql); 
		echo " <center><table border='3' bgcolor='FFFFFF'>
		        <tr>
				<td> Cod</td>
				<td> Login</td>
				<td> Password</td>
				<td> Tipo de usuario</td>
				
				
				</tr>
		";
			while($resul=mysqli_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			
			
			echo "<tr>
			<td>$var</td>
			<td>$var1</td>
			<td>$var2</td>
			<td>$var3</td>
			
			
			</tr>
			";
			}
			echo "</table>
			</center>";
	}
}
   ?>
       </body>
</html>
