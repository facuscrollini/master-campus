<?php 
/*
INSERT INTO "programs" ("program_name")
VALUES ('Sitio Web con PHP') RETURNING "id";
*/

include_once '../config/bd.php';
$conexionBD= BaseData::crearInstancia();

print_r($_POST)


?>