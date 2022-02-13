<?php

require 'models/thronesDB.php';

$DB=new thronesDB();
$resultado= $DB->titles();



include 'views/index.php';


?>