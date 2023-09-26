<?php
// Task 5: Password Generator


// Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password.


function generatePassword($length) {
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numericChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';
    
    $allChars = $lowercaseChars . $uppercaseChars . $numericChars . $specialChars;
    
    $charCount = strlen($allChars);
    
    $password = '';
    
    for ($i = 0; $i < $length; $i++) {

        $randomIndex = mt_rand(0, $charCount - 1);
        
        $password .= $allChars[$randomIndex];
    }
    
    return $password;
}

$password = generatePassword(12);

echo $password;







?>