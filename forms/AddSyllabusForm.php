<!DOCTYPE html>
<html>
    <head>
        <title>Add Syllabus</title>
    </head>

    <body>
        <h1>Add Syllabus</h1>
        <a href="../index.php">Home</a>
        <br /><br />
        <form action="../functions/AddSyllabus.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>Syllabus Code</td>
                    <td><input type="text" name="code"></td>
                </tr>
                <tr>
                    <td>Syllabus Author</td>
                    <td><input type="text" name="author"></td>
                </tr>
                <tr>
                    <td>Subject</td>
                    <td>
                        <select name="subject" id="">
                            <?php
                                include_once("../dbConnections/mysqlconfig_conn.php");
                                $query = "SELECT * FROM tblsubject";
                                $result = mysqli_query($dbc, $query);
                                while ($res = mysqli_fetch_array($result)) {
                                    echo "<option value=\" ".$res["Subject_ID"]." \">";
                                    echo $res["Subject_Name"];
                                    echo "</ option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
            </table>
        </form>
    </body>

</html>
