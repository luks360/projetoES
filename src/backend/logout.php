<?php

//logout.php

include('config.php');

//Reset OAuth access token
$google_client->revokeToken();

//Destroy entire session data.
session_destroy();

//redirect page to index.php
header('location: http://localhost:80/ProjetoES/src/frontend/views/pages/index.php');
die();

?>