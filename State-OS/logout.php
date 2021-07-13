<?php
include ('path.php');
include (ROOT_PATH . "/app/database/db.php");

unset($_SESSION['id']);
unset ($_SESSION['firstname']);
unset ($_SESSION['secondname']);
unset ($_SESSION['admin']);


unset ($_SESSION['message']);
unset ($_SESSION['type']);

session_destroy();
header('location: ' .BASE_URL . '/index.php');
?>