<?php
if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email'])) {
    require("lib.php");
    
    $userName = $_POST['UserName'];
    $pass = $_POST['Password'];
    $createDate = $_POST['CreationDate'];
    $lastLogin = $_POST['LastLogin'];
    $isActive = $_POST['IsActive'];
    
    $object = new CRUD();
    
    $object->Create($userName,$pass, $createDate, $createDate,$lastLogi,$isActive);
}
?>