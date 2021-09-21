<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'C:/xampp/htdocs/ProjetoES/public/vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID | Copiar "ID DE CLIENTE"
$google_client->setClientId('469673828599-qsk5o17sgmtifbgglfdl85bto9e0s776.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('EZ5s-47iqLE4ggA7VM5nN7rJ');

//Set the OAuth 2.0 Redirect URI | URL AUTORIZADO
$google_client->setRedirectUri('http://localhost:80/ProjetoES/src/frontend/views/pages/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>