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