<?php

include "koneksi.php";

$username = $_GET['username'];

$data = mysqli_query($konksi, "SELECT * FROM user WHERE username");

while ($result=mysqli_fetch_array($data)) {
    echo $result['username'];
    echo "|";
    echo $result['userpassword'];
    echo "|";
    echo $result['fullname'];

}

?>