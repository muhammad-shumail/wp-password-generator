<?php
require 'phpass/PasswordHash.php';
$encrypt = new PasswordHash(8, TRUE);

if(isset($_POST['generate'])){
    echo $encrypt->HashPassword($_POST['string']);
}elseif(isset($_POST['checkpass'])){
    if($encrypt->CheckPassword($_POST['string'], $_POST['password'])){
        echo 'TRUE';
    }else{
        echo 'FALSE';
    }
}

?>