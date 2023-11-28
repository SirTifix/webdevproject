<!DOCTYPE html>
<html>
<head>
    <title>Add Data</title>
</head>
    <body>
        <?php
            include_once("../dbConnection/mysqlconfig_connection.php");

            if(isset($_POST['Submit'])) {
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
                    $result = mysqli_query($dbc, "INSERT INTO tblsubjects(Subject_Code, Subject_Name) VALUES('$code','$name')");

                    echo "<p style='color: green; font-size: 1.5em;'>Data added successfully!</p>";
                    echo "<a href='../index.php' style='color: blue; font-size: 1.3em;'>View Results</a>";
                }
            }
        ?>
    </body>
</html>
