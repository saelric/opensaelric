<?php


function  consultadirecciones(){

  	include("conexion.php");
    $arreglo= array();
  	$mysqli = conect();
  	if(!$mysqli->connect_error){

  		$query = "SELECT * FROM direcciones";
  		$res = $mysqli->query($query);
  		if($res){
  			$NF = $res->num_rows;
  			for($i=0; $i <$NF; $i++){
  				$arreglo[$i] = $res->fetch_row();
  			}
  		}
  		$res->close();
  		$mysqli->close();
      print_r ($arreglo);
  		return $arreglo;
  	}else{
  		return "sin conexion";
  	}
}

function  insertarcoordenadas(){
	include("conexion.php");
	$mysqli = conect();
    if(!$mysqli->connect_error){
		    $query = "UPDATE `direcciones` SET `latitud`=123,`longitud`=456 WHERE `id` = 1";
        $result = $mysqli -> query($query);
        $mysqli->close();
        return $result;
    }else{
        return "sin conexion";
    }
}
//consultadirecciones();
//insertarcoordenadas();





?>
