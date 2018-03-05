<!DOCTYPE html>
<html>
    <head>
        <title>Select Project</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
    </head>
    
    <style>
        
    body {
    background-image: url("paper.jpg");
} 
.form {
    text-align: center;
}

.label {
    text-align: center;
}

    </style>
    
        <h4>Select a Product</h4>
        
        <br/>
        
        <form method="POST" action="Ebus2.php">
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" Checked onClick="disablebtnProceed()"/>
                SalesForce @ &euro; 100
            </label>
            
            <br/>
            
             <label for="cloud9">
                <input type="radio" id="cloud9" name="product" Checked onClick="disablebtnProceed()"/>
                cloud9 @ &euro; 200
            </label>
            
            <br/>
            
             <label for="amazon web service">
                <input type="radio" id="amazon web service" name="product" Checked onClick="disablebtnProceed()"/>
                amazon web service @ &euro; 300
            </label>
            
            <br/>
            
             <label for="gmail">
                <input type="radio" id="gmail" name="product" Checked onClick="disablebtnProceed()"/>
                gmail @ &euro; 400
            </label>
            
            <br/>
            <br/>
            
            <label for="subtotal">
                Sub Total:
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="VAT">
                VAT:
                <input type="text" id="VAT" name="VAT" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="discount">
                discount:
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="total">
                Total
                <input type="hidden" id="total" name="total" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <button type="submit" id="btnProceed" disabled>Add to shopping cart</button>
            
        </form>
        
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
        
    </body>
    
</html>