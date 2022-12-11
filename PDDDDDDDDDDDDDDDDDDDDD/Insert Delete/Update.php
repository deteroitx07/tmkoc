<?php
    include "config.php";

    $roll = $_GET['roll'];
    $table = $_GET['table'];

    $sql = "SELECT * FROM ".$table." where rollno=".$roll;
    $result = $link->query($sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
       <h2>User Update Form</h2>   

       <form method="POST">
        <table class="table">
                <tr>
                    <td>Name</td>
                    <td><input name='name' value='<?php echo $row['Name'];?>'></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input name='email' value=<?php echo $row['Email'];?>></td>
                </tr>
                <tr>
                    <td>Ph no</td>
                    <td><input type=number name='ph' value=<?php echo $row['Ph'];?>></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button name="update" type="submit">Update</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $ph = $_POST['ph'];

    $sql = "UPDATE ".$table." SET name='$name', email='$email', ph='$ph' WHERE rollno='$roll'";
    $result = $link->query($sql);

    if ($result == TRUE)
    {
        header("Location: Index.php");
    }
    else
    {
        echo "Error in updating record.";
    }
}
?>
