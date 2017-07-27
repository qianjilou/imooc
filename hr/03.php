<?php
    $user=$_POST['user'];
    $pwd=$_POST['pwd'];
    if($user=="zhouzhiruo"&$pwd==
        "123456"){
        echo "login successful";
    }else{
        echo "login error";
    }
?>