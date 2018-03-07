<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        
        <style>
        
    body {
    background-image: url("background1.jpg");
} 

 form {
    text-align: center;
}

div {
    text-align: center;
    font-size: 30px;
    color: DarkGrey;
    
}

h {
    text-align: center;
    font-size: 35px;
    color: DarkSlateBlue;
    
}

label
{
    text-align: center;
    font-size: 25px;
    color: DarkGrey;
}



button{
    text-align: center;
    font-size: 25px;
    color: White;
    background-color: Wheat;
}

li{
     text-align: center;
    font-size: 30px;
    color: Plum;
   float: right;
}
a{
    text-align: center;
    font-size: 30px;
    color: Plum;
}
    </style>
    </head>
   <body>
                

<li><a href="../homepage.html">HOME</a></li>
<br>
<br>
<br>
        <div id="receipt">
             <h>Here is your receipt</h> 
<br>
       
      <?php
            //Echo session variables that were set on previous page
            echo "Subtotal is " . $_SESSION["subtotal"]; ?>
            <br/>
           <?php echo "VAT is " . $_SESSION["VAT"]; ?>
            <br/>
           <?php echo "Discount is " . $_SESSION["discount"]; ?>
            <br/>
            <?php echo "Total is " . $_SESSION["total"] . "."; ?>
        </div>   

   </body>
</html>