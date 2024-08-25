<?php

$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'vellor';

$con = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);

if ($con) {
  //  echo "connection ok.";
  }
  else
  {
    echo "connection not ok";
  }
?>