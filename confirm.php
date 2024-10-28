<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <header class="my-4">
            <h1 class="text-center">Reset Password</h1>
        </header>
        <main>
            <form id="resetPasswordForm" action="confirm.php" method="post" class="form-inline justify-content-center">
                <div class="form-group mx-2">
                    <label for="password" class="sr-only">Enter the One Time Password we sent to the given Email: </label>
                    <input type="text" id="reset" name="resettoken" class="form-control" placeholder="Enter Code" required>
                    <input type="password" id="password" name="password" class="form-controm" placeholder="New Password" required>
                </div>
                <button type="submit" class="btn btn-primary mx-2" name="reset">Reset Password</button>
            </form>
        </main>
    </div>
    <script>
<?php
include 'connect.php';

if (isset($_POST['reset'])) {
    
    $resettoken = $_POST['resettoken'];
    $newPassword = $_POST['password'];
    $newPassword = md5($newPassword);



    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE reset_token='$resettoken' AND reset_token_expiry > NOW()";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $sql = "UPDATE users SET password='$newPassword', reset_token=NULL, reset_token_expiry=NULL WHERE reset_token='$resettoken'";
        if ($conn->query($sql) == TRUE) {
            header("Location: index.php");
        } else {
            echo 'alert("Error Code 69420")';
            header("Location: confirm.php");
        }
    } else {
        echo 'alert("Invalid or expired token. Code: 2293")';
    }

    $conn->close();
}
?>
</script>
</body>
</html>


