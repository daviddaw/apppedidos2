 <?php
 		// if(isset($_REQUEST['nombreDepartamento'])==true){
		  // $customerNumber=$_REQUEST['nombreDepartamento'];
		
		// }//comprueba si una variable tiene valor o no
  $customerNumber=103;
 
 
 
 
$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "pedidos";


$conexion = mysqli_connect($servername, $username, $password, $dbname);




des_listado_productos($conexion);
des_listado_productos($conexion);
des_listado_productos($conexion);
des_listado_productos($conexion);
des_listado_productos($conexion);





function des_listado_productos($conexion) {
$consulta_mysql="select productName from products;";    //seleccionar los articulos



$resultado_consulta_mysql=mysqli_query($conexion,$consulta_mysql);

// print_r($resultado_consulta_mysql);

$fila=mysqli_fetch_array($resultado_consulta_mysql);
echo "<form name='mi_formulario' action='aca2.php' method='post'>";
  echo "<select name='select1'>";
while($fila=mysqli_fetch_array($resultado_consulta_mysql)){   
    echo "<option> ".$fila['productName']."</option>";	
}	
echo "</select>";
echo "<br>";

}
	echo "<input type='submit' value='Enviar'>";
	

?> 


