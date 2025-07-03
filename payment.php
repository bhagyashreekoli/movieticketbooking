<?php include('header.php') ?>
<html>
    <head>
        <style>
           
.col .form {
    width: 500px;
    padding: 20px;
    background: #fff;
    box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2);
    align-items: center
    
}

.container form .row {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
   
}

.container form .row .col {
    flex: 1 1 250px;
}

.col .title {
    font-size: 25px;
    color: rgb(26, 132, 203);
    padding-bottom: 5px;
    text-align: center;
}

.col .inputBox {
    margin: 15px 0;
}

.col .inputBox label {
    margin-bottom: 10px;
    display: block;
}

.col .inputBox input,
.col .inputBox select {
    width: 100%;
    border: 1px solid #ccc;
    padding: 10px 15px;
    font-size: 15px;
}

.col .inputBox input:focus,
.col .inputBox select:focus {
    border: 1px solid black;
}

.col .flex {
    display: flex;
    gap: 15px;
}

.col .flex .inputBox {
    flex: 1 1;
    margin-top: 5px;
}

</style>
    </head>
    <!DOCTYPE html>


<body>
    <div class="container">

        <form action="viewuserbooking.php" method="post">

            <div class="row">

                
                <div class="col">
                    <h3 class="title"><u>Payment Process</u></h3>

                    

                    <div class="inputBox">
                        <label for="cardName">
                              Name On Card:
                          </label>
                        <input type="text" id="cardName" 
                               placeholder="Enter name" 
                               required>
                    </div>

                    <div class="inputBox">
                        <label for="cardNum">
                              Credit Card Number:
                          </label>
                        <input type="text" id="cardNum" 
                               placeholder="1111-2222-3333-4444" 
                               maxlength="19" required>
                    </div>

                    <div class="inputBox">
                        <label for="">Exp Month:</label>
                        <select name="" id="">
                            <option value="">Choose month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                    </div>


                    <div class="flex">
                        <div class="inputBox">
                            <label for="">Exp Year:</label>
                            <select name="" id="">
                                <option value="">Choose Year</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                            </select>
                        </div>

                        <div class="inputBox">
                            <label for="cvv">CVV</label>
                            <input type="number" id="cvv" 
                                   placeholder="1234" required>
                        </div>
                    </div>

                </div>

            </div>
            <div class="button">
        <input type="Submit" value="PAY">
      </div>

           </div>
            </div>

        </form>

    </div>
    
</script>
</body>
</html>

