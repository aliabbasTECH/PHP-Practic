<?php

// connect to database
$con = mysqli_connect("localhost","ali","test1234","pizza_"); // connect to db host=localhost ,username=ali,password=test1234,DataBase=pizza_

// check connection
if(!$con){               // if no DB then genrate error
  echo 'Connection error:'.mysqli_connect_error();
}

?>