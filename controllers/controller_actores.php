<?php

require '../models/thronesDB.php';


$DB = new thronesDB();
$resultado= $DB->cast();


include '../views/actores.php';


?>