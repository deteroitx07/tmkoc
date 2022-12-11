<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <center>
    <h1>File handling with php</h1>
    <?php
        $myfile = fopen("webtech.txt", "r") or die("Unable to open file!");
        echo fread($myfile, filesize("webtech.txt"));
        fclose($myfile);
    ?> 
       </center> 
        <script src="" async defer></script>

        <footer>
        <p>Jay Pawar<br>
       
    </footer>
    </body>

    
</html>

