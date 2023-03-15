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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        
        <?php session_start(); ?>
        <style>
            body{
                font-family: 'Roboto', sans-serif;
            }
        </style>
    </head>
<body>
        
    <?php require_once "./view/header.php" ?>
    <div class="greeting">
 

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
        <img class="d-block w-10" style="width: 100%; height:500px; min-width:1000px;"  src="./upload/image/br4.jpg">
        <!--Cho thêm hiện thị thông tin-->
       
    </div>

    <!--Slide 2-->
    <div class="carousel-item"> 
        <img  style="width: 100%; height:500px;" class="d-block w-10" src="./upload/image/br.jpg">
    </div>
    <!--Slide 3-->
    <div class="carousel-item">
        <img  style="width: 100%; height:500px;" class="d-block w-10" src="./upload/image/anh7.jpg">
    </div>
    
</div>



<!--Cho thêm khiển chuyển slide trước, sau nếu muốn-->
    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span></a>
    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
<!--Hết tạo điều khiển chuyển Slide--> 

    </div>
        
<!--Het-->
    </div>

   <div style="background: #fff; width:100%;">
        <div class="container">
        <br>
            <p style="color: #0098a1; font-size:70px; font-weight:500 ;font-family: font-family: 'Roboto', sans-serif;, cursive;" >AN GIANG</p>
            <p style="color: #0098a1; font-size:20px; font-weight:300 ; font-family: font-family: 'Roboto', sans-serif;, cursive;" >An Giang là một mảnh đất thuộc vùng đồng bằng sông Cửu Long và là một trong những tỉnh có biên giới giáp với nước bạn Campuchia. An Giang sở hữu diện tích khá lớn ở miền Tây Nam Bộ, trong đó có nhiều cảnh quan thiên nhiên tươi đẹp, có sông nước mênh mông, có núi non kỳ vĩ, có rừng tràm xanh ngắt một màu, có đồng ruộng bát ngát,........</p>
       <br> 
    </div>
   </div>
</div>
</div>
   <?php require_once "./view/footer.php" ?>
</body>
</html>

