
<?php

include 'config.php';
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$isConnectrd=false;
//testing connection success
if(mysqli_connect_errno()) {
    die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" );
        }
        else
        {
            $isConnectrd=true;
        
        }
    




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 if ($isConnectrd) echo "<h1>connected</H1>"
 ?>
 <?php
    //get data from DB
    $query = "SELECT * FROM nir";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("DB query failed.");
    }
    print_r($result);
    //release returned data
    mysqli_free_result($result);


 ?>
</body>
</html>

<?php
//close DB connection
mysqli_close($connection);
?>
