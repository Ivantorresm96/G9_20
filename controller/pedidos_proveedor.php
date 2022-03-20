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
    header('Content-Type: application/json');

    require_once("../config/conexion.php");
    require_once("../models/pedidos_proveedor.php");
    $proveedor= new proveedor();

    $body = json_decode(file_get_contents("php://input"),true);

    switch($_GET["op"]){

      case "GetProveedor";
      $datos=$proveedor->get_proveedor();
      echo json_encode($datos);
     break;

     case "GetProvedor";
       $datos=$proveedor->get_proveedor($body["ID"]);
       echo json_encode($datos);
     break;

     case "InsertProveedor";
       $datos=$proveedor->insert_proveedor($body["ID_SOCIO"],$body["FECHA_PEDIDO"],$body["DETALLE"],$body["SUB_TOTAL"],$body["TOTAL_ISV"],$body["TOTAL"],$body["FECHA_ENTREGA"],$body["ESTADO"]);
       echo json_encode("Proveedor Agregado");
     break;

     case "UpdateProveedor";
       $datos=$proveedor->update_proveedor($body["id"], $body["id_socio"],$body["FECHA_PEDIDO"],$body["DETALLE"],$body["SUB_TOTAL"],$body["TOTAL_ISV"],$body["TOTAL"],$body["FECHA_ENTREGA"],$body["ESTADO"]);
       echo json_encode("Proveedor Actualizado");
     break;

     case "DeleteProveedor";
       $datos=$proveedor->delete_proveedor($body["id"]);
       echo json_encode("Proveedor Eliminado");
     break;

    }  
?>