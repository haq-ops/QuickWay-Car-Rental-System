<?php 
session_start();
include('session_customer.php');
include('connection.php');

if (!isset($_SESSION['login_customer'])) {
    session_destroy();
    header("location: customerlogin.php");
}

// Check if order ID and car ID are passed through the URL
if (isset($_GET['id']) && isset($_GET['car_id'])) {
    $orderId = $_GET['id'];
    $carId = $_GET['car_id'];

    // Debugging: Check if order ID and car ID are passed correctly
    if (empty($orderId) || empty($carId)) {
        die("Order ID or Car ID is missing.");
    }

    // Step 1: Update the order status to 'canceled'
    $sql = "UPDATE rentedcars SET return_status = 'canceled' WHERE id = '$orderId'";
    
    if ($conn->query($sql) === TRUE) {
        
        // Step 2: Update the car's availability to 'yes' (available for renting again)
        $sqlUpdateCar = "UPDATE cars SET available = 'yes' WHERE car_id = '$carId'";
        
        if ($conn->query($sqlUpdateCar) === TRUE) {
            // Step 3: Display success message and redirect to the orders page
            echo "<script>alert('Order canceled successfully. The car is now available for renting again.'); window.location.href='myorder.php';</script>";
        } else {
            // Handle error while updating the car availability
            echo "<script>alert('Error updating car availability: " . $conn->error . "'); window.location.href='myorder.php';</script>";
        }

    } else {
        // Handle error while updating the order status
        echo "<script>alert('Error canceling order: " . $conn->error . "'); window.location.href='myorder.php';</script>";
    }
} else {
    // Error message if order ID or car ID is not provided
    die("No order ID or car ID provided.");
}
?>
