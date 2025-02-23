<?php

$password = readline("Inserisci qui la tua password:");
echo "Password inserita:" . $password . "\n";

function checkLenght($password){
    if(strlen($password) < 8){
        echo "La password deve essere lunga almeno 8 caratteri\n";
        return false;
    }else{
        echo "La password è lunga almeno 8 caratteri\n";
        return true;
    }
}

function checkNumber($password){
    for($i = 0; $i < strlen($password); $i++){
        if(is_numeric($password[$i])){
            echo "La password contiene almeno un numero\n";
            return true;
        }else{
            echo "La password non contiene numeri\n";
            return false;
        }

    }
}

function checkUppercase($password){
    for($i = 0; $i < strlen($password); $i++){
        if(ctype_upper($password[$i])){
            echo "La tua password contiene almeno una lettera maiuscola\n";
            return true;
        }else{
            echo "La tua password non contiene lettere maiuscole\n";
            return false;
        }
    }
}

function checkSpecialChars($password){
    $specialChars = ["!", "@", "#", "$"];
    
    for($i = 0; $i < strlen($password); $i++){
        if(in_array($password[$i], $specialChars)){
            echo "La tua password contiene almeno un carattere speciale\n";
            return true;
        }else{
            echo "La tua password non contiene caratteri speciali\n";
            return false;
        }
        
    }
}

function checkPassword($password){}

$checkLenght = checkLenght($password);
$checkNumber = checkNumber($password);
$checkUpperCase = checkUpperCase($password);
$checkSpecialChars = checkSpecialCase($password);

if($checkLenght && $checkNumber && $checkUpperCase && $checkSpecialChars){
    echo "La tua password è sicura\n";
}else{
    echo "La tua password non è sicura\n";
}

checkPassword($password);



?>