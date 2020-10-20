<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Enter your username" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <input type="submit" value="Submit">
    </form>
    <?php
        session_start();
        if(isset($_GET['logged']) && $_GET['logged'] === 'false'){
            echo 'Nepavyko prisijungti';
        }
    ?>
</body>
</html>