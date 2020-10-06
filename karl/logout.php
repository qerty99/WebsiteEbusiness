<html>
<head>
    <title>Logout</title>
</head>
<body>
    <h1>Logout</h1>
    <?php
        session_start();
        $_SESSION = array();
        session_destroy();
        echo 'Logged out successfully!'
    ?>
    <br></br>
    <a href="index.php">Login</a>
</body>
</html>