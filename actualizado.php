<?php
include("conexion.php");



$sql="UPDATE usuarios SET email='$email' WHERE dni='$dni'";

if(mysqli_query($conn,$sql)){
echo "listo archivo actualizado";
}else{
	echo "error";
}
?>