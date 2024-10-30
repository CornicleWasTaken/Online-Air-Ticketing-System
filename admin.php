<?php
        include 'connect.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
                    echo '</tr>';
                }
                echo '</tbody></table></div>';
            }
            
            else {
                echo '<div class="alert alert-warning">No flights found</div>';
            }

        }

        elseif (isset( $_POST['admin'])) {
            header('location: manager.php');
        }
    ?>