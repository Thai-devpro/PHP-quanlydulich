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
        <?php session_start(); ?>
        <style>
            body{
                
                font-family: 'Roboto', sans-serif;
                font-weight: 800;
            }
        </style>
    </head>
    <body>
    <?php require_once "./view/header.php" ?>


   <div class="article-composition">
        <div class="container">
            <p style="color:#000;font-family: 'Roboto', sans-serif;, cursive; font-weight:500; font-size:60px; ">Liên hệ</p>
                 <p style="color:#000;font-family: 'Roboto', sans-serif;, cursive; font-weight:500; font-size:40px; ">Mọi góp ý xin vui lòng liên hệ</p>
                 <p style="color:#333;font-family: 'Roboto', sans-serif;, cursive; font-weight:400; font-size:30px; ">Email:____________________</p>
                 <p style="color:#333;font-family: 'Roboto', sans-serif;, cursive; font-weight:400; font-size:30px; ">Phone:____________________</p>
                 <p style="color:#333;font-family: 'Roboto', sans-serif;, cursive; font-weight:400; font-size:30px; ">Address: An Giang</p>
            </div>
   </div>
        <?php require_once "./view/footer.php" ?>
   
</body>
</html>