<?php
@session_start();

function get_publish_article(){
    $datas = array();
    
    $sel_sql = "SELECT * FROM `Article` WHERE `publish` = 1";
    $sel_query = mysqli_query($_SESSION['link'],$sel_sql);

    if($sel_query){
        if(mysqli_num_rows($sel_query) > 0 ){
            while($row = mysqli_fetch_assoc($sel_query)){
                $datas[] = $row;
            }
        }
    }
    else{
        echo "{$sel_query}請求失敗 : <br/>".mysqli_error($_SESSION['link']);
    }

    return $datas;
}

function get_certain_article($id){
    
    $sel_sql = "SELECT * FROM `Article` WHERE `publish` = 1 AND `id` = {$id}";
    $sel_query = mysqli_query($_SESSION['link'],$sel_sql);

    $fetch_result = null;

    if($sel_query){
        if(mysqli_num_rows($sel_query) ==  1){
            $fetch_result = mysqli_fetch_assoc($sel_query);
        }
    }
    else{
        echo "{$sel_query}請求失敗 : <br/>".mysqli_error($_SESSION['link']);
    }

    return $fetch_result;
}


?>