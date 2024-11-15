<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Flight</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
            padding: 30px;
        }
        h1 {
            color: #007bff;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="text-center mb-4">
            <h1>Insert Flight Details</h1>
        </header>
        <main>
            <form action="insert_flight.php" method="post">
                <div class="form-group">
                    <label for="flight_number">Flight Number:</label>
                    <input type="text" id="flight_number" name="flight_number" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="from_city">From City:</label>
                    <input type="text" id="from_city" name="from_city" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="to_city">To City:</label>
                    <input type="text" id="to_city" name="to_city" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="seats_available">Seats Available:</label>
                    <input type="number" id="seats_available" name="seats_available" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Insert Flight</button>
            </form>
        </main>
    </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $flight_number = $_POST['flight_number'];
  $from_city = $_POST['from_city'];
  $to_city = $_POST['to_city'];
  $date = $_POST['date'];
  $seats_available = $_POST['seats_available'];

  $conn = new mysqli('localhost','root','root','oats');
  if ($conn->connect_error) {
    die('Connection Failure: '. $conn->connect_error);
  }
  else {
  $stmt = $conn -> prepare('INSERT INTO flights (flight_number, from_city, to_city, date, seats_available) values (?,?,?,?,?)');
  $stmt->bind_param('ssssi', $flight_number, $from_city, $to_city, $date, $seats_available);

  if ($stmt->execute()) {
    echo '<div class="alert alert-success">Flight Inserted Successfully!</div>';
  }
  else {
    echo '<div class="alert alert-success">Error:'. $stmt->error.'</div>';
  }
  $stmt->close();
  $conn->close();

  }
}








?>