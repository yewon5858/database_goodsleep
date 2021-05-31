<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
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
        .title{
            text-align: center;
            font-size : 3.5rem;
            font-weight: 300
        }
        .subtitle{
            text-align: center;
            font-size: 1.5rem;
            font-weight: 300;
            margin-bottom: 40px;
            margin-top: 30px;
        }

        .main{
            width: 1000px;
            margin: 0 auto; 
            margin-top: 60px;
        }
        .prices{
            display: flex;

        }

        .price-item{
            width: 300px;
            height: 350px;
            border: 1px solid black;
            margin: 20px;
            border-radius: 4px;
            text-align: center;
        }
        .price-item-title{
            font-size: 1.5rem;
            background: rgba(0,0,0,.03);
            text-align: center;
            height: 53px;
            line-height: 53px;
            border-bottom: 1px solid black;
        }
        .price-item-price{
            font-size: 2.5rem;
            font-weight: bold;
            padding: 10px;
        }

        .price-item-button{
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
        .price-item-detail-top{
            font-size: 20px;
            margin-bottom: 10px;
        }
        .price-item-button--active{
            background-color: #007bff;
            color: white;
        }
        
        .d-flex{
            background-color: transparent;
            background-image: none;
            border-color: #007bff;
            color: #007bff;
        }
    </style>
</head>

<body>
     <div class="nav">
        <div class="company-name">
        <a href="index.php" style="text-decoration:none">goodsleep</a>
        </div>
            <div class="nav-right-items">
                          
                <ul class="nav justify-content-end">
                    <?php
                    if (isset($_SESSION['userId'])) {
                        echo "{$_SESSION['userId']}님 환영합니다  ";
                    ?>
                        <button class="nav-item d-flex align-items-center">마이페이지</li>                    
                        <button class="nav-item d-flex align-items-center" onclick="logout()">로그아웃</li>
                      
                    <?php
                    } else {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="signup.php">회원가입 </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="login.php">로그인</a>
                        </li>

                    <?php
                    }
                    ?>
                </ul>
                <script>
                    function logout() {
                        console.log("hello");
                        const data = confirm("로그아웃 하시겠습니까?");
                        if (data) {
                            location.href = "logoutPrcoess.php";
                        }

                    }
                </script>
   
            </div>
    </div>
    <div class = "main">
        <div class="title">
            Good Sleep
        </div>
        <div class="subtitle">
            숙박 업소 매칭 웹사이트
            누구나 마음편히 놀 수 있게 [용기를] 주는 회사

        </div>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "goodsleep");
            $sql = "SELECT * FROM place";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>
        <div class="prices">
            <div class="price-item">
                <div class="price-item-title">
                <?= $row['location']?>
                </div>
                <div class="price-item-price">
                    $0 / mo
                </div>
                <div class="price-item-detail">
                   <?= $row['information']?>
                </div>
                <?php
                    if (isset($_SESSION['userId'])) {
                    ?>
                <button class="price-item-button" onclick = "Click_me_1()">
                    Click me
                </button>
                <script>
                    function Click_me_1() {
                        console.log("Click_me_1");
                            location.href = "detail_1.php";
                    }
                </script>
                <?php
                    }
                    ?>
            </div>
            <?php
            $row = mysqli_fetch_assoc($result);
            ?>
             <div class="price-item">
                <div class="price-item-title">
                    <?= $row['location']?>
                </div>
                <div class="price-item-price">
                    $0 / mo
                </div>
                <div class="price-item-detail">
                    <?= $row['information']?>
                </div>
                <?php
                    if (isset($_SESSION['userId'])) {
                    ?>
                <button class="price-item-button"onclick = "Click_me_2()">
                    Click me
                </button>
                <script>
                    function Click_me_2() {
                        console.log("Click_me_2");
                            location.href = "detail_2.php";
                    }
                </script>
                <?php
                    }
                    ?>
            </div>
            <?php
            $row = mysqli_fetch_assoc($result);
            ?>
             <div class="price-item">
                <div class="price-item-title">
                    <?= $row['location']?>
                </div>
                <div class="price-item-price">
                    $0 / mo
                </div>
                <div class="price-item-detail">
                    <?= $row['information']?>
                </div>
                <?php
                    if (isset($_SESSION['userId'])) {
                    ?>
                <button class="price-item-button" onclick = "Click_me_3()">
                    Click me
                </button>
                <script>
                    function Click_me_3() {
                        console.log("Click_me_3");
                            location.href = "detail_3.php";
                    }
                </script>
                <?php
                //완료
                    }
                ?>
            </div>
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