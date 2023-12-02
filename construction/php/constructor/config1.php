<!-- constructor connection -->
<?php
$con = new mysqli("localhost", "root", "", "constructor");
$sql = "SELECT * FROM tooltb";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0){
    return $result;
}else{
    echo "No values";
}


?>