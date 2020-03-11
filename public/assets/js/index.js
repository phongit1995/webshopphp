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
    $("#submitPay").click(function(){
        console.log('phong');
        let card_type= $("#card_type").val();
        let card_amount= $("#card_amount").val();
        let serial= $("#serial").val();
        let pin= $("#pin").val();
        if(card_type==""){
            return swal({
                icon: 'error',
                title: 'Lỗi !!!',
                text: 'Vui Lòng Chọn Loại Thẻ!',
              })
        }
        if(card_amount==""){
            return swal({
                icon: 'error',
                title: 'Lỗi !!!',
                text: 'Vui Lòng Chọn Mệnh Giá!',
              })
        }
        if(serial==""){
            return swal({
                icon: 'error',
                title: 'Lỗi !!!',
                text: 'Vui Lòng Nhập Số Seri!',
              })
        }
        if(pin==""){
            return swal({
                icon: 'error',
                title: 'Lỗi !!!',
                text: 'Vui Lòng Nhập Mã Thẻ!',
              })
        }
        console.log(card_type,card_amount,serial,pin);
        $.ajax({
            url:"paycard.php",
            type:"post",
            data:{
                card_type,
                card_amount,
                serial,
                pin
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
                        text: ' Nạp Thành Công',
                      })
                    //   location.reload();
                }
                $("#card_type").val("");
                $("#card_amount").val("");
                $("#serial").val("");
                $("#pin").val("");
            }
        })
    })
    $('#passwordLogin').on('keydown', function(e) {
        if (e.which == 13) {
            $("#submitlogin").click();
        }
    });
})