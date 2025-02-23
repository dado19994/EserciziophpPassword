<?php

$password = readline("Inserisci qui la tua password: ");
echo "Password inserita: " . $password . "\n";

function checkLength($password){
    if(strlen($password) < 8){
        echo "La password deve essere lunga almeno 8 caratteri\n";
        return false;
    }
    return true;
}

function checkNumber($password){
    for($i = 0; $i < strlen($password); $i++){
        if(is_numeric($password[$i])){
            echo "La password contiene almeno un numero\n";
            return true;
        }
    }
    echo "La password non contiene numeri\n";
    return false;
}

function checkUppercase($password){
    for($i = 0; $i < strlen($password); $i++){
        if(ctype_upper($password[$i])){
            echo "La tua password contiene almeno una lettera maiuscola\n";
            return true;
        }
    }
    echo "La tua password non contiene lettere maiuscole\n";
    return false;
}

function checkSpecialChars($password){
    $specialChars = ["!", "@", "#", "$"];
    
    for($i = 0; $i < strlen($password); $i++){
        if(in_array($password[$i], $specialChars)){
            echo "La tua password contiene almeno un carattere speciale\n";
            return true;
        }
    }
    echo "La tua password non contiene caratteri speciali\n";
    return false;
}

function checkPassword($password){
    $checkLength = checkLength($password);
    $checkNumber = checkNumber($password);
    $checkUpperCase = checkUppercase($password);
    $checkSpecialChars = checkSpecialChars($password);

    if($checkLength && $checkNumber && $checkUpperCase && $checkSpecialChars){
        echo "La tua password è sicura\n";
    } else {
        echo "La tua password non è sicura\n";
    }
}

// Chiamata alla funzione principale
checkPassword($password);

?>
