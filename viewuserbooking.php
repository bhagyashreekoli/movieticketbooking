<?php include('connect.php') ?>
<?php
include('header.php');



// Fetch all bookings
$sql = "SELECT * FROM booking ORDER BY id DESC"; // You can filter based on user or booking if needed
$result = $con->query($sql);

// Check if there are any bookings
if ($result->num_rows > 0) {
    // Output each row
    while($row = $result->fetch_assoc()) {
        echo '<div class="ticket">';
        echo '<h2>Ticket Booking Details</h2>';
        echo '<p><strong>Movie Name:</strong> ' . htmlspecialchars($row['moviename']) . '</p>';
        echo '<p><strong>Showtime:</strong> ' . htmlspecialchars($row['showtime']) . '</p>';
        echo '<p><strong>Date:</strong> ' . htmlspecialchars($row['date']) . '</p>';
        echo '<p><strong>Seats:</strong> ' . htmlspecialchars($row['numtickets']) . '</p>';
        echo '</div>';
    }
} else {
    echo "No bookings found.";
}

// Close the connection
$con->close();
?>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .ticket {
        background-color: #ffffff;
        padding: 20px;
        margin: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
    }

    .ticket h2 {
        color:rgb(99, 156, 241);
    }

    .ticket p {
        font-size: 16px;
        margin: 10px 0;
    }

    .ticket strong {
        color: #333;
    }
</style>