<?php
    session_start();
    include("./connect.php");
    $username =$_POST['username'];
    $password =$_POST['password'];
    $sql = "select * from users where username ='".$username ."' and password='".$password."'" ;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $arr = array('error'=>null,'data'=>'Đăng Nhập Thành Công');
        $_SESSION["username"] = $username;
        die(json_encode( $arr,JSON_UNESCAPED_UNICODE));
    }
    else {
        $arr = array('error'=>'Tài Khoản Sai Hoặc Mật Khẩu Chưa Chính Xác');
        die(json_encode( $arr,JSON_UNESCAPED_UNICODE));
    }
?>