<?php
$dbhost='localhost:3307';
$dbname='info';
$dbusername='root';
$dbpass='';

$conn=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);

if($conn){
   echo "connected";
}else{
    echo "Not connected";
}
?>