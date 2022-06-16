<?php
session_start();

if (!isset($_COOKIE[$_POST['login']])) {
    setcookie($_POST['login'], 1, time() + 60 * 60);
} else {
    setcookie($_POST['login'], $_COOKIE[$_POST['login']] + 1, time() + 60 * 60);
}

if (!isset($_SESSION[$_POST['login']])) {
    $_SESSION[$_POST['login']] = 1;
} else {
    $_SESSION[$_POST['login']]++;
}

echo('<p>Cookie counter: ' . $_COOKIE[$_POST['login']] . '</p>');
echo('<p>Session counter: ' . $_SESSION[$_POST['login']] . '</p>');

?>