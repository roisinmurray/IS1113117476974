<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        
        <style>
        
        /*Styling background*/
        
    body {
    background-image: url("background1.jpg");
} 

/*Styling the forms(text, color etc)*/

 form {
    text-align: center;
}

/*Styling attributes such as (text, color etc)*/

div {
    text-align: center;
    font-size: 30px;
    color: DarkGrey;
    
}

/*Styling the headings(text, color etc)*/

h {
    text-align: center;
    font-size: 35px;
    color: DarkSlateBlue;
    
}

/*Styling the labels(text, color etc)*/

label
{
    text-align: center;
    font-size: 25px;
    color: DarkGrey;
}

/*Styling attributes of the button(text, color etc)*/

button{
    text-align: center;
    font-size: 25px;
    color: White;
    background-color: Wheat;
}

/*Styling lists(text, color etc)*/

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
    
     <!--Adding link to homepage-->            

<li><a href="../homepage.html">HOME</a></li>
<br>
<br>
<br>

<!--Creating receipt--> 

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