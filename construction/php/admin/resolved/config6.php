<?php

$con = new mysqli("localhost", "root", "", "admindb1");

//get product from database
$sql = "SELECT * FROM resolvedtb";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0){
    return $result;
}else{
    echo "No values";
}


?>
