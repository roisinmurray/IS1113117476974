<?php
//start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <style>
        
    body {
    background-image: url("paper.jpg");
} 
    </style>
    
    </head>
    
    <body>
        
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method = "POST" action = "Ebus3.php">
                
                <label for="user_pin">
                     PIN 
                </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                
                
                
                
                <label for="email">
                     EMAIL
                </label>
                
                <input type="text" id="user_email" placeholder="email" >
                
                
                
                <label for="name">
                     NAME 
                </label>
                
                <input type="text" id="user_name" placeholder="name" >
                
                
                
                    
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br />
            
            <button onClick="validateDetails()"> Validate </button>
            
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <?php
            // Sat session variables
            $_SESSION["total"] = $_POST["total"];
            $_SESSION["name"] = $_POST["name"];
            $_SESSION["email"] = $_POST["email"];
            ?>
    </body>
    
    
    
</html>