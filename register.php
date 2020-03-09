<?php 
    session_start();
    include("connect.php");
    $username =$_POST['username'];
    $password =$_POST['password'];
    $phone =$_POST['phone'];
    $sql = "select * from users where username ='".$username ."'" ;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $arr = array('error'=>'Tài Khoản Đã Tồn Tại');
       
        die(json_encode( $arr,JSON_UNESCAPED_UNICODE));
    }
    $sql = "INSERT INTO users( username, password, phone) VALUES ('".$username."','".$password."','".$phone ."')" ;
    if ($conn->query($sql) === TRUE) {
        $arr = array('error'=>null,'data'=>'Thêm Thành Công');
        $_SESSION["username"] = $username;
        die(json_encode( $arr,JSON_UNESCAPED_UNICODE));
    } else {
        $arr = array('error'=>'Thêm Thất Bại');
    }
?>