<?php
    // including the database connection file
    include_once("../dbConnection/mysqlconfig_connection.php");
    if(isset($_POST["update"])){
        $id = $_POST["id"];
        $code = $_POST["code"];
        $name = $_POST["name"];
        // checking empty fields 
        if(empty($code) || empty($name)) {
            if(empty($code)){
                echo "<font color='red'>Subject Code field is empty.</fonts><br/>";
            }
            if(empty($name)) {
                echo "<font color='red'>Subject Name field is empty.</fonts><br/>";;
        }
    }
    else {
        //updating the table
        mysqli_query($dbc, "UPDATE tblsubject SET subject_code='$code', subject_name='$name' WHERE subject_id='$id'");
        //redirecting to the display page called index.php
        header("Location: ../index.php");
    }
}
?>