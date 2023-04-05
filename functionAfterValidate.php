<?php 

$messageArr = [
    1 => 'new Add is successful',
    2 => ' Amend is successful',
    3 => 'delete is successful'
];

function redirect($path){
    header("Location:".$path);

    exit;
}

function get_message($code){

    global $messageArr;

    if(array_key_exists($code, $messageArr)){

        return $messageArr[$code];
    }

    else{

        return false;
    }


}