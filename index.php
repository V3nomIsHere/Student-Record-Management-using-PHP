<?php
session_start();

include_once "includes/db_connection.php";

if (!isset ($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}

?>
<html>

<head>
    <title>Home Page</title>
    <script src="script.js"></script>
</head>

<body>
    <div id="header"></div>
    
    <div class="container">

        <div class="dashboard-summary">
            <div class="summary-box">
                <h3>Total Students</h3>
                <p>
                    <?php echo $total_students; ?>
                </p>
            </div>
        </div>

    </div>
</body>

<div id="footer"></div>
</html>
