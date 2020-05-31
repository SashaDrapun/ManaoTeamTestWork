<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RegistrationAndAutorization</title>
    <link rel="stylesheet" href="web/css/index.css">
</head>
<body>

<?php 

if(!isset($_SESSION['userName'])){
    require_once 'web/layout/forms.php';
} 
else{
    require_once 'web/layout/autorizedContent.php';
}
?>

</body>
</html>



