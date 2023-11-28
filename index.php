<?php
    include_once("dbconnection/mysqlconfig_connection.php");
    include_once("functions/fetch.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample CRUD</title>
</head>
<body>
    <h1 style="text-align: center;">MY SUBJECTS</h1>
    <table width = '100%' border=1.5>
    <tr style="text-align: center;" bgcolor='#CCCCCC' color='#000000'>
        <td style="font-weight: bold;">ID</td>
        <td style="font-weight: bold;">Subject Code</td>
        <td style="font-weight: bold;">Subject Name</td>
        <td style="font-weight: bold;">Syllabus ID</td>
        <td style="font-weight: bold;">Syllabus Code</td>
        <td style="font-weight: bold;">Syllabus Author</td>
        <td style="font-weight: bold;" width="15%">Action</td>
    </tr>

        <?php
            while($res = mysqli_fetch_array($result))   {
                echo "<tr>";
                echo "<td>".$res['Subject_ID']."</td>";
                echo "<td>".$res['Subject_Code']."</td>";
                echo "<td>".$res['Subject_Name']."</td>";
                echo "<td>".$res['syllabus_id']."</td>";
                echo "<td>".$res['syllabus_code']."</td>";
                echo "<td>".$res['syllabus_author']."</td>";
                echo "<td><a href=\"forms/editform.php?id=".$res['Subject_ID']."\">Edit</a> |
                        <a href=\"functions/delete.php?id=".$res['Subject_ID']."\"
                        onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
            }
        ?>
    </table><br/>
    <a href="forms/addform.php">ADD SUBJECT</a><br/>
    <a href="forms/addsyllabusform.php">ADD SYLLABUS</a>
</body>
</html>