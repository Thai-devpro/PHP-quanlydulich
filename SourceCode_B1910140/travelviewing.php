<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Du Lịch An Giang</title>
        <script src="include/script/ckeditorbasic/ckeditor.js"></script>
        <link rel="icon" href="./upload/logo.png">
        <link rel="stylesheet" href="./include/fontawesome/css/all.css">
        <link rel="stylesheet" href="./include/style/bootstrap.css">
        <link rel="stylesheet" href="include/mystyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
             <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>


        <?php session_start(); ?>
        <style>
            body{
                background: #f8f8f8;
            }
            .box-posts{
                background: #EEE5DE;
                border:none;
                border-radius: 15px;
                box-shadow: 0px 0px 5px 5px #aaa;
            }
            .box-posts:hover{
                box-shadow: 0px 0px 5px 5px #789;
            }
            td, tr{
                padding-top: 15px;
            }
        </style>

    </head>
    <body style="background: #ddd;">
        
    <?php require_once "./view/header.php" ?>

    <div class="container" >
    <br>
    <h1 style="color: #0098a1;">	

    <?php
    require_once './module/travelPost.php';
         $getClass = new travelPost();
         $getidtravle = $_GET['id'];
         $getdata = $getClass->getTravelviewingByID($getidtravle);
         $getListcmt =  $getClass->getListcomment($getidtravle);
        $id = $_GET['id'];
         if(isset($_POST['cmt'])){
            $email = $_SESSION['email'];
            $post=$_GET['id'];
            $cmt = $_POST['cmt'];
            $access = $getClass->addcomment($email,$post,$cmt);
            unset($_POST['cmt']);
            echo '<script>window.location="./travelviewing.php?id='.$id.'";</script>';
        }

        if ($getListcmt!=false) $getCount = sizeof($getListcmt);
        else $getCount=0;

        $getClass->dieconnect();

       

    ?>

<?php echo $getdata[4]; ?></h1>
<br><br>
<a><?php echo $getdata[5]; ?></a>
<div class="row">
            <div class="col-8">

            <div id="mycarousel" class="carousel slide" data-ride="carousel">

<!--Cho hiện thị chỉ số nếu muốn-->
<ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1" class=""></li>
    <li data-target="#mycarousel" data-slide-to="2" class=""></li>
</ol>
<!--Hết tạo chỉ số-->

<!--Các slide bên trong carousel-inner-->
<div class="carousel-inner">

    <!--Slide 1 thiết lập hiện thị đầu tiên .active-->
    <div class="carousel-item active">
        <img class="d-block w-100" style="width: 100%; height:400px; "  src="<?php echo $getdata[1]; ?>">

    </div>

    <!--Slide 2-->
    <div class="carousel-item">
        <img  style="width: 100%; height:400px;" class="d-block w-100" src="<?php echo $getdata[2]; ?>">
    </div>
    <!--Slide 3-->
    <div class="carousel-item">
        <img  style="width: 100%; height:400px;" class="d-block w-100" src="<?php echo $getdata[3]; ?>">
    </div>

</div>



<!--Cho thêm khiển chuyển slide trước, sau nếu muốn-->
    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span></a>
    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
<!--Hết tạo điều khiển chuyển Slide-->

</div>

<!--Het-->
            </div>
            <div class="col-4"  style="background: #eee;">
                <h3 style="color: #0098a1;">Thông tin chuyến đi</h3>
                <table>
                <tr>
                <tr>
                    <td><i class="fas fa-barcode"></i></td>
                     <td style="padding-left: 10px;"><b>Mã địa điểm: </b><span style="color:  #0098a1;"><?php echo $getdata[6]; ?></span></td>
                </tr>
                <tr>
                    <td><i class="fas fa-calendar-alt"></i></td>
                    <td style="padding-left: 10px;"><b>Ngày khởi hành: </b><span style="color:  #0098a1;"><?php echo $getdata[7]; ?></span></td>
                </tr>
                <tr>
                    <td><i class="far fa-clock"></i></td>
                    <td style="padding-left: 10px;"><b>Thời gian: </b><span style="color:  #0098a1;"> <?php echo $getdata[8]; ?> ngày</span></td>
                </tr>
                <tr>
                    <td> <i class="fas fa-plane-departure"></i></td>
                    <td style="padding-left: 10px;"><b>Nơi xuất phát: </b> <span style="color:  #0098a1;"><?php echo $getdata[9]; ?></span></td>
                </tr>
                <tr>
                        <td> <i class="fas fa-plane-arrival"></i></td>
                        <td style="padding-left: 10px;"><b>Nơi đến: </b><span style="color:  #0098a1;"><?php echo $getdata[10]; ?></span></td>
                    </tr>
                    <tr>
                        <td> <i class="fas fa-chair"></i></td>
                        <td style="padding-left: 10px;"><b>Số lượng hành khách: </b><span style="color: #0098a1;"> <?php echo $getdata[11]; ?></span></td>
                    </tr>
                </table>
                <div style=" font-weight: 500;background: #0098a1; text-align:center; position:absolute; bottom:20px; width:92%; height:40px; color:#eee; line-height:40px;">
                    <span>SĐT liên hệ: <?php echo $getdata[12]; ?></span>
                </div>
            </div>
        </div>
        <br>

        
        
        <br>
        <div style="background: #eee; padding:15px">
                    <h2>NHẬN XÉT</h2>
                    <div style="width: 100%; border-radius: 3px; padding: 10px">
                       <?php if(isset($_SESSION['email'])) echo ' <form method="post">
                            <input type="text" name="cmt" id="cmt" class="form-control" style="width: 100%; height: 50px">
                            <div style="text-align: right; margin-top: 15px">
                            <button class="btn btn-secondary" style="background: #0098a1;">Comment</button> </div>
                        </form>
                       ';

                        else {
                            echo '<span>Please <a href="./login.php">login</a> to comment !!</span>';
                        }
                       ?>

                        <hr>
                        <span style="font-size: 13px; margin-left:10px; position:relative; top:-20px;">Có tất cả <?php echo $getCount ?> nhận xét</span>

                     <?php

                            $dem=0;
                         while($dem++ < $getCount)  echo ' <div class="row" style="margin-top:10px">
                           <div class="col-1" style="text-align: center;">
                               <img class="imgicon-avatar-cmt" style="float:left; width:60px; border-radius:60px;"  src="./upload/unnamed.png">
                           </div>
                           <div class="col-11">
                               <span style="font-weight: 500">'.$getListcmt[$dem-1][1].'</span><br>
                               <span style="font-family: none;">'.$getListcmt[$dem-1][0].'</span>
                           </div>
                         </div>';
                        ?>
                    </div>

        </div>
    </div>
    <br><br>
    <?php require_once"./view/footer.php"; ?>
   <script>
      
   </script>
   </body>
   </html>
