<?php
    session_start();
    include("./connect.php");
    $arr = array('error'=>null,'data'=>'Nạp Thẻ Thành Công');
    die(json_encode( $arr,JSON_UNESCAPED_UNICODE));
    

?>