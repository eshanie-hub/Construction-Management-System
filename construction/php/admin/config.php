<?php

$con = new mysqli("localhost", "root", "", "admindb");


$sql = "SELECT * FROM infotb";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0){
    return $result;
}

?>

