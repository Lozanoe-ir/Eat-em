
<?php
/*
$mysqli = new mysqli("localhost", "root", "", "eatem");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

}else{
	$email=$_POST['forEmail'];
	$pass=$_POST['forPassword'];
	$pass2=$_POST['forPassword'];
	$name=$_POST['forName'];
	$age=$_POST['forEdad'];
	$check=$_POST['forCheck'];
	if (isset($email) and isset($pass) and isset($pass2) and isset($name) and isset($age) and isset($check)) {
		$insert="INSERT INTO  user(email,pass,nombre,edad,news) VALUES('$email','$pass','$name','$age','$check')";
		$resultado=$mysqli->query($insert);
		echo $resultado;

	}
}
*/

$s="localhost";
$bd="eatem";
$u="root";
$p="";

$conexion= mysqli_connect($s,$u,$p,$bd);
if(!$conexion){
	die("Conetion Failed: ".mysqli_connect_error());
}else{
	if(isset($_POST['forEmail']) && isset($_POST['forPassword']) && isset($_POST['forPassword2']) && isset($_POST['forName']) && isset($_POST['forEdad']) && isset($_POST['forCheck'])){
	$email=$_POST['forEmail'];
	$pass=$_POST['forPassword'];
	$pass2=$_POST['forPassword2'];
	$name=$_POST['forName'];
	$age=$_POST['forEdad'];
	$check=$_POST['forCheck'];

	$insert="INSERT INTO  user(email,pass,nombre,edad,news) VALUES('$email','$pass','$name','$age','$check')";
	
	
	if (mysqli_query($conexion,$insert)) {
		echo "Inserted";
		header('Location: http://localhost/index.html');
	}else{
		echo "Error: ".$insert . "<br>" .mysqli_error($conexion);
	}
	mysqli_close($conexion);
	}else{
		echo "Error en los datos";
	}
}

?>
