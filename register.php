<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Task Later</title>
</head>
<body>
    <h2 style="display: flex; justify-content: center; font-family:Arial;">Registration Form</h2>
    <div id="loginContainer">
        <div id="loginboxContainer">
            <form id="formRegistration" action="process_register.php" method="post"> 
                    <!--First Name-->
                    <label for="fName" class="forminputtitle">Enter First Name</label><br>
                    <input type="text" id="fName" name="fName" class="forminputbox"><br><br>
                    <!--Last Name-->
                    <label for="lName" class="forminputtitle">Enter Last Name</label><br>
                    <input type="text" id="lName" name="lName" class="forminputbox"><br><br>
                    <!--Email -->
                    <label for="email" class="forminputtitle">Enter Email</label><br>
                    <input type="email" id="email" name="email" class="forminputbox"><br><br>
                    <!--Password -->
                    <label for="pass" class="forminputtitle">Enter Password</label><br>
                    <input type="password" id="pass" name="pass" class="forminputbox"><br><br>
                    <!--Confirm Password -->
                    <label for="confirmPass" class="forminputtitle">Confirm Password</label><br>
                    <input type="password"  id="confirmPass" name="confirmPass" class="forminputbox"><br><br>  

                    <!--Radio Container-->
                    <div class="radioContainer">   
                        <p class="radioLabel">Main Purpose</p>

                            <div class="radioOption">
                                <input type="radio" id="school" name="radioButtonGroup" value="School">
                                <label for="school">School</label>
                            </div>

                            <div class="radioOption">
                                <input type="radio" id="personal" name="radioButtonGroup" value="Personal">
                                <label for="personal">Personal</label>
                            </div>

                            <div class="radioOption">
                                <input type="radio" id="both" name="radioButtonGroup" value="Both">
                                <label for="both">Both</label>             
                            </div>      
                    </div>
                    
                    <div class="checkBoxContainer">
                        <p>What is your favorite color</p>

                           <div class="checkBoxOption">
                                <input type="checkbox" id="checkboxBlue" name="checkBoxOption[]" value="Blue">
                                <label for="checkboxBlue">Blue</label>
                           </div>
                           <div class="checkBoxOption">
                                <input type="checkbox" id="checkboxGreen" name="checkBoxOption[]" value="Green">
                                <label for="checkboxGreen">Green</label>
                           </div>
                           <div class="checkBoxOption">
                                <input type="checkbox" id="checkboxOrange" name="checkBoxOption[]" value="Orange">
                                <label for="checkboxOrange">Orange</label>
                           </div>
                           <div class="checkBoxOption">
                                <input type="checkbox" id="checkboxPurple" name="checkBoxOption[]" value="Purple">
                                <label for="checkboxPurple">Purple</label>
                           </div>
                    </div>                

                                    <!--Register Button-->
                                    <div id="registerButtonContainer"> 
                                            <button type="submit" id="registerButton">
                                            Register
                                            </button>
                                    </div>
            </form>
        </div>
    </div>

    
</body>
</html>