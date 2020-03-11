<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Shop Acc liên quân Uy tín - acclienquan365 giảm giá shock 50% </title>
<meta name="description"
      content="https://acclienquan365.com là shop acc liên quân mobile uy tín - giá rẻ tại Việt Nam. Chuyên mua bán nick liên quân. là Shop liên quân tự động giá rẻ. Cung cấp acc liên quân đầy đủ tướng và bậc rank giá rẻ nhất thị trường.">
<meta name="keywords"
      content="Shop mua bán nick liên quân, liên minh giá rẻ, luôn ưu đãi , giảm giá tới 50% ">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:type" content="website">
<meta property="og:title" content="Shop Acc  liên quân Uy tín - Mua Nick Hôm Nay Giảm Ngay 50% ">
<meta property="og:image" content="6.png">
<meta property="og:description"
      content="Shop mua bán nick liên quân, liên minh giá rẻ. Uy tín nhiều youtuber kiểm chứng. Thanh toán qua atm, thẻ cào.GIao dich tự động, nhận nick sau 2p. ">
<link rel="icon" href="ico.png">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i,900&amp;subset=vietnamese"
      rel="stylesheet">
<link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="public/assets/css/swiper.min.css">
<link rel="stylesheet" href="public/assets/css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" href="public/assets/css/reset.css">
<link rel="stylesheet" href="public/assets/css/style.css">
<link rel="stylesheet" href="public/assets/css/site.css">
<script src="ionicons@4.4.4/dist/ionicons.js"></script>
<link href="ionicons@4.4.4/dist/css/ionicons.min.css" rel="stylesheet">
<!-- Js -->
<link rel="stylesheet" href="public/assets/css/custom.css">
<script src="public/assets/js/sweetalert.min.js"></script>
<link rel="stylesheet" href="public/assets/css/sweetalert.css">
<script src="public/assets/js/jquery-1.11.2.min.js"></script>
<script src="public/assets/js/bootstrap.min.js"></script>
<script src="public/assets/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="public/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="public/assets/js/swiper.min.js"></script>
<script src="public/assets/js/jquery.cookie.js"></script>
<script src="public/assets/js/filter.js"></script>
<script src="ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
<script src="public/assets/js/functions.js"></script>
<script src="public/assets/js/index.js"></script>
<script data-ad-client="ca-pub-6476823042026370" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157348632-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157348632-1');
</script>
<!-- Global site tag (gtag.js) - Google Ads: 794006764 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-794006764"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-794006764');
</script>
<script>
  gtag('event', 'page_view', {
    'send_to': 'AW-794006764',
    'value': 'replace with value',
    'items': [{
      'id': 'replace with value',
      'location_id': 'replace with value',
      'google_business_vertical': 'custom'
    }]
  });
</script>
<script>
  gtag('event', 'page_view', {
    'send_to': 'AW-794006764',
    'value': 'replace with value',
    'items': [{
      'id': 'replace with value',
      'location_id': 'replace with value',
      'google_business_vertical': 'custom'
    }]
  });
</script>
</head>
<body style="background: #0f1113 url(public/img/magic-page-top-short.jpg);
    -webkit-background-size: 100% auto;
    background-size: 100% auto;">
<div class="sl-header">
    <div class="container">
        <span class="sl-icmenu"><i class="ion ion-md-menu"  style='font-size:20px; font-weight:bold;'></i></span>
        <a class="sl-logo" href="" title="Trang chủ"><img src="public/logo365.png" alt=""></a>
        <ul class="sl-menu clearfix">
            <li class="active"><a href="" title="TRANG CHỦ">TRANG CHỦ</a></li>
            <?php
              if( isset ($_SESSION['username'])){
                echo('<li><a href title="NẠP THẺ" data-toggle="modal" data-target="#modalPayCard" >NẠP TIỀN</a></li>');
              }
              else {
                echo(
                  '<li><a onclick="(notiLogin())" title="NẠP THẺ">NẠP TIỀN</a></li>'
                );
              }
            ?>
            <li><a href="auth/huong-dan" title="HƯỚNG DẪN">HƯỚNG DẪN</a></li>
            
            
            <li class=""><a href="auth/uy-tin-shop" title="THÔNG TIN SHOP">UY TÍN SHOP</a></li>
            <li><a href="https://www.facebook.com/Shop-Li%C3%AAn-Qu%C3%A2n-Kinas-1921908651207607" target='_blank' title="FB PAGE">Facebook Admin</a></li>
        </ul>
        <script>
            function notiLogin() {
                swal({
                    title: "Thông báo",
                    html: true,
                    text: '<b style="color:#00bcd4;font-size:18px;">Bạn cần đăng nhập để nạp thẻ</b>\
                    <p ><button class="btn d_btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Đăng nhập</button>\
                    <button class="btn d_btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisForm">Đăng ký</a> </button>\
                    ',
                    showConfirmButton: false
            
                }, function () {
                    
                });
            }
            $('.sweet-alert .d_btn').click(function(){
                swal.close();
            })
        </script>
           <?php 
                if( isset ($_SESSION['username'])){
                    echo('<div class="sl-lrins">
                    <div class="dropdown">
                        <button type="button" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> Tài Khoản: <strong id="sodu">'.$_SESSION['username'].'</strong> <i></i></button>
                        <ul class="dropdown-menu">
                            <li><a href="/auth/detail" title="Tài khoản đã mua">Tài khoản đã mua <br> lịch sử nạp thẻ</a></li>
                            <li><a class="alogout" href="logout.php" title="Đăng xuất">Đăng xuất</a></li>
                        </ul>
                    </div>
                    </div>');
                }
                else{
                    echo('
                    <ul class="sl-logreg clearfix" style="width: 200px;">
                    <!--<li><fb:login-button scope="public_profile,email" data-width="300" onlogin="checkLoginState();">-->
                    <!--        Đăng nhập bằng FaceBook</fb:login-button></li>-->
                    <li>
                        <div class="text-center">
                          <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Đăng nhập</a>
                            
                        </div>
                    </li>
                    <li>
                        <div class="text-center" style="margin-top: -20px;">
                          <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisForm">Đăng ký</a>
                        </div>
                    </li>
                    </ul>
                    ');
                }
           ?>

</div>           
</div>
<div class="sl-hdtop">
    <div class="container">
        <div class="sl-boxs">
            <div class="sl-row clearfix">
                <div class="sl-col sl-col1">
                    <div class="sl-hdcbox">
                        <h4 class="sl-htit sl-ht1">TOP NẠP THẺ</h4>
                        <ul class="sl-htul">
                                                                                                                                        <li>
                                            <i>1</i></i>
                                            <span>duykien123</span>
                                            <label>2,200,000<sup>đ</sup>
                                            </label>
                                        </li>
                                                                            <li>
                                            <i>2</i></i>
                                            <span>DoThucBach</span>
                                            <label>1,300,000<sup>đ</sup>
                                            </label>
                                        </li>
                                                                            <li>
                                            <i>3</i></i>
                                            <span>phatbaoheocho</span>
                                            <label>1,100,000<sup>đ</sup>
                                            </label>
                                        </li>
                                                                            <li>
                                            <i>4</i></i>
                                            <span>minh17012006</span>
                                            <label>1,000,000<sup>đ</sup>
                                            </label>
                                        </li>
                                                                            <li>
                                            <i>5</i></i>
                                            <span>danchoi2k5</span>
                                            <label>1,000,000<sup>đ</sup>
                                            </label>
                                        </li>
                                                                            <li>
                                            <i>6</i></i>
                                            <span>liemsi</span>
                                            <label>1,000,000<sup>đ</sup>
                                            </label>
                                        </li>
                                                                            <li>
                                            <i>7</i></i>
                                            <span>scdm20082006</span>
                                            <label>1,000,000<sup>đ</sup>
                                            </label>
                                        </li>
                                                                                                                        </ul>
                    </div>
                </div>
                <div class="sl-col sl-col2">
                    <div class="sl-hdcbox">
                        <div class="swiper-container slhdbner">
                            <div class="swiper-wrapper" style="height: auto;">
                                <!-- <iframe width="100%" height="315" src="https://www.youtube.com/embed/QdXdx9IaakA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="swiper-slide" > -->
                                
                                    <a target='_blank' href='https://www.youtube.com/watch?v=QdXdx9IaakA'><img src="public/img/365.jpg" alt=""></a>
                                <!-- </div> -->
                                    
                            </div>
                            <div class="fsbn-p"></div>
                            <div class="fsbn-n"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="container text-center">
  <ins class="adsbygoogle marb20"
         style="display:block; text-align:center;"
         data-ad-layout="in-article"
         data-ad-format="fluid"
         data-ad-client="ca-pub-6476823042026370"
         data-ad-slot="6897864858"></ins>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div> -->
<style>
    a.float-btn {
        background: #000;
        width: 100px;
        height: 41px;
        display: block;
        float:right;
        border: 2px solid #000;
        font-size: 14px;
        line-height: 34px;
        text-align: center;
        color: #fff;
        margin: 0 0 0px 0;
    }
    .float-menu {
        width: 179px;
        position: fixed;
        right: 0;
        top: 40%;
        z-index: 999;
        transition: all ease 0.3s;
        -moz-transition: all ease 0.3s;
        -ms-transition: all ease 0.3s;
        -o-transition: all ease 0.3s;
        -webkit-transition: all ease 0.3s;
    }
</style>
<div class="float-menu visible-lg-block" style="margin-right: 0px;display: block !important;">
  
    <a onclick='(notiLogin())' class="float-btn" style="background: #f44336;" title="NẠP THẺ">Nạp tiền</a>
     <a href='acc_game/random' class="float-btn" style="background: #ab54a0;">Thử vận may</a>
   
        <a href='auth/uy-tin-shop' class="float-btn" style="background: #337ab7;">
        <!--<img src="#" width="32" height="32">-->Xem Uy Tín</a>
        <a href='auth/huongdan' class="float-btn" style="background: #4caf50;">
        <!--<img src="#" width="32" height="32">-->Cách Mua</a>
        <a href='auth/thongtinshop' class="float-btn" style="background: #4caf50;">
        <!--<img src="#" width="32" height="32">-->Thông tin shop</a>
</div>
<script type="text/javascript">
    swal({
        title: "Thông báo",
        html: true,
        text: "<b style='color:red;'>Shop LienQuan Uy Tín thông báo:</b><br><b style='color:black;'>Toàn bộ Acc trên Shop đều là Acc  trắng thông tin! Mọi thông tin cần biết liên hệ FB ADMIN: FB <a style='color:blue' target='_blank' href=\"https://www.facebook.com/Shop-Li%C3%AAn-Qu%C3%A2n-Kinas-1921908651207607\"> ShopLienQuanUyTin </a></b>",
        showConfirmButton: true
    }, function () {
        
    });
</script>
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 400px;">
    <div class="modal-content">
      <div class="modal-header text-center" style="height: 50px;background: #337ab7;">
        <h4 class="" style="color: white;">ĐĂNG NHẬP 
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" style="color: red;float:right;">×</span>
            </button>
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <!-- <form method="post" action="auth/loginNormal"> -->
            <div class="modal-body mx-3">
                                <div class="md-form mb-5">
                  <br>
                  <label data-error="wrong" data-success="right" for="usernameLogin">Tên tài khoản</label>
                  <input type="text" name="username" id="usernameLogin" required class="form-control validate">
                </div>
        
                <div class="md-form mb-4">
                  <br>
                  <label data-error="wrong" data-success="right" for="passwordLogin">Mật Khẩu</label>
                  <input type="password" name="password" id="passwordLogin" required class="form-control validate">
                </div>
            </div>
             <input type="hidden" name="type" value="1">
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-default" id="submitlogin">Đăng nhập</button>
            </div>
      <!-- </form> -->
    </div>
  </div>
</div>
<div class="modal fade" id="modalRegisForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 400px;">
    <div class="modal-content">
      <div class="modal-header text-center" style="height: 50px;background: #337ab7;">
        <h4 class="" style="color: white;">ĐĂNG KÝ MỚI
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" style="color: red;float:right;">×</span>
            </button>
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <!-- <form method="post" action="auth/loginNormal"> -->
            <div class="modal-body mx-3">
                                <div class="md-form mb-5">
                  <br>
                  <label data-error="wrong" data-success="right" for="usernameRegister">Tên tài khoản</label>
                  <input type="text" name="username" required class="form-control validate" id="usernameRegister">
                </div>
                
                <div class="md-form mb-5">
                  <br>
                  <label data-error="wrong" data-success="right" for="phoneRegister">Số điện thoại</label>
                  <input type="text" required name="phone" required class="form-control validate" id="phoneRegister">
                </div>
                
                <div class="md-form mb-4">
                  <br>
                  <label data-error="wrong" data-success="right" for="passwordRegister">Mật Khẩu</label>
                  <input type="password" name="password" required class="form-control validate" value="" id="passwordRegister">
                </div>
                
                <div class="md-form mb-4">
                  <br>
                  <label data-error="wrong" data-success="right" for="confirmpasswordRegister">Xác nhận mật Khẩu</label>
                  <input type="password" name="repassword" required class="form-control validate" value="" id="confirmpasswordRegister">
                </div>
                
            </div>
            <input type="hidden" name="type" value="2">
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-default" id="submitRegister">Đăng ký</button>
            </div>
      <!-- </form> -->
    </div>
  </div>
</div>
<!-- Nạp Thẻ -->
<div class="modal fade" id="modalPayCard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 400px;">
    <div class="modal-content">
      <div class="modal-header text-center" style="height: 50px;background: #337ab7;">
        <h4 class="" style="color: white;">NẠP TIỀN
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" style="color: red;float:right;">×</span>
            </button>
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <!-- <form method="post" action="auth/loginNormal"> -->
            <div class="modal-body mx-3">
                                <div class="md-form mb-5">
                  <br>
                  <label data-error="wrong" data-success="right" for="usernameRegister" >Loại Thẻ :</label>
                  <select class="form-control" name="card_type" id="card_type">
                    <option value="">Chọn loại thẻ</option>
                    <option value="VTT">Viettel</option>
                    <option value="VMS">Mobifone</option>
                    <option value="VNP">Vinaphone</option>
                  </select>
                </div>
                
                <div class="md-form mb-5">
                  <br>
                  <label data-error="wrong" data-success="right" for="card_amount">Mệnh Giá :</label>
                  <select class="form-control" name="card_amount" id="card_amount">
                        <option value="">Chọn mệnh giá</option>
                        <option value="10000">10.000</option>
                        <option value="20000">20.000</option>
                        <option value="30000">30.000</option>
                        <option value="50000">50.000</option>
                        <option value="100000">100.000</option>
                        <option value="200000">200.000</option>
                        <option value="300000">300.000</option>
                        <option value="500000">500.000</option>
                        <option value="1000000">1.000.000</option>
                  </select>
                </div>
                
                <div class="md-form mb-4">
                  <br>
                  <label data-error="wrong" data-success="right" for="serial">Số Seri :</label>
                  <input type="password" name="password" required class="form-control validate" value="" id="serial">
                </div>
                
                <div class="md-form mb-4">
                  <br>
                  <label data-error="wrong" data-success="right" for="pin">Mã Thẻ</label>
                  <input type="password" name="repassword" required class="form-control validate" value="" id="pin">
                </div>
                
            </div>
            <input type="hidden" name="type" value="2">
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-default" id="submitPay">Nạp Tiền</button>
            </div>
      <!-- </form> -->
    </div>
  </div>
</div>
<!-- End Nạp Thẻ -->

<div class="sl-search">
    <div class="container">
        <div class="sl-sebox">
            <div class="sl-row clearfix">
                <div class="sl-col sl-col2">
                    <h4 class="sl-htit sl-ht3">CHỌN THUỘC TÍNH LỌC</h4>
                    <form lpformnum="1">
                        <ul class="sl-seauls clearfix">
                            <li>
                                <select class="form-control property-filter" name="tim-theo-rank">
                                    <option value="0">Tìm theo rank</option>
                                    <option value="1" >Rank Đồng</option>
                                    <option value="2" >Rank Bạc</option>
                                    <option value="3" >Rank Vàng</option>
                                    <option value="4" >Rank Bạch Kim</option>
                                    <option value="5" >Rank Kim Cương</option>
                                    <option value="6" >Rank Cao Thủ</option>
                                    <option value="7" >Rank Thách Đấu</option>
                                </select>
                            </li>
                            <li>
                                <select class="form-control property-filter" name="tim-theo-gia">
                                    <option value="0">Tìm theo giá</option>

                                    <option value="1" >50k trở xuống</option>
                                    <option value="2" >Từ 50k đến 100k</option>
                                    <option value="3" >Từ 100k đến 500k</option>
                                    <option value="4" >Từ 500k đến 1 Triệu</option>
                                    <option value="5" >1 Triệu đến 2 Triệu</option>
                                    <option value="6" >trên 2 Triệu <b style="color: red !important;">(ACC VIP)</b></option>
                                </select>
                            </li>

                            <li>
                                <select class="form-control property-filter" name="sap-xep">
                                    <option value="0">Sắp xếp theo</option>
                                    <option value="nhieu-tuong" 
                                    >Nhiều tướng</option>
                                    <option value="nhieu-ngoc" 
                                    >Nhiều ngọc</option>
                                    <option value="nhieu-trang-phuc" 
                                    >Nhiều trang phục</option>
                                </select>
                            </li>
                        </ul>
                        <ul class="sl-sebtns">
                            <li>
                                <button class="sl-sebt1" type="submit" name="s">TÌM KIẾM</button>
                            </li>
                            <li>
                                <button class="sl-sebt2"><a href="http://acclienquan365.com/">HỦY BỎ</a></button>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sl-lprod">
    <div class="container">
        <div class="sllpbox">
            <div class="sl-produl clearfix">
                                                                                                                        <div class="sl-prodli">
                                    <div class="sl-prodbox">
                                                                                <a class="sl-prlinks" href="nick-lienquan-rank-kim-cuong-gia-tot-10810">
                                            <div class="sl-primg">
                                                    <div class="ribbon"><p style="background: #1d291d;">Acc mùa 13</p>
    <p style="background: #2f708a;">Trắng thông tin</p></div>
                                                    <img src="public/img/115.jpg">
                                                </div>
                                            <h3 class="sl-prcode"><span>#10810</span>
                                                <span class="percent"> Đang giảm 75%</span>                                                </h3>
                                            <div class="sl-priftop">
                                                <p class="sl-prcode"><span>Mã #10810 </span></p>
                                                <ul>
                                                    <li>Rank:Kim Cương</li>
    
                                                    <li>Tướng: 43</li>
                                                    <li>Trang Phục: 56</li>
                                                    <li>Bảng Ngọc: 90</li>
                                                </ul>
                                            </div>
                                        </a>
                                        <div class="sl-prifs">
                                            <span class="sl-prpri sl-prpri2" >100,000<sup>đ</sup></span>
                                            <div class="sl-prifbot">
                                                                                            <span class="sl-prpri sl-prpri1" style="text-decoration:line-through;">400,000<sup>đ</sup>
                                                </span>
                                                                                            <ul>
                                                    <li>Rank:Kim Cương</li>
                                                    <li>Bậc Ngọc: 90</li>
                                                    <li>Trang Phục: 56</li>
                                                    <li>Tướng: 43</li>
                                                </ul>
                                            </div>
                                            <p class="sl-prbot">
                                                <a href="nick-lienquan-rank-kim-cuong-gia-tot-10810" title="MUA NGAY"
                                                class="sl-btnod" data-id="690">NHẬN NGAY</a>
                                            </p>
                                        </div>
                                        <div style="height: auto; color: white !important; margin-left: 2%;margin-top: 10px;">
                                            
                                            <p>
                                                ✨ Nick trắng thông tin                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                                                                                                <div class="sl-prodli">
                                    <div class="sl-prodbox">
                                                                                <a class="sl-prlinks" href="nick-lienquan-rank-vang-gia-tot-10809">
                                            <div class="sl-primg">
                                                    <div class="ribbon"><p style="background: #1d291d;">Acc mùa 13</p>
    <p style="background: #2f708a;">Trắng thông tin</p></div>
                                                    <img src="public/img/119.jpg">
                                                </div>
                                            <h3 class="sl-prcode"><span>#10809</span>
                                                <span class="percent"> Đang giảm 82%</span>                                                </h3>
                                            <div class="sl-priftop">
                                                <p class="sl-prcode"><span>Mã #10809 </span></p>
                                                <ul>
                                                    <li>Rank:Vàng</li>
    
                                                    <li>Tướng: 43</li>
                                                    <li>Trang Phục: 44</li>
                                                    <li>Bảng Ngọc: 90</li>
                                                </ul>
                                            </div>
                                        </a>
                                        <div class="sl-prifs">
                                            <span class="sl-prpri sl-prpri2" >105,000<sup>đ</sup></span>
                                            <div class="sl-prifbot">
                                                                                            <span class="sl-prpri sl-prpri1" style="text-decoration:line-through;">600,000<sup>đ</sup>
                                                </span>
                                                                                            <ul>
                                                    <li>Rank:Vàng</li>
                                                    <li>Bậc Ngọc: 90</li>
                                                    <li>Trang Phục: 44</li>
                                                    <li>Tướng: 43</li>
                                                </ul>
                                            </div>
                                            <p class="sl-prbot">
                                                <a href="nick-lienquan-rank-vang-gia-tot-10809" title="MUA NGAY"
                                                class="sl-btnod" data-id="690">NHẬN NGAY</a>
                                            </p>
                                        </div>
                                        <div style="height: auto; color: white !important; margin-left: 2%;margin-top: 10px;">
                                            
                                            <p>
                                                ✨ Nick trắng thông tin                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                                                                                                <div class="sl-prodli">
                                    <div class="sl-prodbox">
                                                                                <a class="sl-prlinks" href="nick-lienquan-rank-bach-kim-gia-tot-10808">
                                            <div class="sl-primg">
                                                    <div class="ribbon"><p style="background: #1d291d;">Acc mùa 13</p>
    <p style="background: #2f708a;">Trắng thông tin</p></div>
                                                    <img src="public/img/67588111_532244890932443_8447505144228085760_o.jpg">
                                                </div>
                                            <h3 class="sl-prcode"><span>#10808</span>
                                                <span class="percent"> Đang giảm 93%</span>                                                </h3>
                                            <div class="sl-priftop">
                                                <p class="sl-prcode"><span>Mã #10808 </span></p>
                                                <ul>
                                                    <li>Rank:Bạc Kim</li>
    
                                                    <li>Tướng: 22</li>
                                                    <li>Trang Phục: 20</li>
                                                    <li>Bảng Ngọc: 90</li>
                                                </ul>
                                            </div>
                                        </a>
                                        <div class="sl-prifs">
                                            <span class="sl-prpri sl-prpri2" >20,000<sup>đ</sup></span>
                                            <div class="sl-prifbot">
                                                                                            <span class="sl-prpri sl-prpri1" style="text-decoration:line-through;">300,000<sup>đ</sup>
                                                </span>
                                                                                            <ul>
                                                    <li>Rank:Bạc Kim</li>
                                                    <li>Bậc Ngọc: 90</li>
                                                    <li>Trang Phục: 20</li>
                                                    <li>Tướng: 22</li>
                                                </ul>
                                            </div>
                                            <p class="sl-prbot">
                                                <a href="nick-lienquan-rank-bach-kim-gia-tot-10808" title="MUA NGAY"
                                                class="sl-btnod" data-id="690">NHẬN NGAY</a>
                                            </p>
                                        </div>
                                        <div style="height: auto; color: white !important; margin-left: 2%;margin-top: 10px;">
                                            
                                            <p>
                                                liliana nguyệt mị + murad MTP ✨ Nick trắng thông tin                                             </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                                                                                                <div class="sl-prodli">
                                    <div class="sl-prodbox">
                                                                                <a class="sl-prlinks" href="nick-lienquan-rank-kim-cuong-gia-tot-10807">
                                            <div class="sl-primg">
                                                    <div class="ribbon"><p style="background: #1d291d;">Acc mùa 13</p>
    <p style="background: #2f708a;">Trắng thông tin</p></div>
                                                    <img src="public/img/113.jpg">
                                                </div>
                                            <h3 class="sl-prcode"><span>#10807</span>
                                                <span class="percent"> Đang giảm 75%</span>                                                </h3>
                                            <div class="sl-priftop">
                                                <p class="sl-prcode"><span>Mã #10807 </span></p>
                                                <ul>
                                                    <li>Rank:Kim Cương</li>
    
                                                    <li>Tướng: 38</li>
                                                    <li>Trang Phục: 46</li>
                                                    <li>Bảng Ngọc: 90</li>
                                                </ul>
                                            </div>
                                        </a>
                                        <div class="sl-prifs">
                                            <span class="sl-prpri sl-prpri2" >125,000<sup>đ</sup></span>
                                            <div class="sl-prifbot">
                                                                                            <span class="sl-prpri sl-prpri1" style="text-decoration:line-through;">500,000<sup>đ</sup>
                                                </span>
                                                                                            <ul>
                                                    <li>Rank:Kim Cương</li>
                                                    <li>Bậc Ngọc: 90</li>
                                                    <li>Trang Phục: 46</li>
                                                    <li>Tướng: 38</li>
                                                </ul>
                                            </div>
                                            <p class="sl-prbot">
                                                <a href="nick-lienquan-rank-kim-cuong-gia-tot-10807" title="MUA NGAY"
                                                class="sl-btnod" data-id="690">NHẬN NGAY</a>
                                            </p>
                                        </div>
                                        <div style="height: auto; color: white !important; margin-left: 2%;margin-top: 10px;">
                                            
                                            <p>
                                                ✨ Nick trắng thông tin                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                                                                                                <div class="sl-prodli">
                                    <div class="sl-prodbox">
                                                                                <a class="sl-prlinks" href="nick-lienquan-rank-cao-thu-gia-tot-10804">
                                            <div class="sl-primg">
                                                    <div class="ribbon"><p style="background: #1d291d;">Acc mùa 13</p>
    <p style="background: #2f708a;">Trắng thông tin</p></div>
                                                    <img src="public/img/128.jpg">
                                                </div>
                                            <h3 class="sl-prcode"><span>#10804</span>
                                                <span class="percent"> Đang giảm 66%</span>                                                </h3>
                                            <div class="sl-priftop">
                                                <p class="sl-prcode"><span>Mã #10804 </span></p>
                                                <ul>
                                                    <li>Rank:Cao Thủ</li>
    
                                                    <li>Tướng: 50</li>
                                                    <li>Trang Phục: 42</li>
                                                    <li>Bảng Ngọc: 90</li>
                                                </ul>
                                            </div>
                                        </a>
                                        <div class="sl-prifs">
                                            <span class="sl-prpri sl-prpri2" >200,000<sup>đ</sup></span>
                                            <div class="sl-prifbot">
                                                                                            <span class="sl-prpri sl-prpri1" style="text-decoration:line-through;">600,000<sup>đ</sup>
                                                </span>
                                                                                            <ul>
                                                    <li>Rank:Cao Thủ</li>
                                                    <li>Bậc Ngọc: 90</li>
                                                    <li>Trang Phục: 42</li>
                                                    <li>Tướng: 50</li>
                                                </ul>
                                            </div>
                                            <p class="sl-prbot">
                                                <a href="nick-lienquan-rank-cao-thu-gia-tot-10804" title="MUA NGAY"
                                                class="sl-btnod" data-id="690">NHẬN NGAY</a>
                                            </p>
                                        </div>
                                        <div style="height: auto; color: white !important; margin-left: 2%;margin-top: 10px;">
                                            
                                            <p>
                                                ✨ Nick trắng thông tin                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                                                                                                <div class="sl-prodli">
                                    <div class="sl-prodbox">
                                                                                <a class="sl-prlinks" href="nick-lienquan-rank-kim-cuong-gia-tot-10803">
                                            <div class="sl-primg">
                                                    <div class="ribbon"><p style="background: #1d291d;">Acc mùa 13</p>
    <p style="background: #2f708a;">Trắng thông tin</p></div>
                                                    <img src="public/img/19.jpg">
                                                </div>
                                            <h3 class="sl-prcode"><span>#10803</span>
                                                <span class="percent"> Đang giảm 75%</span>                                                </h3>
                                            <div class="sl-priftop">
                                                <p class="sl-prcode"><span>Mã #10803 </span></p>
                                                <ul>
                                                    <li>Rank:Kim Cương</li>
    
                                                    <li>Tướng: 34</li>
                                                    <li>Trang Phục: 42</li>
                                                    <li>Bảng Ngọc: 90</li>
                                                </ul>
                                            </div>
                                        </a>
                                        <div class="sl-prifs">
                                            <span class="sl-prpri sl-prpri2" >100,000<sup>đ</sup></span>
                                            <div class="sl-prifbot">
                                                                                            <span class="sl-prpri sl-prpri1" style="text-decoration:line-through;">400,000<sup>đ</sup>
                                                </span>
                                                                                            <ul>
                                                    <li>Rank:Kim Cương</li>
                                                    <li>Bậc Ngọc: 90</li>
                                                    <li>Trang Phục: 42</li>
                                                    <li>Tướng: 34</li>
                                                </ul>
                                            </div>
                                            <p class="sl-prbot">
                                                <a href="nick-lienquan-rank-kim-cuong-gia-tot-10803" title="MUA NGAY"
                                                class="sl-btnod" data-id="690">NHẬN NGAY</a>
                                            </p>
                                        </div>
                                        <div style="height: auto; color: white !important; margin-left: 2%;margin-top: 10px;">
                                            
                                            <p>
                                                ✨ Nick trắng thông tin                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                                                                                                <div class="sl-prodli">
                                    <div class="sl-prodbox">
                                                                                <a class="sl-prlinks" href="nick-lienquan-rank-bach-kim-gia-tot-10802">
                                            <div class="sl-primg">
                                                    <div class="ribbon"><p style="background: #1d291d;">Acc mùa 13</p>
    <p style="background: #2f708a;">Trắng thông tin</p></div>
                                                    <img src="public/img/13.jpg">
                                                </div>
                                            <h3 class="sl-prcode"><span>#10802</span>
                                                <span class="percent"> Đang giảm 75%</span>                                                </h3>
                                            <div class="sl-priftop">
                                                <p class="sl-prcode"><span>Mã #10802 </span></p>
                                                <ul>
                                                    <li>Rank:Bạc Kim</li>
    
                                                    <li>Tướng: 27</li>
                                                    <li>Trang Phục: 30</li>
                                                    <li>Bảng Ngọc: 90</li>
                                                </ul>
                                            </div>
                                        </a>
                                        <div class="sl-prifs">
                                            <span class="sl-prpri sl-prpri2" >75,000<sup>đ</sup></span>
                                            <div class="sl-prifbot">
                                                                                            <span class="sl-prpri sl-prpri1" style="text-decoration:line-through;">300,000<sup>đ</sup>
                                                </span>
                                                                                            <ul>
                                                    <li>Rank:Bạc Kim</li>
                                                    <li>Bậc Ngọc: 90</li>
                                                    <li>Trang Phục: 30</li>
                                                    <li>Tướng: 27</li>
                                                </ul>
                                            </div>
                                            <p class="sl-prbot">
                                                <a href="nick-lienquan-rank-bach-kim-gia-tot-10802" title="MUA NGAY"
                                                class="sl-btnod" data-id="690">NHẬN NGAY</a>
                                            </p>
                                        </div>
                                        <div style="height: auto; color: white !important; margin-left: 2%;margin-top: 10px;">
                                            
                                            <p>
                                                ✨ Nick trắng thông tin                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                                                                                                <div class="sl-prodli">
                                    <div class="sl-prodbox">
                                                                                <a class="sl-prlinks" href="nick-lienquan-rank-kim-cuong-gia-tot-10801">
                                            <div class="sl-primg">
                                                    <div class="ribbon"><p style="background: #1d291d;">Acc mùa 13</p>
    <p style="background: #2f708a;">Trắng thông tin</p></div>
                                                    <img src="public/img/11.jpg">
                                                </div>
                                            <h3 class="sl-prcode"><span>#10801</span>
                                                <span class="percent"> Đang giảm 75%</span>                                                </h3>
                                            <div class="sl-priftop">
                                                <p class="sl-prcode"><span>Mã #10801 </span></p>
                                                <ul>
                                                    <li>Rank:Kim Cương</li>
    
                                                    <li>Tướng: 32</li>
                                                    <li>Trang Phục: 33</li>
                                                    <li>Bảng Ngọc: 90</li>
                                                </ul>
                                            </div>
                                        </a>
                                        <div class="sl-prifs">
                                            <span class="sl-prpri sl-prpri2" >72,500<sup>đ</sup></span>
                                            <div class="sl-prifbot">
                                                                                            <span class="sl-prpri sl-prpri1" style="text-decoration:line-through;">300,000<sup>đ</sup>
                                                </span>
                                                                                            <ul>
                                                    <li>Rank:Kim Cương</li>
                                                    <li>Bậc Ngọc: 90</li>
                                                    <li>Trang Phục: 33</li>
                                                    <li>Tướng: 32</li>
                                                </ul>
                                            </div>
                                            <p class="sl-prbot">
                                                <a href="nick-lienquan-rank-kim-cuong-gia-tot-10801" title="MUA NGAY"
                                                class="sl-btnod" data-id="690">NHẬN NGAY</a>
                                            </p>
                                        </div>
                                        <div style="height: auto; color: white !important; margin-left: 2%;margin-top: 10px;">
                                            
                                            <p>
                                                ✨ Nick trắng thông tin                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                                                                                                <div class="sl-prodli">
                                    <div class="sl-prodbox">
                                                                                <a class="sl-prlinks" href="nick-lienquan-rank-bach-kim-gia-tot-10800">
                                            <div class="sl-primg">
                                                    <div class="ribbon"><p style="background: #1d291d;">Acc mùa 13</p>
    <p style="background: #2f708a;">Trắng thông tin</p></div>
                                                    <img src="public/img/120.jpg">
                                                </div>
                                            <h3 class="sl-prcode"><span>#10800</span>
                                                <span class="percent"> Đang giảm 90%</span>                                                </h3>
                                            <div class="sl-priftop">
                                                <p class="sl-prcode"><span>Mã #10800 </span></p>
                                                <ul>
                                                    <li>Rank:Bạc Kim</li>
    
                                                    <li>Tướng: 45</li>
                                                    <li>Trang Phục: 67</li>
                                                    <li>Bảng Ngọc: 90</li>
                                                </ul>
                                            </div>
                                        </a>
                                        <div class="sl-prifs">
                                            <span class="sl-prpri sl-prpri2" >150,000<sup>đ</sup></span>
                                            <div class="sl-prifbot">
                                                                                            <span class="sl-prpri sl-prpri1" style="text-decoration:line-through;">1,600,000<sup>đ</sup>
                                                </span>
                                                                                            <ul>
                                                    <li>Rank:Bạc Kim</li>
                                                    <li>Bậc Ngọc: 90</li>
                                                    <li>Trang Phục: 67</li>
                                                    <li>Tướng: 45</li>
                                                </ul>
                                            </div>
                                            <p class="sl-prbot">
                                                <a href="nick-lienquan-rank-bach-kim-gia-tot-10800" title="MUA NGAY"
                                                class="sl-btnod" data-id="690">NHẬN NGAY</a>
                                            </p>
                                        </div>
                                        <div style="height: auto; color: white !important; margin-left: 2%;margin-top: 10px;">
                                            
                                            <p>
                                                ✨ Nick trắng thông tin                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                                                                                                <div class="sl-prodli">
                                    <div class="sl-prodbox">
                                                                                <a class="sl-prlinks" href="nick-lienquan-rank-bach-kim-gia-tot-10799">
                                            <div class="sl-primg">
                                                    <div class="ribbon"><p style="background: #1d291d;">Acc mùa 13</p>
    <p style="background: #2f708a;">Trắng thông tin</p></div>
                                                    <img src="public/img/116.jpg">
                                                </div>
                                            <h3 class="sl-prcode"><span>#10799</span>
                                                <span class="percent"> Đang giảm 68%</span>                                                </h3>
                                            <div class="sl-priftop">
                                                <p class="sl-prcode"><span>Mã #10799 </span></p>
                                                <ul>
                                                    <li>Rank:Bạc Kim</li>
    
                                                    <li>Tướng: 48</li>
                                                    <li>Trang Phục: 45</li>
                                                    <li>Bảng Ngọc: 90</li>
                                                </ul>
                                            </div>
                                        </a>
                                        <div class="sl-prifs">
                                            <span class="sl-prpri sl-prpri2" >125,000<sup>đ</sup></span>
                                            <div class="sl-prifbot">
                                                                                            <span class="sl-prpri sl-prpri1" style="text-decoration:line-through;">400,000<sup>đ</sup>
                                                </span>
                                                                                            <ul>
                                                    <li>Rank:Bạc Kim</li>
                                                    <li>Bậc Ngọc: 90</li>
                                                    <li>Trang Phục: 45</li>
                                                    <li>Tướng: 48</li>
                                                </ul>
                                            </div>
                                            <p class="sl-prbot">
                                                <a href="nick-lienquan-rank-bach-kim-gia-tot-10799" title="MUA NGAY"
                                                class="sl-btnod" data-id="690">NHẬN NGAY</a>
                                            </p>
                                        </div>
                                        <div style="height: auto; color: white !important; margin-left: 2%;margin-top: 10px;">
                                            
                                            <p>
                                                ✨ Nick trắng thông tin                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                                                                                                <div class="sl-prodli">
                                    <div class="sl-prodbox">
                                                                                <a class="sl-prlinks" href="nick-lienquan-rank-kim-cuong-gia-tot-10796">
                                            <div class="sl-primg">
                                                    <div class="ribbon"><p style="background: #1d291d;">Acc mùa 13</p>
    <p style="background: #2f708a;">Trắng thông tin</p></div>
                                                    <img src="public/img/123.jpg">
                                                </div>
                                            <h3 class="sl-prcode"><span>#10796</span>
                                                <span class="percent"> Đang giảm 83%</span>                                                </h3>
                                            <div class="sl-priftop">
                                                <p class="sl-prcode"><span>Mã #10796 </span></p>
                                                <ul>
                                                    <li>Rank:Kim Cương</li>
    
                                                    <li>Tướng: 54</li>
                                                    <li>Trang Phục: 54</li>
                                                    <li>Bảng Ngọc: 90</li>
                                                </ul>
                                            </div>
                                        </a>
                                        <div class="sl-prifs">
                                            <span class="sl-prpri sl-prpri2" >200,000<sup>đ</sup></span>
                                            <div class="sl-prifbot">
                                                                                            <span class="sl-prpri sl-prpri1" style="text-decoration:line-through;">1,200,000<sup>đ</sup>
                                                </span>
                                                                                            <ul>
                                                    <li>Rank:Kim Cương</li>
                                                    <li>Bậc Ngọc: 90</li>
                                                    <li>Trang Phục: 54</li>
                                                    <li>Tướng: 54</li>
                                                </ul>
                                            </div>
                                            <p class="sl-prbot">
                                                <a href="nick-lienquan-rank-kim-cuong-gia-tot-10796" title="MUA NGAY"
                                                class="sl-btnod" data-id="690">NHẬN NGAY</a>
                                            </p>
                                        </div>
                                        <div style="height: auto; color: white !important; margin-left: 2%;margin-top: 10px;">
                                            
                                            <p>
                                                ✨ Nick trắng thông tin                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                                                                                                <div class="sl-prodli">
                                    <div class="sl-prodbox">
                                                                                <a class="sl-prlinks" href="nick-lienquan-rank-bach-kim-gia-tot-10794">
                                            <div class="sl-primg">
                                                    <div class="ribbon"><p style="background: #1d291d;">Acc mùa 13</p>
    <p style="background: #2f708a;">Trắng thông tin</p></div>
                                                    <img src="public/img/16.jpg">
                                                </div>
                                            <h3 class="sl-prcode"><span>#10794</span>
                                                <span class="percent"> Đang giảm 79%</span>                                                </h3>
                                            <div class="sl-priftop">
                                                <p class="sl-prcode"><span>Mã #10794 </span></p>
                                                <ul>
                                                    <li>Rank:Bạc Kim</li>
    
                                                    <li>Tướng: 30</li>
                                                    <li>Trang Phục: 35</li>
                                                    <li>Bảng Ngọc: 90</li>
                                                </ul>
                                            </div>
                                        </a>
                                        <div class="sl-prifs">
                                            <span class="sl-prpri sl-prpri2" >75,000<sup>đ</sup></span>
                                            <div class="sl-prifbot">
                                                                                            <span class="sl-prpri sl-prpri1" style="text-decoration:line-through;">360,000<sup>đ</sup>
                                                </span>
                                                                                            <ul>
                                                    <li>Rank:Bạc Kim</li>
                                                    <li>Bậc Ngọc: 90</li>
                                                    <li>Trang Phục: 35</li>
                                                    <li>Tướng: 30</li>
                                                </ul>
                                            </div>
                                            <p class="sl-prbot">
                                                <a href="nick-lienquan-rank-bach-kim-gia-tot-10794" title="MUA NGAY"
                                                class="sl-btnod" data-id="690">NHẬN NGAY</a>
                                            </p>
                                        </div>
                                        <div style="height: auto; color: white !important; margin-left: 2%;margin-top: 10px;">
                                            
                                            <p>
                                                ✨ Nick trắng thông tin                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                                                                                                <div class="sl-prodli">
                                    <div class="sl-prodbox">
                                                                                <a class="sl-prlinks" href="nick-lienquan-rank-kim-cuong-gia-tot-10791">
                                            <div class="sl-primg">
                                                    <div class="ribbon"><p style="background: #1d291d;">Acc mùa 13</p>
    <p style="background: #2f708a;">Trắng thông tin</p></div>
                                                    <img src="public/img/121.jpg">
                                                </div>
                                            <h3 class="sl-prcode"><span>#10791</span>
                                                <span class="percent"> Đang giảm 85%</span>                                                </h3>
                                            <div class="sl-priftop">
                                                <p class="sl-prcode"><span>Mã #10791 </span></p>
                                                <ul>
                                                    <li>Rank:Kim Cương</li>
    
                                                    <li>Tướng: 45</li>
                                                    <li>Trang Phục: 51</li>
                                                    <li>Bảng Ngọc: 90</li>
                                                </ul>
                                            </div>
                                        </a>
                                        <div class="sl-prifs">
                                            <span class="sl-prpri sl-prpri2" >150,000<sup>đ</sup></span>
                                            <div class="sl-prifbot">
                                                                                            <span class="sl-prpri sl-prpri1" style="text-decoration:line-through;">1,000,000<sup>đ</sup>
                                                </span>
                                                                                            <ul>
                                                    <li>Rank:Kim Cương</li>
                                                    <li>Bậc Ngọc: 90</li>
                                                    <li>Trang Phục: 51</li>
                                                    <li>Tướng: 45</li>
                                                </ul>
                                            </div>
                                            <p class="sl-prbot">
                                                <a href="nick-lienquan-rank-kim-cuong-gia-tot-10791" title="MUA NGAY"
                                                class="sl-btnod" data-id="690">NHẬN NGAY</a>
                                            </p>
                                        </div>
                                        <div style="height: auto; color: white !important; margin-left: 2%;margin-top: 10px;">
                                            
                                            <p>
                                                ✨ Nick trắng thông tin                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                                                                                                <div class="sl-prodli">
                                    <div class="sl-prodbox">
                                                                                <a class="sl-prlinks" href="nick-lienquan-rank-kim-cuong-gia-tot-10790">
                                            <div class="sl-primg">
                                                    <div class="ribbon"><p style="background: #1d291d;">Acc mùa 13</p>
    <p style="background: #2f708a;">Trắng thông tin</p></div>
                                                    <img src="public/img/67276012_149382036154627_3851192836682678272_n.jpg">
                                                </div>
                                            <h3 class="sl-prcode"><span>#10790</span>
                                                <span class="percent"> Đang giảm 75%</span>                                                </h3>
                                            <div class="sl-priftop">
                                                <p class="sl-prcode"><span>Mã #10790 </span></p>
                                                <ul>
                                                    <li>Rank:Kim Cương</li>
    
                                                    <li>Tướng: 52</li>
                                                    <li>Trang Phục: 56</li>
                                                    <li>Bảng Ngọc: 90</li>
                                                </ul>
                                            </div>
                                        </a>
                                        <div class="sl-prifs">
                                            <span class="sl-prpri sl-prpri2" >150,000<sup>đ</sup></span>
                                            <div class="sl-prifbot">
                                                                                            <span class="sl-prpri sl-prpri1" style="text-decoration:line-through;">600,000<sup>đ</sup>
                                                </span>
                                                                                            <ul>
                                                    <li>Rank:Kim Cương</li>
                                                    <li>Bậc Ngọc: 90</li>
                                                    <li>Trang Phục: 56</li>
                                                    <li>Tướng: 52</li>
                                                </ul>
                                            </div>
                                            <p class="sl-prbot">
                                                <a href="nick-lienquan-rank-kim-cuong-gia-tot-10790" title="MUA NGAY"
                                                class="sl-btnod" data-id="690">NHẬN NGAY</a>
                                            </p>
                                        </div>
                                        <div style="height: auto; color: white !important; margin-left: 2%;margin-top: 10px;">
                                            
                                            <p>
                                                Raz muay thái + raz bằng quyền quán quân ✨ Nick trắng thông tin                                             </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                                                                                                <div class="sl-prodli">
                                    <div class="sl-prodbox">
                                                                                <a class="sl-prlinks" href="nick-lienquan-rank-bach-kim-gia-tot-10788">
                                            <div class="sl-primg">
                                                    <div class="ribbon"><p style="background: #1d291d;">Acc mùa 13</p>
    <p style="background: #2f708a;">Trắng thông tin</p></div>
                                                    <img src="public/img/124.jpg">
                                                </div>
                                            <h3 class="sl-prcode"><span>#10788</span>
                                                <span class="percent"> Đang giảm 82%</span>                                                </h3>
                                            <div class="sl-priftop">
                                                <p class="sl-prcode"><span>Mã #10788 </span></p>
                                                <ul>
                                                    <li>Rank:Bạc Kim</li>
    
                                                    <li>Tướng: 64</li>
                                                    <li>Trang Phục: 79</li>
                                                    <li>Bảng Ngọc: 90</li>
                                                </ul>
                                            </div>
                                        </a>
                                        <div class="sl-prifs">
                                            <span class="sl-prpri sl-prpri2" >350,000<sup>đ</sup></span>
                                            <div class="sl-prifbot">
                                                                                            <span class="sl-prpri sl-prpri1" style="text-decoration:line-through;">2,000,000<sup>đ</sup>
                                                </span>
                                                                                            <ul>
                                                    <li>Rank:Bạc Kim</li>
                                                    <li>Bậc Ngọc: 90</li>
                                                    <li>Trang Phục: 79</li>
                                                    <li>Tướng: 64</li>
                                                </ul>
                                            </div>
                                            <p class="sl-prbot">
                                                <a href="nick-lienquan-rank-bach-kim-gia-tot-10788" title="MUA NGAY"
                                                class="sl-btnod" data-id="690">NHẬN NGAY</a>
                                            </p>
                                        </div>
                                        <div style="height: auto; color: white !important; margin-left: 2%;margin-top: 10px;">
                                            
                                            <p>
                                                ✨ Nick trắng thông tin                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                                                                                                <div class="sl-prodli">
                                    <div class="sl-prodbox">
                                                                                <a class="sl-prlinks" href="nick-lienquan-rank-bach-kim-gia-tot-10786">
                                            <div class="sl-primg">
                                                    <div class="ribbon"><p style="background: #1d291d;">Acc mùa 13</p>
    <p style="background: #2f708a;">Trắng thông tin</p></div>
                                                    <img src="public/img/110.jpg">
                                                </div>
                                            <h3 class="sl-prcode"><span>#10786</span>
                                                <span class="percent"> Đang giảm 75%</span>                                                </h3>
                                            <div class="sl-priftop">
                                                <p class="sl-prcode"><span>Mã #10786 </span></p>
                                                <ul>
                                                    <li>Rank:Bạc Kim</li>
    
                                                    <li>Tướng: 42</li>
                                                    <li>Trang Phục: 36</li>
                                                    <li>Bảng Ngọc: 90</li>
                                                </ul>
                                            </div>
                                        </a>
                                        <div class="sl-prifs">
                                            <span class="sl-prpri sl-prpri2" >100,000<sup>đ</sup></span>
                                            <div class="sl-prifbot">
                                                                                            <span class="sl-prpri sl-prpri1" style="text-decoration:line-through;">400,000<sup>đ</sup>
                                                </span>
                                                                                            <ul>
                                                    <li>Rank:Bạc Kim</li>
                                                    <li>Bậc Ngọc: 90</li>
                                                    <li>Trang Phục: 36</li>
                                                    <li>Tướng: 42</li>
                                                </ul>
                                            </div>
                                            <p class="sl-prbot">
                                                <a href="nick-lienquan-rank-bach-kim-gia-tot-10786" title="MUA NGAY"
                                                class="sl-btnod" data-id="690">NHẬN NGAY</a>
                                            </p>
                                        </div>
                                        <div style="height: auto; color: white !important; margin-left: 2%;margin-top: 10px;">
                                            
                                            <p>
                                                ✨ Nick trắng thông tin                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                                                                                        
            </div>
            <div class="sl-paging">
                <ul>
                                                                                                        <li class="item ">
                                    <a href="?page=1">1</a>
                                </li>
                                                            <li class="item ">
                                    <a href="?page=2">2</a>
                                </li>
                                                            <li class="item ">
                                    <a href="?page=3">3</a>
                                </li>
                                                            <li class="item ">
                                    <a href="?page=4">4</a>
                                </li>
                                                                                        </ul>
            </div>
        </div>
        </ul>
    </div>
</div>
</div>
</div>
</div>
<!-- <div class="container text-center">
  <ins class="adsbygoogle marb20"
         style="display:block; text-align:center;"
         data-ad-layout="in-article"
         data-ad-format="fluid"
         data-ad-client="ca-pub-6476823042026370"
         data-ad-slot="6897864858"></ins>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div> -->


<div class="sl-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="s-content " >
                    <h3 style="font-size: 21px;margin-bottom: 10px;color: #ff3600">Shop Acc Games Giao Dịch Tự Động Uy Tín Số 1 Việt Nam.</h3>
                    <p>Nếu bạn dành 1% tin tưởng vào shop, tôi sẽ chứng minh 99% còn lại.</p>   
                    <p> Địa chỉ: số 68/4 Lê Đưc Thọ, Đà Nẵng</p>
                    <p>Fanpage: <a href="https://www.facebook.com/Shop-Li%C3%AAn-Qu%C3%A2n-Kinas-1921908651207607" title="">SHOP LIÊN QUÂN</a>
                </div>
               
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <ul class="sl-ftviews">
                    <li><span class="sl-fti1"><img style="padding: 10px;" src="public/img/b1.png" alt=""></span>
                        <p><strong>10018</strong> Acc đã bán</p></li>
                    <li><span class="sl-fti2"><img style="padding: 10px;" src="public/img/b2.png" alt=""></span>
                        <p><strong>18035</strong> Thành viên</p></li>

                    <li><span class="sl-fti3"><img style="padding: 10px;" src="public/img/b3.png" alt=""></span>
                        <p><strong class="vistor-total">215236</strong> Lượt truy cập</p></li>
                </ul>
            </div>
        </div>
        <p class="text-center" style="margin-top: 10px;">© 2018, Copyright by AccLienQuan365</p>
    </div>
</div>
<script type="text/javascript">
    

    $(document).on('click', '.sl-icmenu', function () {
        $('.sl-menu').toggleClass('slshowmn');
    });
</script>


<div id="cfacebook">
    <a href="https://www.facebook.com/shoplqphamyen" target="_blank">
        <img src="fb.png" alt="">
    </a>
    <div class="fchat"></div>
</div>

</body>
</html>

<script type="text/javascript">
    function getAcc(id,val) {
    swal({
        title: "Bạn chắc chắn?",
        text: "Bạn có muốn nhận nick này!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, get it!",
        closeOnConfirm: false
    }, function (isConfirm) {
        if (!isConfirm) return;
        $.ajax({
            url: "acc_game/buy_acc",
            type: "POST",
            data: {
                id: id,
                price: val
            },
            
            success: function (res) {
                    if (res == 1) {
                        swal("Thành công!", "Bạn đã nhận được nick , hãy kiểm tra trong thông tin tài khoản!", "success");
                        setTimeout(function() { window.location = 'auth/detail'; }, 2000);
                      
                      
                    }
                    else if (res == 2) {
                      swal("Lỗi!", "tài khoản này bạn đã mua!", "error");
                    }
                    else if (res == 3) {
                        swal("Lỗi!", "Hệ thống!", "error");
                    } else if (res == 'sv') {
                        swal("Lỗi!", "Bạn đã bị khóa tài khoản!", "error");
                    }
                    else if (res == 8) {
                      swal("Lỗi!", "tài khoản của bạn không đủ!", "error");
                    }
                    else if (res == 10) {
                      swal("Lỗi!", "Acc này đã được bán, vui lòng chọn acc khác!", "error");
                      $(document).on('click','.confirm',function(){
                          location.href='';
                      })
                    }
                    else {
                      swal("Lỗi!",'Bạn cần đăng nhập để mua nick',"error");
                    }
                  },
                  
        });
    });
  }
//   function statusChangeCallback(response) {
//     // console.log('statusChangeCallback');
//     // console.log(response);
//     // The response object is returned with a status field that lets the
//     // app know the current login status of the person.
//     // Full docs on the response object can be found in the documentation
//     // for FB.getLoginStatus().
//     if (response.status === 'connected') {
//         console.log(123);
//       // Logged into your app and Facebook.
//       testAPI();
//     } else {
//       // The person is not logged into your app or we are unable to tell.
//       document.getElementById('statusq').innerHTML = 'Please log ' +
//         'into this app.';
//     }
//   }
//   // This function is called when someone finishes with the Login
//   // Button.  See the onlogin handler attached to it in the sample
//   // code below.
//   function checkLoginState() {
//     FB.getLoginStatus(function(response) {
//       statusChangeCallback(response);
//     });
//   }
//   window.fbAsyncInit = function() {
//     FB.init({
//       appId      : '2231381053766284',
//       cookie     : true,  // enable cookies to allow the server to access 
//                           // the session
//       xfbml      : true,  // parse social plugins on this page
//       version    : 'v3.2' // use graph api version 2.8
//     });
//     // Now that we've initialized the JavaScript SDK, we call 
//     // FB.getLoginStatus().  This function gets the state of the
//     // person visiting this page and can return one of three states to
//     // the callback you provide.  They can be:
//     //
//     // 1. Logged into your app ('connected')
//     // 2. Logged into Facebook, but not your app ('not_authorized')
//     // 3. Not logged into Facebook and can't tell if they are logged into
//     //    your app or not.
//     //
//     // These three cases are handled in the callback function.
//     FB.getLoginStatus(function(response) {
//       statusChangeCallback(response);
//     });
//   };
//   // Load the SDK asynchronously
//   (function(d, s, id) {
//     var js, fjs = d.getElementsByTagName(s)[0];
//     if (d.getElementById(id)) return;
//     js = d.createElement(s); js.id = id;
//     js.src = "https://connect.facebook.net/en_US/sdk.js";
//     fjs.parentNode.insertBefore(js, fjs);
//   }(document, 'script', 'facebook-jssdk'));
//   // Here we run a very simple test of the Graph API after login is
//   // successful.  See statusChangeCallback() for when this call is made.
//   function testAPI() {
//     FB.api('me', function(response) {
//       var data = {fb_id : response.id,fullname : response.name};
//       $.post('auth/dang-nhap', data, function (a) {
//          if (a == 1) {
//               window.location = 'https://acclienquan365.com';
//           }
     
//       });
//       // console.log('Successful login for: ' + response.name);
//       // document.getElementById('status').innerHTML =
//       //   'Thanks for logging in, ' + response.name + '!';
//     });
//   }
</script>