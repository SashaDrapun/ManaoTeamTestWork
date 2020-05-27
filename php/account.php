<?php
function registration($user,$confirmPassword){
    require_once 'dataValidation.php';
    require 'databaseAdder.php';
    require_once 'user.php';

    $registrationVerificationResult = isRegistrationDataCorrect($user,$confirmPassword);
    if(!(gettype($registrationVerificationResult)==='array')){
        addUser($user);
        $result["successfulRegistration"] = true;
        echo json_encode($result); 
    }
    else{
        echo json_encode($registrationVerificationResult); 
    } 
}

function autorization($email,$password){
    require_once 'databaseHandler.php';
    require_once 'dataValidation.php';

    $autorizationVerificationResult = isAutorizationDataCorrect($email,$password);
    if(!(gettype($autorizationVerificationResult)==='array')){
            $result["successfulAutorization"] = true;
            echo json_encode($result);
            $_SESSION['userName'] = strval(findNameByEmail($email));
    }
    else{
        echo json_encode($autorizationVerificationResult); 
    }
}
?>
