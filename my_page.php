<?php // git connet
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
    <style>
      .nav{
            height: 70px;
            border - bottom: 1px solid black;
            display: flex;
            align-items: center;
        }
         .nav-right-items{
            display: flex;
            margin-left: auto;
        }
        .nav-item{
            margin-left: 10px;
        }
        .company-name{
            margin-left: 20px;
        }
       .mypage{
            width: 1000px;
            margin: 0 auto; 
            margin-top: 60px;
        }
        .place{
            display : flex;
        }

        .my_box1 {
        width: 300px;
        height: 500px;

        border-right: solid 1px;
         }

         .my_box2 {
        width: 600px;
        height: 500px;
        margin-left: 100px;

         }
    </style>
</head>

<body>
    <div class="nav">
        <div class="company-name">
        <a href="index.php" style="text-decoration:none">goodsleep</a>
        </div>
    </div>  



    <div class = "mypage">
       <h1>마이페이지</h1>
        <hr width ="100%">
        <div class = "place">
            <div class = "my_box1">
            <h3>사용자 정보</h3>
            <h3><br><h3>
            <h4> <?= $_SESSION['userId'] ?> </h4>
            
            </div>
            <div class = "my_box2">
            <h3>예약 내역</h3>
           
            </div>
        
        </div>
     
        
    </div>  
    <footer>
        <div class="wrapper_l">
            푸터
        </div>
    </footer>
</body>

</html>