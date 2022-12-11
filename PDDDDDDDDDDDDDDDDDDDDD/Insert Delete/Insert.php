<?php
    include "config.php";
    $roll = $_GET['roll'];
    $table = $_GET['table'];
?>

<!DOCTYPE html>
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
       <h2>Insert new student</h2>

       <form method="POST">
        <table class="table">
                <tr>
                    <td>Roll no.</td>
                    <td><input type='number' name='roll'></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input name='name'></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input name='email'></td>
                </tr>
                <tr>
                    <td>Ph no</td>
                    <td><input type=number name='ph'></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button name="Insert" type="submit">Insert</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
if(isset($_POST['Insert']))
{
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $ph = $_POST['ph'];

    $sql = "INSERT into ".$table." (rollno, name, email, ph) values('$roll', '$name', '$email', '$ph')" ;
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
