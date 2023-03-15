<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Du Lịch An Giang</title>
        <link rel="icon" href="./upload/logo.png">
        <link rel="stylesheet" href="./include/fontawesome/css/all.css">
        <link rel="stylesheet" href="./include/style/bootstrap.css">
        <link rel="stylesheet" href="include/mystyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
        <script src="./include/script/myjs.js"></script>
        <?php session_start(); ?>
        <style>
            body{
                background-image: url("./upload/image/anh9.jpg");
            }
        </style>
    </head>
    <body>
    <?php require_once './view/header.php' ?>
    <?php
        if(isset($_POST['logout'])){
            require_once "./control/logout.php";
            $logout = new Logout();
            $logout = $logout->logout();
            echo '<script>window.location="./";</script>';
        }
    require_once "./control/xulythaydoimatkhau.php";
    require_once "./control/xulythaydoithongtin.php";
    require_once "./module/ClassUser.php";
        $getClass = new classUser();
        $getemail = $_SESSION['email'];
        $getdata = $getClass->getUserByid($getemail);
      
    ?>
    <div class = "container" style="margin-top: 50px; margin-bottom:50px;" >
    <div class="row">

                <div class="col-4">
                    <div class="box-black" style= "background-color: #fff;">
                        <div style="width: 100%; text-align:center; color: #0098a1;">
                            <h1>Tài khoản</h1>
                        </div>
                        <hr style="height: 1px; background:#ccc">
                        <div class="menu-account" onclick="BlockInformation()">
                            <h4>Thông tin cá nhân</h4>
                        </div>
                        <?php
                            if(isset($_SESSION['email']))
                            {
                                if($_SESSION['email'] != 'admin')
                                 echo '<hr style="height: 1px; background:#ccc">
                                 <div class="menu-account" onclick="BlockChangeInformation()">
                                     <h4>Sửa thông tin</h4>
                                 </div>
                                 <hr style="height: 0.5px; background:#ccc">
                                <div class="menu-account" onclick="BlockChangePassword()">
                                    <h4>Thay đổi mật khẩu</h4>
                                </div>
                                 ';
                                 else echo ' <hr style="height: 1px; background:#ccc">
                                 <a href="./admin"><div class="menu-account" onclick="BlockInformation()">
                                     <h4>Trang Quản Trị Hệ Thống</h4>
                                 </div></a>';
                            }
                        ?>
                        <hr style="height: 1px; background:#ccc">
                        <div style="width: 100%; text-align:center">
                            <form method="POST">
                                <input type="text" name="logout" style="display: none;">
                                <button style="border: 0px; background:none;"><h4 class="menu-account-logout">Đăng xuất</h4></button>
                            </form>
                        </div>
                    </div>
                </div>
                 <!--Hien thi  thong tin-->
                 <div class="col-8" id="Information" >
                <div class="box-black" style="background-color:#fff;">
                        <div style="width: 100%;color:#0098a1">
                            <h1>Thông tin cá nhân</h1>
                            <div style="width: 350px; height:5px; background:#ccc">
                                <div style="width: 100px; height:5px; background:#456"></div>
                            </div>
                            <div style="width: 100%; text-align:center; margin-top:50px;">
                                <img src="./upload/unnamed.png" style="height: 200px; border-radius:200px;">
                                <p style="font-size: 35px; color::#0098a1;"><?php echo $getdata['name'] ?></p>
                               <hr style="width: 250px; background:chocolate; height:3px;">
                            </div>
           
                <div class="form-group">
                    <label id="tieudeten" style="color: :#0098a1;">Họ tên</label>
                    <p style="font-size: 18px; color:#333;"><?php echo $getdata['name'] ?></p>
                </div>
                <div class="form-group">
                    <label for="" style="color: :#0098a1;">Email</label>
                    <p style="font-size: 18px; color:#333;"><?php echo $getdata['email'] ?></p>
                </div>
            <div id="emaill" style="display:none;background: #f5c6cb;padding: 3px;border-left: #e00 solid 5px;">Email không hợp lệ</div>
                
                 <div id="passerror" style="display:none;background: #f5c6cb;padding: 3px;border-left: #e00 solid 5px;">Mật khẩu không đúng</div>
                <div class="form-group">
                    <label for="" style="color: :#0098a1;">SĐT</label>
                    <p style="font-size: 18px; color:#333;"><?php echo $getdata['phonenumber'] ?></p>
                </div>
                     <div id="sdt" style="display:none;background: #f5c6cb;padding: 3px;border-left: #e00 solid 5px;">SĐT không hợp lệ</div>
                <div class="form-group">
                    <label for="" style="color: :#0098a1;">Địa chỉ</label>
                    <p style="font-size: 18px; color:#333;"><?php echo $getdata['address'] ?></p>
                  </div>
                  
                        </div>
                 </div>
                </div>
                <!--thay doi thong tin-->
                <div style="display:none" class="col-8" id="ChangeInformation">
                <div class="box-black"  style="background-color:#fff;">
                        <div style="width: 100%;color:#0098a1;">
                            <h1>Sửa thông tin</h1>
                            <div style="width: 350px; height:5px; background:#ccc">
                                <div style="width: 100px; height:5px; background:#456"></div>
                            </div>
                           
            <form  method="post" action="#" style="margin-top: 30px; margin-bottom: 30px; ">
          
                <div class="form-group">
                    <label id="tieudeten" style="color: #0098a1;;">Họ tên</label>
                    <input type="text" class="form-control"   id="name" value="<?php echo $getdata['name'] ?>" required="" placeholder="Tan Cu Chan" name="name">
                </div>
                <div class="form-group">
                    <label for="" style="color: #0098a1;">Email</label>
                    <input type="text" class="form-control" id="email" value="<?php echo $getdata['email'] ?>" required="" placeholder="nguyenvana@gmail.com" name="email">
                </div>
            <div id="emaill" style="display:none;background: #f5c6cb;padding: 3px;border-left: #e00 solid 5px;">Email không hợp lệ</div>
                
                 <div id="passerror" style="display:none;background: #f5c6cb;padding: 3px;border-left: #e00 solid 5px;">Mật khẩu không hợp lệ</div>
                <div class="form-group">
                    <label for="" style="color: #0098a1;">Phone number</label>
                    <input type="text" class="form-control" id="phonenumber"  value="<?php echo $getdata['phonenumber'] ?>" required="" placeholder="0347194217" name="phonenumber">
                </div>
                     <div id="sdt" style="display:none;background: #f5c6cb;padding: 3px;border-left: #e00 solid 5px;">SĐT không hợp lệ</div>
                <div class="form-group">
                    <label for="" style="color: #0098a1;">Địa chỉ</label>
                    <input type="text" class="form-control" id="address"  value="<?php echo $getdata['address'] ?>"  required=""  placeholder="xom Son Tien - xa Quet Thang - tp.Thai Nguyen" name="address">
                  </div>
                  <div style="text-align: center"><button style="margin-top: 10px;" class="btn btn-secondary">Sửa thông tin</button></div>
                  </form>
                        </div>
                 </div>
                </div>
                <!--Thay doi mat khau-->
                <div class="col-8" style="display: none;" id="ChangePassword">
                <div class="box-black"  style="background-color:#fff;">
                        <div style="width: 100%;color:#0098a1">
                            <h1>Thay đổi mật khẩu</h1>
                            <div style="width: 350px; height:5px; background:#ccc">
                                <div style="width: 100px; height:5px; background:#456"></div>
                            </div>
                            
            <form  method="post" action="#" style="margin-top: 30px; margin-bottom: 30px">
            <div class="form-group">
                    <label for="" style="color: #0098a1;">Mật khẩu cũ</label>
                    <input type="password" class="form-control"  id="password" required="" placeholder="Enter your password" name="oldpassword">
                </div>

             <div class="form-group">
                    <label for="" style="color: #0098a1;">Mật khẩu mới</label>
                    <input type="password" class="form-control"  id="password" required="" placeholder="Enter your password" name="new1password">
                </div>
                <div class="form-group">
                    <label for="" style="color: #0098a1;">Nhập lại mật khẩu</label>
                    <input type="password" class="form-control"  id="password2" required="" placeholder="Enter your confirm password" name="new2password">
                </div>

                  <div style="text-align: center"><button style="margin-top: 10px;" class="btn btn-secondary">Thay đổi mật khẩu</button></div>
                  </form>
                        </div>
                 </div>
                </div>

        </div>
   </div>

   <?php require_once"./view/footer.php";?>
</body>
</html>