<?php
session_start();
include("../config/db.php");

if (isset($_POST)) {
    $date = $_POST["date"];
    $time = $_POST["time"];
    $bloodSugar = $_POST["bloodSugar"];

    $sql = "insert into tracker (date,time,sugar) values ('$date','$time','$bloodSugar')";
    mysqli_query($bdd, $sql);

    mysqli_close($bdd);

    echo '1';
}
