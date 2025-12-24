<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    if (empty($username)) {
        echo "Username is missing.";
    } else {
        echo "Hello {$username}";
    }
}
?>