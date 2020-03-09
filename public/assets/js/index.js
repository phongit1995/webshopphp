$(document).ready(function(){
    $("#submitlogin").click(function(){
        let username = $('#usernameLogin').val();
        let password = $('#passwordLogin').val();
        console.log(username,password);
        if(username==''|| password ==''){
            swal({
                icon: 'error',
                title: 'Lỗi !!!',
                text: 'Vui Lòng Nhập Đầy Đủ!',
              })
        }
        $.ajax({
            url:"login.php",
            type:"post",
            data:{
                username,
                password
            },
            success:function(data){
                let result = JSON.parse(data);
                console.log(result);
                if(result.error){
                    swal({
                        icon: 'error',
                        title: 'Lỗi !!!',
                        text: result.error,
                      })
                }else{
                    swal({
                        icon: 'error',
                        title: 'Thành Công !!!',
                        text: ' Đăng Nhập Thành Công',
                      })
                      location.reload();
                }
            }
        })
    })
    $("#submitRegister").click(function(){
        let username = $('#usernameRegister').val();
        let phone = $('#phoneRegister').val();
        let password = $('#passwordRegister').val();
        let confirmPassword = $('#confirmpasswordRegister').val();
        console.log(username,password,phone,confirmPassword);
        if(username==''|| password =='' || phone=='' || confirmPassword==''){
            return swal({
                icon: 'error',
                title: 'Lỗi !!!',
                text: 'Vui Lòng Nhập Đầy Đủ Thông Tin!',
              })
        }
        if(password!=confirmPassword){
            return swal({
                icon: 'error',
                title: 'Lỗi !!!',
                text: '2 Mật Khẩu Không Giống Nhau',
              })
        }
        $.ajax({
            url:"register.php",
            type:"post",
            data:{
                username,
                password,
                phone
            },
            success:function(data){
                let result = JSON.parse(data);
                if(result.error){
                    swal({
                        icon: 'error',
                        title: 'Lỗi !!!',
                        text: result.error,
                      })
                }else{
                    swal({
                        icon: 'error',
                        title: 'Thành Công !!!',
                        text: ' Đăng Ký Thành Công',
                      })
                      location.reload();
                }
            }
        })
    })
    $('#passwordLogin').on('keydown', function(e) {
        if (e.which == 13) {
            $("#submitlogin").click();
        }
    });
})