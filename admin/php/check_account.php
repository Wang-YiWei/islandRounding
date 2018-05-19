<?php

@session_start();

require_once 'db.php';

$acc = $_POST["account"];
$exist = false;

$select = "SELECT * FROM `MemberInfo` WHERE `account` = '{$acc}'";
$sel_result = mysqli_query($_SESSION['link'],$select);

if($sel_result){
    if(mysqli_num_rows($sel_result) >= 1)
        $exist = true;
}else{
    echo "查詢失敗".mysqli_error($_SESSION['link'],$select);
}

mysqli_free_result($sel_result);
echo $exist;

?>