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
            <form id="searchForm" class="form-inline justify-content-center" method="POST" action="admin.php">
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
                <button type="submit" class="btn btn-primary mx-2">Search Flights</button>
                <button type="button" class="btn btn-primary mx-2" name="">Admin Control</button>
            </form>
            <div id="results" class="mt-4"></div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./assets/js/script2.js"></script>


</body>
</html>

