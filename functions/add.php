<!DOCTYPE html>
<html>
    <head>
        <title> Add Data </title>
    </head>
    <body>
        <?php
//including the database connection file
include_once("../dbConnection/mysqlconfig_connection.php");

if(isset($_POST["Submit"])){
    $code = $_POST ["code"];
    $name = $_POST ["name"];
    // checking fields
    if (empty($code) || empty($name)) {
        if (empty($code)) {
            echo "<font color=\"red\">Subject Code field is empty.</font><br/>";
        }
        if (empty($name)) {
            echo "<font color=\"red\">Name field is empty.</font><br/>";
        }
        echo "<br> <a  href='javascript:self.history.back();'> Go Back</a>";
    }
    else{
        //if all fields are filled (not empty)
        //insert data to database
        $result = mysqli_query($dbc, "INSERT INTO tblsubjects(subject_code, subject_name) VALUES('$code','$name')");
        //display success message
        echo "<font color='green'> Data added successfully.";
        echo "<br/><a href='../functions/index.php>View Result </a>";
    }
    
}

?>
 </body>
</html>