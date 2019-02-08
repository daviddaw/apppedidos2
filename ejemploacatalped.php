<?php  
 
// echo"<form action='aca2.php' >"

$servername = "10.129.157.212";
$username =  "root";
$password = "rootroot";
$dbname = "pedidos";


$conexion = mysqli_connect($servername, $username, $password, $dbname);




$lista1=des_listado_productos($conexion);
$lista1=des_listado_productos2($conexion);
$lista1=des_listado_productos3($conexion);
$lista1=des_listado_productos4($conexion);
$lista1=des_listado_productos5($conexion);











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

function des_listado_productos2($conexion) {
$consulta_mysql="select productName from products;";    //seleccionar los articulos



$resultado_consulta_mysql=mysqli_query($conexion,$consulta_mysql);

// print_r($resultado_consulta_mysql);

$fila=mysqli_fetch_array($resultado_consulta_mysql);
echo "<form name='mi_formulario' action='aca2.php' method='post'>";
  echo "<select name='select2'>";
while($fila=mysqli_fetch_array($resultado_consulta_mysql)){   
    echo "<option> ".$fila['productName']."</option>";	
}	
echo "</select>";
echo "<br>";

}




function des_listado_productos3($conexion) {
$consulta_mysql="select productName from products;";    //seleccionar los articulos



$resultado_consulta_mysql=mysqli_query($conexion,$consulta_mysql);

// print_r($resultado_consulta_mysql);

$fila=mysqli_fetch_array($resultado_consulta_mysql);
echo "<form name='mi_formulario' action='aca2.php' method='post'>";
  echo "<select name='select3'>";
while($fila=mysqli_fetch_array($resultado_consulta_mysql)){   
    echo "<option> ".$fila['productName']."</option>";	
}	
echo "</select>";
echo "<br>";

}

function des_listado_productos4($conexion) {
$consulta_mysql="select productName from products;";    //seleccionar los articulos



$resultado_consulta_mysql=mysqli_query($conexion,$consulta_mysql);

// print_r($resultado_consulta_mysql);

$fila=mysqli_fetch_array($resultado_consulta_mysql);
echo "<form name='mi_formulario' action='aca2.php' method='post'>";
  echo "<select name='select4'>";
while($fila=mysqli_fetch_array($resultado_consulta_mysql)){   
    echo "<option> ".$fila['productName']."</option>";	
}	
echo "</select>";
echo "<br>";

}

function des_listado_productos5($conexion) {
$consulta_mysql="select productName from products;";    //seleccionar los articulos



$resultado_consulta_mysql=mysqli_query($conexion,$consulta_mysql);

// print_r($resultado_consulta_mysql);

$fila=mysqli_fetch_array($resultado_consulta_mysql);
echo "<form name='mi_formulario' action='aca2.php' method='post'>";
  echo "<select name='select5'>";
while($fila=mysqli_fetch_array($resultado_consulta_mysql)){   
    echo "<option> ".$fila['productName']."</option>";	
}	
echo "</select>";
echo "<br>";

}











	echo "<input type='submit' value='Enviar'>";
	

//echo '<select name="select1" >'

  

// echo"</select>"; 
// "<br>";

// echo '<select name="select2">';
  

// echo"</select>" ;
// echo "<br>";

// echo '<select name="select3">';

// echo '</select>'; 
// echo "<br>";

// echo '<select name="select4">';

// echo "</select> ";
// echo "<br>";

// '<select name="select5">';

// echo "</select>"; 
// echo "<br>";
// echo "</select> ";


 // echo'<input type="submit">';
//echo "</form>";

?>
