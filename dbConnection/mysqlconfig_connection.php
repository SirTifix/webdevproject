<?php
    DEFINE ("DB_USER","root");
    DEFINE ("DB_PASSWORD","root");
    DEFINE ("DB_HOST","localhost");
    DEFINE ("DB_NAME","db");

    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    OR dies('Could not connect to Mysql; ' .mysqli_connect_error());

?>