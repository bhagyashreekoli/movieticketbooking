<?php
include('header.php');
include('connect.php');

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $moviename = $_POST['moviename'];
    $showtime = $_POST['showtime'];
    $date = $_POST['date'];
    $numtickets = $_POST['numtickets'];
    $cardname = $_POST['cardname'];
    $cardnum = $_POST['cardnum'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $cvv = $_POST['cvv'];

    $sql = "INSERT INTO booking (moviename, showtime, date, numtickets, cardname, cardnum, month, year, cvv) 
            VALUES ('$moviename', '$showtime', '$date', '$numtickets', '$cardname', '$cardnum', '$month', '$year', '$cvv')";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Booked successfully!'); window.location.href='viewuserbooking.php';</script>";
    } else {
        echo "<script>alert('Booking failed: " . mysqli_error($con) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <style>
       
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .submit-btn {
            background-color: #4070f4;
            color: white;
            padding: 15px 32px;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            margin: 12px 0;
            cursor: pointer;
            border-radius: 8px;
        }
        .submit-btn:hover {
            background-color: rgb(101, 141, 251);
        }
        .ticket-price {
            font-weight: bold;
            margin-top: 10px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 4px;
        }
    </style>
    <script>
        function updateTicketPrice() {
            const ticketPrice = 200;
            const numTickets = document.getElementById("numtickets").value;
            const totalPrice = ticketPrice * numTickets;
            document.getElementById("total-price").innerText = `Total Price: ₹${totalPrice}`;
        }
    </script>
</head>
<body>

  <div class="container">
    
    <form action="" method="POST">
      <!-- [your full form here, same as before] -->
    </form>
  </div>

    <div class="container">
        <h1>Movie Ticket Booking</h1>
        <form action="" method="POST">
            <label for="moviename">Movie Name</label>
            <select id="moviename" name="moviename" required>
                <option value="Sky Force">Sky Force</option>
                <option value="Mukkam Post Devach Ghar">Mukkam Post Devach Ghar</option>
                <option value="Captain America: Brave New World">Captain America: Brave New World</option>
                <option value="Fussclass Dabhadev">Fussclass Dabhadev</option>
                <option value="Deva">Deva</option>
                <option value="Loveyapa">Loveyapa</option>
                <option value="Furiosa: A Mad Max Saga">Furiosa: A Mad Max Saga</option>
                <option value="Baipan Bhari Deva">Baipan Bhari Deva</option>
                <option value="Chhava">Chhava</option>
                <option value="Venom: The Last Dance">Venom: The Last Dance</option>
                <option value="Baby John">Baby John</option>
                <option value="Smile 2">Smile 2</option>
            </select>

            <label for="showtime">Showtime</label>
            <select id="showtime" name="showtime" required>
                <option value="10:00 AM">10:00 AM</option>
                <option value="1:00 PM">1:00 PM</option>
                <option value="4:00 PM">4:00 PM</option>
                <option value="7:00 PM">7:00 PM</option>
            </select>

            <label for="date">Date</label>
            <input type="date" id="date" name="date" required>

            <label for="numtickets">Number of Tickets</label>
            <input type="number" id="numtickets" name="numtickets" min="1" max="10" required oninput="updateTicketPrice()">

            <div class="ticket-price" id="total-price">Total Price: ₹0</div>

            <h3 class="title" style="color:#4070f4;font-size:25px;"><u>Payment Process</u></h3>

            <label for="cardname">Name On Card:</label>
            <input type="text" id="cardname" name="cardname" placeholder="Enter name" required>

            <label for="cardNum">Credit Card Number:</label>
            <input type="text" id="cardNum" name="cardnum" placeholder="1111-2222-3333-4444" maxlength="19" required>

            <label for="month">Exp Month:</label>
            <select name="month" id="month" required>
                <option value="">Choose month</option>
                <?php
                $months = ["January", "February", "March", "April", "May", "June",
                           "July", "August", "September", "October", "November", "December"];
                foreach ($months as $m) {
                    echo "<option value='$m'>$m</option>";
                }
                ?>
            </select>

            <label for="year">Exp Year:</label>
            <select name="year" id="year" required>
                <option value="">Choose Year</option>
                <?php
                for ($y = date('Y'); $y <= date('Y') + 5; $y++) {
                    echo "<option value='$y'>$y</option>";
                }
                ?>
            </select>

            <label for="cvv">CVV</label>
            <input type="number" id="cvv" name="cvv" placeholder="123" required>

            <button type="submit" class="submit-btn" name="submit">Pay and Book</button>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- [styles + JS same as before, no changes] -->
</head>

</html>
<?php include('footer.php');?>

