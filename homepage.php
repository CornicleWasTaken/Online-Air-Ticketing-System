<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Ticketing System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <header class="my-4">
            <h1 class="text-center">Welcome to Air Ticketing System</h1>
        </header>
        <main>
            <form id="searchForm" class="form-inline justify-content-center">
                <div class="form-group mx-2">
                    <label for="from" class="sr-only">From:</label>
                    <input type="text" id="from" name="from" class="form-control" placeholder="From" required>
                </div>
                <div class="form-group mx-2">
                    <label for="to" class="sr-only">To:</label>
                    <input type="text" id="to" name="to" class="form-control" placeholder="To" required>
                </div>
                <div class="form-group mx-2">
                    <label for="date" class="sr-only">Date:</label>
                    <input type="date" id="date" name="date" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary mx-2" name="search">Search Flights</button>
            </form>
            <div id="results" class="mt-4"></div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./assets/js/script2.js"></script>

    <?php
        include 'connect.php';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $from = $_POST['from'];
            $to = $_POST['to'];
            $date = $_POST['date'];
        

        
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        
            $sql = "SELECT * FROM flights WHERE from_city='$from' AND to_city='$to' AND date='$date'";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                echo '<div class="table-responsive"><table class="table table-striped">';
                echo '<thead><tr><th>Flight Number</th><th>From</th><th>To</th><th>Date</th><th>Seats Available</th></tr></thead><tbody>';
                while($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row["flight_number"] . '</td>';
                    echo '<td>' . $row["from_city"] . '</td>';
                    echo '<td>' . $row["to_city"] . '</td>';
                    echo '<td>' . $row["date"] . '</td>';
                    echo '<td>' . $row["seats_available"] . '</td>';
                    echo '<td> <button onclick="book()"> BOOK </button> </td>';
                    echo '</tr>';
                }
                echo '</tbody></table></div>';
            } else {
                echo '<div class="alert alert-warning">No flights found</div>';
            }

        }
    ?>
</body>
</html>

