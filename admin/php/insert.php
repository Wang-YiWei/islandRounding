<?php

@session_start();

require_once 'db.php';

$account = $_REQUEST["account"];
$passwd = $_REQUEST["passwd"];
$passwd = hash('sha256',$passwd);
$nickname = $_REQUEST["nickname"];
$email = $_REQUEST["email"];
$something = $_REQUEST["something"];

$select = "SELECT * from `MemberInfo` WHERE `account` = '{$account}'";
$sel_result = mysqli_query($_SESSION['link'],$select);

if($sel_result){
    if(mysqli_num_rows($sel_result) == 0){
        // 插入新資料
        $insert = "INSERT INTO `MemberInfo` (`account`, `passwd`, `nickname`, `email`, `something`)
        VALUE ('{$account}', '{$passwd}', '{$nickname}', '{$email}', '{$something}')";
        $ins_result = mysqli_query($_SESSION['link'],$insert);
        if(mysqli_affected_rows($_SESSION['link']) > 0){
            echo "帳號創建成功！";        
        }
        else{
            echo "帳號創建失敗！";
        }
    }
    else {
        echo "此帳號已被申請過";
    }
}else echo "新增資料失敗";

mysqli_free_result($sel_result);
mysqli_close($_SESSION['link']);

?>