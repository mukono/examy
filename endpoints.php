<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: Origin, Content-Type, accept');
header('Access-Control-Allow-Credentials: true');
header("Content-Type: application/json; charset=UTF-8");
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
    $app->get('/', function (Request $request,Response $response) {
			$query = "select* from tbl_facility";
			$stmt = $this->db->query($query);
			$stmt->execute();
			if($stmt){
				$data=$stmt->fetchAll(PDO::FETCH_OBJ);
				$result = array($data);
			}
			echo json_encode($result);
					
});
?>