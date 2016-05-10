<?php
include("mysqlConexion.php");
$cn=conectar1();


?>
<?php 

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
    </body>
</html>
<br>
<br>
  <center><h1><font color="blue">Datos almacenados de las cuentas de usuarios</font></h1></center>
 <?php
 


$sql="select *from tb_usuarios";
		
		$cs= mysqli_query($cn,$sql); 
		echo " <center><table border='3' bgcolor='FFFFFF'>
		        <tr>
				<td> Cod</td>
				<td> Login</td>
				<td> Password</td>
				<td> Tipo de Usuario</td>
				
				</tr>
		";
			while($resul=mysqli_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			;
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
   ?>
 
