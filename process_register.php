<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation Results</title>
</head>
<body>
    <h2 style="display: flex; justify-content: center; font-family:Arial;">Registration Result Pages</h2>
    
</body>
</html>











<?php
    $firstName = $_POST['fName'] ??'';
    $lastName = $_POST['lName'] ??'';
    $email = $_POST['email'] ??'';
    $password = $_POST['pass'] ??'';
    $confirmPassword = $_POST['confirmPass'] ??'';
    $radioButtonItem = $_POST['radioButtonGroup'] ??'';
    $checkBoxItem = $_POST['checkBoxOption'] ?? [];


    echo 'First Name: ' . $firstName;
    echo 'Last Name : ' . $lastName;
    echo 'Email     : ' . $email;
    echo 'Password  : ' . $password;
    echo 'Confirm Password: ' . $confirmPassword;
    echo 'Pupose    : ' .  $radioButtonItem;

    $checkBoxItem = $_POST['checkBoxOption'] ?? [];

        if (empty($checkBoxItem)) {
            echo "<p>No color was selected.</p>";
        } else {
            echo "<p>You selected: "
                . htmlspecialchars(implode(", ", $checkBoxItem))
                . "</p>";
        }
?>