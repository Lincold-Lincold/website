
<?php

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            exit('Invalid request method.');
        }

        $firstName = trim($_POST['fName'] ?? '');
        $lastName = trim($_POST['lName'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['pass'] ?? '';
        $confirmPassword = $_POST['confirmPass'] ?? '';
        $purpose = $_POST['radioButtonGroup'] ?? '';
        $selectedColors = $_POST['checkBoxOption'] ?? [];




/*
|--------------------------------------------------------------------------
| Basic validation
|--------------------------------------------------------------------------
*/ 

        if($firstName === '' || $lastName === '' || $email === '' || $password === '' || $confirmPassword === '' || $purpose === '' || $selectedColors === ''){
            exit('Sorry but the form submission is invalid please try again');    
        }






 ?>