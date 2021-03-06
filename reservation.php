<?php // git connet
session_start(); 
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
    <div class="nav">
        <div class="company-name">
            ???????????? ?????? ?????????
        </div>
    </div>

    <div class="main">
        <div class="res-title">
            <h1>?????? ?????? ?????? - ?????? ?????? ??????</h1>

        </div>
        <hr width="100%">
        <div class="place">
            <div class="resv-box1">
                <h3>?????? ??????</h3>
                <h1><br></h1>
                <h1>?????? </h1>
                <h2>??????????????? ????????? </h2>
                <div>
                    <h3>?????????</h3>
                    <p>2019-01-01</p>
                </div>
                <div>
                    <h3>?????? ??????</h3>
                    <p>2019-01-03</p>

                </div>
            </div>

            <div class="resv-box2">
                <h3>????????? ??????</h3>
                <h1><br></h1>
                <h1>????????? </h1>
                <h3>?????????</h3>
                <p>mgo8434@naver.com</p>
            </div>
        </div>

        <div class="complete">
            <h3><br></h3>
            <button class="button-find" onclick ="location.href= 'index.php'" >
             ???????????? ??????
            </button>
        </div>

    </div>
 
    <footer>
        <div class="wrapper_l">
            ??????
        </div>
    </footer>

</body>

</html>