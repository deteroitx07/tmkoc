<?php

    include 'config.php';

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
    <h2>CS-A student records</h2>
    <table class="table">
        <thead>
            <th>RollNo</th>
            <th >Name</th>
            <th>Email</th>
            <th>Phone no.</th>
            <th>Action</th>
        </thead>
            <?php
                $sql = "SELECT * FROM csa";
                $result = $link->query($sql);
                $num = mysqli_num_rows ( $result );
                for ($x = 0; $x < $num; $x++) { 
                    $row = mysqli_fetch_array($result); ?>
                    <tr >
                        <td><?php echo $row['RollNo']; ?> </td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Email']; ?> </td>
                        <td><?php echo $row['Ph']; ?></td>
                        <td>
                            <a href="Update.php?roll=<?php echo $row['RollNo']; ?>&table=csa">Edit</a>
                            ||
                            <a href="Delete.php?roll=<?php echo $row['RollNo']; ?>&table=csa">Delete</a>
                        </td>
                    </tr>
            <?php } ?>
        </table>
        <a href="Insert.php?roll=<?php echo $row['RollNo']; ?>&table=csa"?>Insert</a>

    <br><br>
    <h2>CS-B student records</h2>
    <table class="table">
        <thead>
            <th>RollNo</th>
            <th >Name</th>
            <th>Email</th>
            <th>Phone no.</th>
            <th>Action</th>
        </thead>

            <?php
                $sql = "SELECT * FROM csb";
                $result = $link->query($sql);
                $num = mysqli_num_rows ( $result );
                for ($x = 0; $x < $num; $x++) { 
                    $row = mysqli_fetch_array($result); ?>
                    <tr >
                        <td><?php echo $row['RollNo']; ?> </td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Email']; ?> </td>
                        <td><?php echo $row['Ph']; ?></td>
                        <td>
                            <a href="Update.php?roll=<?php echo $row['RollNo']; ?>&table=csb">Edit</a>
                            ||
                            <a href="Delete.php?roll=<?php echo $row['RollNo']; ?>&table=csb">Delete</a>
                        </td>
                    </tr>
            <?php } ?>
        </table>
        <a href="Insert.php?roll=<?php echo $row['RollNo']; ?>&table=csb"?>Insert</a>

    <br><br>

    <h2>CS-C student records</h2>

    <table class="table">
        <thead>
            <th>RollNo</th>
            <th >Name</th>
            <th>Email</th>
            <th>Phone no.</th>
            <th>Action</th>
        </thead>
            <?php
                $sql = "SELECT * FROM csc";
                $result = $link->query($sql);
                $num = mysqli_num_rows ( $result );

                for ($x = 0; $x < $num; $x++) { 
                    $row = mysqli_fetch_array($result); ?>
                    <tr >
                        <td><?php echo $row['RollNo']; ?> </td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Email']; ?> </td>
                        <td><?php echo $row['Ph']; ?></td>
                        <td>
                           <a href="Update.php?roll=<?php echo $row['RollNo']; ?>&table=csc">Edit</a>
                                ||
                            <a href="Delete.php?roll=<?php echo $row['RollNo']; ?>&table=csc">Delete</a>
                        </td>
                    </tr>
            <?php } ?>

        </table>

        <a href="Insert.php?roll=<?php echo $row['RollNo']; ?>&table=csc"?>Insert</a>
    </body>

</html>
