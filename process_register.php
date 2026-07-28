
<?php
        require_once 'config.php';

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

        if($firstName === '' || $lastName === '' || $email === '' || $password === '' || $confirmPassword === '' || $purpose === ''){
            exit('Sorry but one or more field is empty please try again.');    
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            exit('The email you provided was invalid please try again.');
        }
        
        if($password !== $confirmPassword){
            exit('The password do not match please try again.');
        }

        if(!is_array($selectedColors)){
            $selectedColors = [];
        }
        $favoriteColors = implode(', ', $selectedColors);
        /*
        |-------------------------------------------------------------------------- 
        | SQL
        |--------------------------------------------------------------------------
        */ 

        $sql = "INSERT INTO users
        (first_name, last_name, email, password, purpose, favorite_colors)
        VALUES
        (:firstName, :lastName, :email, :password, :purpose, :favoriteColors)";

        $statement = $pdo->prepare($sql);

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $statement->execute([
        ':firstName' => $firstName,
        ':lastName' => $lastName,
        ':email' => $email,
        ':password' => $hashedPassword,
        ':purpose' => $purpose,
        ':favoriteColors' => $favoriteColors
        ]);

        echo 'Registration successful.';
         /*
        |-------------------------------------------------------------------------- 
        | SQL
        |--------------------------------------------------------------------------
        */ 

        function protectionagainstmalitioustext(String $value):String 
        {
                return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        } 

         /*
            |--------------------------------------------------------------------------
            | End of Basic validation
            |--------------------------------------------------------------------------
            */ 
 ?>
           

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Registration Result</title>
        </head>

        <body>
            <h2 class="registrationResultTitle">Registration Result</h2>

            <p>First Name : <?= protectionagainstmalitioustext($firstName)?> </p>

            <p>Last Name  : <?= protectionagainstmalitioustext($lastName)?> </p>

            <p>Email      : <?= protectionagainstmalitioustext($email)?> </p>
 
            <p>Purpose    : <?= protectionagainstmalitioustext($purpose)?> </p>

           <?php if(empty($selectedColors)): ?>
                <p>The user has no favorite color therefore the user must me a psycho.</p>
           <?php else: ?>
                <p>The users selected color : <?=protectionagainstmalitioustext(implode(',' , $selectedColors))?>   </p>
            <?php endif; ?>

        
            
        </body>
        </html>

        