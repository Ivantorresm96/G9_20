<?php
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
    header('Access-Control-Allow-Headers: token, Content-Type');
    header('Access-Control-Max-Age: 1728000');
    header('Content-Length: 0');
    header('Content-Type: text/plain');
    die();
  }
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: aplication/json');
    require_once("../config/conexion.php");
    require_once("../models/Ma_materiales.php");
    $materiales= new Materiales();

    $body = json_decode(file_get_contents("php://input"), true);

    switch($_GET["op"]){

    case "GetMateriales":
        $datos=$materiales->get_materiales();
        echo json_encode($datos);
    break;
    
    case "GetUno":
        $datos=$materiales->get_materiales($body["ID"]);
        echo json_encode($datos);
    break;

    case "InsertarMateriales":
        $datos=$materiales->insert_materiales($body["DESCRIPCION"], $body["UNIDAD"],$body["COSTO"],$body["PRECIO"],$body["APLICA_ISV"],$body["PORCENTAJE_ISV"],$body["ESTADO"],$body["ID_SOCIO"]);
        echo json_encode("Material agregado");
    break;

    case "UpdateMateriales":
        $datos=$materiales->update_materiales($body["DESCRIPCION"], $body["UNIDAD"],$body["COSTO"],$body["PRECIO"],$body["APLICA_ISV"],$body["PORCENTAJE_ISV"],$body["ESTADO"],$body["ID_SOCIO"],$body["ID"]);
        echo json_encode("Material actualizado");
    break;

    case "deleteMaterial":
    $datos=$materiales->delete_materiales($body["ID"]);
    echo json_encode("Material borrado");
    break;
}
?>