<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!(is_numeric($_POST['num1']) && is_numeric($_POST['num2']))) {
        echo 'Nieprawidlowe dane';
    }
    else if (isset($_POST['add'])) {
        echo $_POST['num1'] + $_POST['num2'];
    } else if (isset($_POST['sub'])) {
        echo $_POST['num1'] - $_POST['num2'];
    } else if (isset($_POST['mul'])) {
        echo $_POST['num1'] * $_POST['num2'];
    } else if (isset($_POST['div'])) {
        echo $_POST['num1'] / $_POST['num2'];
    }
}

?>