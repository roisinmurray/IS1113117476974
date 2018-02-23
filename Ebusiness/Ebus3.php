<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        
        <style>
        
    body {
    background-image: url("paper.jpg");
} 
    </style>
    </head>
   <body>
       <h4>RECEIPT</h4>
       
       <?PHP
       //Echo seesion variables that were set on previous page
       echo "total is " . $_SESSION["total"] . ".";
       echo "name is " . $_SESSION["name"] . ".";
       echo "email is " . $_SESSION["email"] . ".";
       ?>
   </body>
</html>