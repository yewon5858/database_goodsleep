<?php // git connet
session_start(); 
$detail_position = $_POST['pos'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
        integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous">
    </script>
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
        .res-title{
            display : flex;
            justify-content: center;
           
        }
        .place{
            display : flex;
        }
        .resv-box1{
            width : 500px;
            height : 350px;
            text-align:center;
            border-right: solid 1px;
        }
        .resv-box2{
            width : 500px;
            height : 350px;
            text-align:center;
        
        }
        .complete{
            text-align:center;
        }
        .button-find{
            text-align:center;
            padding : .5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: .3rem;
            color: #007bff;
            background-color: transparent;
            background-image: none;
            border-color: #007bff;
            margin-top : 10px;
        }
        
    </style>
</head>

<body>
    <?php
     $conn = mysqli_connect("localhost", "root", "", "goodsleep");
     $sql = "SELECT * FROM place WHERE P_idx = $detail_position";
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result);
     ?>
    <div class="nav">
        <div class="company-name">
            숙박업소 매칭 사이트
        </div>
    </div>

    <div class="main">
        <div class="res-title">
            <h1>예약 완료 화면 - 예약 내역 조회</h1>

        </div>
        <hr width="100%">
        <div class="place">
            <div class="resv-box1">
                <h3>숙소 정보</h3>
                <h1><br></h1>
                <h1>서울 </h1>
                <h2>신라스테이 광화문 </h2>
                <div>
                    <h3>체크인</h3>
                    <p>2019-01-01</p>
                </div>
                <div>
                    <h3>체크 아웃</h3>
                    <p>2019-01-03</p>

                </div>
            </div>

            <div class="resv-box2">
                <h3>사용자 정보</h3>
                <h1><br></h1>
                <h1>강민규 </h1>
                <h3>이메일</h3>
                <p>mgo8434@naver.com</p>
            </div>
        </div>

        <div class="complete">
            <h3><br></h3>
            <button class="button-find" onclick ="location.href= 'index.php'" >
             메인으로 가기
            </button>
        </div>

    </div>

<<<<<<< HEAD

=======
    
>>>>>>> 2813583d9673b84ea005b828183d99702ffaa07b
    <footer>
        <div class="wrapper_l">
            푸터
        </div>
    </footer>

</body>

</html>