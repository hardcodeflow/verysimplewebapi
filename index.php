<?php 

$data=file_get_contents("php://input");


$objeto=json_decode($data);
$respuesta=new stdClass();

if($objeto->operacion=='suma'){

    $respuesta->resultado=$objeto->x+$objeto->y;

}

if($objeto->operacion=='multiplicacion'){

    $respuesta->resultado=$objeto->x*$objeto->y;

}



if($objeto->operacion!='multiplicacion'&&$objeto->operacion!='suma'){

    http_response_code(400);
    $respuesta->mensaje="no exista la operacion";

}




echo json_encode($respuesta);


