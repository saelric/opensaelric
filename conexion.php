<?PHP
function  conect($host = "localhost", $user = "root", $psw = "", $db = "opsae"){
	$con = mysqli_connect($host,$user,$psw, $db) or die ("Error de la conexión MySQL");
    mysqli_set_charset($con,'utf8');
	if (!$con){

	}
	return $con;
}

function desconectarBD($con){
	mysqli_close($con);
}


#key=AIzaSyCmePhxhlhCjZWXVNwGQdilkFrL_qZQyfA
?>
