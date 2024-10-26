<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Ticketing System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to Air Ticketing System</h1>
    </header>
    <main>
        <form id="searchForm" method="post" action="FlightBooker.php">
            <label for="from">From:</label>
            <input type="text" id="from" name="from" required>
            <label for="to">To:</label>
            <input type="text" id="to" name="to" required>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
            <button type="submit" name="flightSearch">Search Flights</button>
        </form>
        <div id="results"></div>
    </main>
    <script src="scripts.js"></script>
</body>
</html>
