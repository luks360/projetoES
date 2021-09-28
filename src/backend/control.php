<?php

$json_file = file_get_contents("http://localhost/API_Easy_service/index.php/servico");   
$json_str = json_decode($json_file, true);
$servicos = $json_str;

?>