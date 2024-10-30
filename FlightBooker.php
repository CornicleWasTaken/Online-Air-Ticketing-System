<?php
include 'connect.php';
if (isset($_POST['flightSearch'])) {
    $from = $_POST['from'];
    $to = $_POST['to'];
    $date = $_POST['date'];


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM flights WHERE from_city='$from' AND to_city='$to' AND date='$date'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Flight: " . $row["flight_number"]. " - From: " . $row["from_city"]. " To: " . $row["to_city"]. " Date: " . $row["date"]. "<br>";
        }
    } else {
        echo "No flights found";
    }

    $conn->close();
}
?>