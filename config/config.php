<?php
/* database credentials. Assuming you are running MySQL server with deafult setting (user 'root' with no password )*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'mafundi');

/* Attempt to connect to MySQL database*/
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//CHECK CONNECTION
if ($link ===false){
    die("ERROR: could not connect.".mysqli_connect_error ());
}
?>
