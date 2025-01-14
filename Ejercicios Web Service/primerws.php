<?php

header('Content-type: application/json');

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        echo json_encode(["message" => "Hola mundo"]);
        break;

    case 'POST':
        http_response_code(405);
        echo json_encode(["message" => "Método no permitido"]);
        break;

    default:
        echo json_encode(["message" => "Método no permitido"]);
        break;
}
?>
