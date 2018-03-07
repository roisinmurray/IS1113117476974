<!DOCTYPE html>
<html>
    <head>
        <title>Select Project</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
    <style>
        
    body {
    background-image: url("paper.jpg");
} 
 form {
    text-align: center;
}

h {
    text-align: center;
    font-size: 30px;
    color: DarkSlateBlue;
    
}

label
{
    text-align: center;
    font-size: 25px;
    color: DarkGrey;
}

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
        <link rel="ebusstyle" href="ebusstyle.css" type="text/css">
        <form method="POST" action="Ebus2.php">
            
            <li><a href="../homepage.html">HOME</a></li>
            <br>
            <br>
           <h><strong>Please Select A Product</strong></h>
        <br> 
        <br>
        
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" Checked onClick="disablebtnProceed()"/>
                SalesForce @ &euro; 100
            </label>
            
            <br>
            
            <label for="amazon web service">
                <input type="radio" id="amazon web service" name="product" Checked onClick="disablebtnProceed()"/>
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
                
                  <button type ="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
             <br/>
        <button1 onClick="calcSub()">Calculate Cost</button1>
        <a role="button" href="Ebus1.php">Clear Choice</a>
       </div>
        </form>
        
        
        
        
    </body>
    
</html>