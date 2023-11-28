<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
    <body>
        <?php
            include_once("../dbconnection/mysqlconfig_connection.php");

            if(isset($_POST['Submit'])) {
                $id = $_POST['id'];
                $code = $_POST['code'];
                $name = $_POST['name'];

                if(empty($code) || empty($name)) {
                    if(empty($code)) {
                        echo "<p style='color: red; font-size: 1.3em;'>Subject code field is empty.</p>";
                    }
                    if(empty($name)) {
                        echo "<p style='color: red; font-size: 1.3em;'>Subject name field is empty.</p>";
                    }

                    echo "<a href='javascript:self.history.back();' style='color: blue; font-size: 1.3em;'>Go Back</a>";
                }
            else {
                mysqli_query($dbc, "UPDATE tblsubjects SET Subject_Code='$code', Subject_Name='$name' WHERE Subject_ID='$id'");

                header("Location:../index.php");
                }
            }
        ?>
    </body>
</html>
