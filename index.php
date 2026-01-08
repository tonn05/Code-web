<?php
include 'includes/header.inc.php';
include 'includes/Navber.inc.php';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    include ('pages/' . $page . '.php');
} else {
    echo '<h1>404 page not found<h1>';
}
include 'includes/footer.inc.php';
?>