<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
   <body>
       <h4>RECEIPT</h4>
       
       <?PHP
       //Echo seesion variables that were set on previous page
       echo "Total is " . $_SESSION["total"] . ".";
       ?>
   </body>
</html>