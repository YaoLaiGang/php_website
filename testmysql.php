<?php
    $conn=mysql_connect("localhost","root","root");
    if($conn){
            echo "连接mysql成功";
    }
    else{
            echo "连接数据库失败";
    }
?>