<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>shirt</title>
</head>
<body>
    <h1> 
        shirt details
    </h1>
    <?php 
    $fn= $_GET["color"];
    echo "<h3>shirt color: ".$fn.".</h3>"; 
        if ($fn=="black"){
       echo "<h3>-No more in stock.</h3>";
        }
    ?> 

    
   <?php echo "<h3> shirt size:" .$_GET["size-select"]. "</h3>"; ?> 
    <?php echo "<h3> shipping:" .$_GET["shipping-select"]. "</h3>"; ?> 
 

</body>
</html>