<?php
// for user login
include ('../classes/admin.php');
if($_POST['username']=="admin" && $_POST['password']=="password")
{
$obj=new admin\Admin();
$obj->login();
}
else{
    echo "invalid username/password";
}
?>