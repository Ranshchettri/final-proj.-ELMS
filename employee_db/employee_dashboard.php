<?php
session_start();

// Check if user is logged in and has the employee role
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'employee1') {
    header("Location: ../login_pg/login.html");
    exit();
}
?>
<h1>Welcome, employee!</h1>
<a href="../login_pg/login.html">Logout</a>
