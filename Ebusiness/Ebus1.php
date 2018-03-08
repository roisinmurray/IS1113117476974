<!DOCTYPE html>
<html>
    <head>
        <title>Select Project</title>
        
        <!--jQuery-->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
    <style>
        
    /*Styling background image*/
        
    body {
    background-image: url("paper.jpg");
} 

/*Styling the text in forms*/

 form {
    text-align: center;
}

/*Styling the headings(text, color etc)*/

h { 
    text-align: center;
    font-size: 30px;
    color: DarkSlateBlue;
    
    
}

/*Styling the label (text, color etc)*/

label
{
    text-align: center;
    font-size: 25px;
    color: DarkGrey;
}

/*Styling the lists(text, color etc)*/

a{
    text-align: center;
    font-size: 30px;
    color: Plum;
}

li{
       text-align: center;
    font-size: 30px;
    color: Plum;
   float: right;
}

/*Styling the attributes of button(text, color etc)*/

button1{
    text-align: center;
    font-size: 25px;
    color: White;
    background-color: Wheat;
}

button{
    text-align: center;
    font-size: 25px;
    color: White;
    background-color: DarkSlateBlue;
}

div {
    text-align: center;
}

    </style>
    </head>
    <body>
        
<li><a href="../homepage.html">HOME</a></li>

        <br>
        <br>
        
        <form method="POST" action="Ebus2.php">
            
             <!--Adding link to homepage-->
             
             <h><strong>Please Select A Product</strong></h>
            
        <br> 
        <br>
        
         <!--Adding labels for each type of cloud computing/ totals etc-->
         
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" Checked onClick="disablebtnProceed()"/>
                SalesForce @ &euro; 100
            </label>
            
            <br>
            
            <label for="aws">
                <input type="radio" id="aws" name="product" Checked onClick="disablebtnProceed()"/>
                amazon web service @ &euro; 300
            </label>
            
            <br>
            
             <label for="cloud9">
                <input type="radio" id="cloud9" name="product" Checked onClick="disablebtnProceed()"/>
                cloud9 @ &euro; 200
            </label>
            
            <br>
            
             <label for="gmail">
                <input type="radio" id="gmail" name="product" Checked onClick="disablebtnProceed()"/>
                gmail @ &euro; 400
            </label>
            
            <br>
            
            <label for="subtotal">
                Sub Total:
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br>
            
            <label for="VAT">
                VAT:
                
                <input type="text" id="VAT" name="VAT" value="0.00" readonly/>
            </label>
            
            <br>
            
            <label for="discount">
                discount:
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
            
            <br>
            
            <label for="total">
                Total:
                <input type="text" id="total" name="total" value="0.00" readonly/>
                <br>
            </label>
                <br>
                <br>
                
                <!--Adding button to form-->
                
                  <button type ="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
             <br/>
             
             <!--Adding button to form-->
             
        <button1 onClick="calcSub()">Calculate Cost</button1>
        <a role="button" href="Ebus1.php">Clear Choice</a>
      
        </form>
        
        
        
        
    </body>
    
</html>