<?php
    include_once("../dbconnection/mysqlconfig_connection.php");
    $id = $_GET['id'];
    mysqli_query($dbc, "DELETE FROM tblsyllabus WHERE Subject_ID = '$id'");
    mysqli_query($dbc, "DELETE FROM tblsubjects WHERE Subject_ID = '$id'");
    header("Location:../index.php");
?>
