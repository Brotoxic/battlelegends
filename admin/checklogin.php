<?php

ob_start();
session_start();
include_once 'config.php';

// Connect to server and select databse.
try {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $db = new PDO('mysql:host=' . $host . ';dbname=' . $db_name . ';charset=utf8', $username, $password);
} catch (Exception $e) {
    die('Error : ' . $e->getMessage());
}

// Define $myusername and $mypassword 
$myusername = $_POST['myusername'];
$mypassword = $_POST['mypassword'];


// To protect MySQL injection
$myusername = stripslashes($myusername);
$mypassword = md5($mypassword);


$stmt = $db->query("SELECT * FROM $tbl_name WHERE username='$myusername' AND password='$mypassword' AND id_roles IN(1,3)");

// rowCount() is counting table row
$count = $stmt->rowCount();

// If result matched $myusername and $mypassword, table row must be 1 row
if ($count == 1) {
    // Register $myusername, $mypassword and print "true"
    echo "true";
    $_SESSION['username'] = $_POST['myusername'];
    $_SESSION['password'] = $_POST['mypassword'];
} else {
    //return the error message
    echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Vous n'êtes pas autorisé à accéder au panel administrateur !</div>";
}



ob_end_flush();
?>
