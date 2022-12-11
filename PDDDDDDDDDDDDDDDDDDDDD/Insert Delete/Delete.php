<?php

    include "config.php";

    $roll = $_GET['roll'];
    $table = $_GET['table'];

    $sql = "DELETE FROM ".$table." where rollno=".$roll;
    $result = $link->query($sql);

    header("Location: Index.php");

?>
