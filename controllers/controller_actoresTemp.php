<?php

require '../models/thronesDB.php';


$DB = new thronesDB();
$resultado= $DB->seasonEP();


include '../views/actoresTemp.php';


?>