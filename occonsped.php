 <?php
 		// if(isset($_REQUEST['nombreDepartamento'])==true){
		  // $customerNumber=$_REQUEST['nombreDepartamento'];
		
		// }//comprueba si una variable tiene valor o no
  $customerNumber=103;
 
 
 
 
$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "pedidos";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//$sql = "select orderNumber, orderDate, status from orders where customerNumber=$customerNumber;";
 $sql = "select  orderLineNumber,productName,quantityOrdered, priceEach, orders.orderNumber, orderDate, status from orders, orderdetails, products where customerNumber=$customerNumber  and orders.orderNumber=orderDetails.orderNumber and orderDetails.productCode=products.productCode;";
$resultado = mysqli_query($conn, $sql);//resultset

if (mysqli_num_rows($resultado) > 0) {

	
	
    while($fila = mysqli_fetch_assoc($resultado)) {//recorre la tabla almacenasda en memoria fila a fila
        echo "Numero de pedido: " . $fila["orderNumber"]. " - Fecha del pedido: " . $fila["orderDate"]. " - Status: " . $fila["orderDate"]. " ";
		echo "Numero de linea: " . $fila["orderLineNumber"]. " - Cantidad Pedida: " . $fila["quantityOrdered"]. " - Precio Unidad: " . $fila["priceEach"]. "<br>";
		
    }
} else {
    echo "No existe";
}

mysqli_close($conn);
// Falta validar el campo vacio;
?> 


