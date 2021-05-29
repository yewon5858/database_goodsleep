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
       .main{
            width: 1000px;
            margin: 0 auto; 
            margin-top: 60px;
        }
        .place{
            display : flex;
        }
        .place-explain{
            width : 500px;
            height : 300px;
        }
        .place-picture{
            width : 500px;
            height : 300px;
        }
         .button-review{
            padding : .5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: .3rem;
            color: #007bff;
            background-color: transparent;
            background-image: none;
            border-color: #007bff;
            margin-top : 30px;
        }
        .button-reservation{
            padding : .5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: .3rem;
            color: #007bff;
            background-color: transparent;
            background-image: none;
            border-color: #007bff;
            margin-top : 30px;
        }
        .button-contain{
            text-align : right;
        }
    </style>
</head>

<body>
    <div class="nav">
        <div class="company-name">
            숙박업소 매칭 사이트
        </div>
    </div>

    <div class = "main">
       <h1>서울</h1>
        <h2>신라스테이 광화문</h2>
        <hr width ="100%">
        <div class = "place">
            <div class = "place-explain">
            <h3>숙소 설명</h3>
            <pre class="lead">무료 와이파이!

호텔에서 결제!

무료 예약 취소
            </pre>
            </div>

            <div class = "place-picture">
            <h3>사진</h3>
            <img src="images/200x200.png" alt="My Image">  <!-- 사진 경로 수정 -->
            </div>
        </div>
     
        <div class = "button-contain">
            <button class="button-reservation" onclick = "reservation()">
                예약하기
            </button>

            <button class="button-review" onclick = "review()">
                리뷰보기
            </button>
        </div>
    </div>  
       




    <footer>
        <div class="wrapper_l">
            푸터
        </div>
    </footer>

    <script>
        function review() {
            console.log("review");
            location.href = "review.php";
        }

        function reservation() {
            console.log("reservation");
            location.href = "reservation.php";
        }
    </script>
</body>

</html>