<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="style/passwordchange.css">
    <script src="js/passwordchange.js"></script>
    
<body>
    <div class="navbar">
                <a href="index.php">
                <img src="Style/img/GEC.png" class="logo" width="150" height="150" ></a>
            </div>
    <div class="change-password">
        <div class="content">
            <h2>Change Password</h2>
            <hr>
            <br>
            <p>Change your account password here.</p>
            <br>
            <form id="change-password-form">
                <label for="current-password">Current Password:</label>
                <input type="password" id="current-password" name="current-password" required><br>

                <label for="new-password">New Password:</label>
                <input type="password" id="new-password" name="new-password" required><br>

                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required><br><br>

                <button type="submit">Change Password</button>
            </form>
        </div>
    </div>
</body>
</html>
