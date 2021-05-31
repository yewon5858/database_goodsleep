<?php // git connet
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
   
    <!-- jQuery -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"/>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- datepicker 한국어로 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/datepicker-ko.js"></script>

    <style>
        /*datepicker에서 사용한 이미지 버튼 style적용*/
        .img.ui-datepicker-trigger {
                margin-left:5px; vertical-align:middle; cursor:pointer;
        }
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
            height : 400px;
            text-align:center;
            border-right: solid 1px;
        }
        .resv-box2{
            width : 500px;
            height : 400px;
            text-align:center;
        
        }
        .complete{
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
        .resv-complete{
            text-align:center;
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
        <div class = "res-title">
            <h1 >예약하기</h1>
         
        </div>
        <hr width ="100%">
        <div class = "place">
            <div class = "resv-box1">
            <h3>숙소 정보</h3>
            <br>
            <h1>서울 </h1>
            <h2>신라스테이 광화문 </h2>
            today : <span id="today"></span>
            <h3>체크인</h3>           
                    <form action ="reservationProcess.php" method="POST" id="reservation_ok">
                    <label for="fromDate">시작일</label>
                    <input type="text" name="fromDate" id="fromDate">
            <h3><br></h3>
            <h3>체크 아웃</h3>
                    <label for="toDate">종료일</label>
                    <input type="text" name="toDate" id="toDate">
                    <!-- <div class = "resv-complete">
                        <input type= "submit" name="submit" class="complete" >
                    </div> -->
                    </form>
                    <div>
            </div>
            </div>

        <script>
            $(function() {
                
             //오늘 날짜를 출력
                $("#today").text(new Date().toLocaleDateString());

                //datepicker 한국어로 사용하기 위한 언어설정
                $.datepicker.setDefaults($.datepicker.regional['ko']);
                // 시작일(fromDate)은 종료일(toDate) 이후 날짜 선택 불가
                // 종료일(toDate)은 시작일(fromDate) 이전 날짜 선택 불가

                //시작일.
                $('#fromDate').datepicker({
                    showOn: "both",                     // 달력을 표시할 타이밍 (both: focus or button)
                    buttonImage: "img/checkdate.png", // 버튼 이미지
                    buttonImageOnly : true,             // 버튼 이미지만 표시할지 여부
                    buttonText: "날짜선택",             // 버튼의 대체 텍스트
                    dateFormat: "yy-mm-dd",             // 날짜의 형식
                    changeMonth: true,                  // 월을 이동하기 위한 선택상자 표시여부
                    minDate: 0,                       // 선택할수있는 최소날짜, ( 0 : 오늘 이전 날짜 선택 불가)
                    onClose: function( selectedDate ) {    
                        // 시작일(fromDate) datepicker가 닫힐때
                        // 종료일(toDate)의 선택할수있는 최소 날짜(minDate)를 선택한 시작일로 지정
                        $("#toDate").datepicker( "option", "minDate", selectedDate );
                    }                
                });

                //종료일
                $('#toDate').datepicker({
                    showOn: "both", 
                    buttonImage: "img/checkdate.png", 
                    buttonImageOnly : true,
                    buttonText: "날짜선택",
                    dateFormat: "yy-mm-dd",
                    changeMonth: true,
                    //minDate: 0, // 오늘 이전 날짜 선택 불가
                    onClose: function( selectedDate ) {
                        // 종료일(toDate) datepicker가 닫힐때
                        // 시작일(fromDate)의 선택할수있는 최대 날짜(maxDate)를 선택한 종료일로 지정 
                        $("#fromDate").datepicker( "option", "maxDate", selectedDate );
                    }               
                });
            });
        </script>

            <div class = "resv-box2">
            <h3>사용자 정보</h3>
                <br>
                <h1>강민규 </h1>
                <h3>이메일</h3>
                <p>mgo8434@naver.com</p>
            </div>
        </div>
        <div class = "resv-complete">
                        <button type= "submit" form = "reservation_ok" name="submit" class="complete">예약완료</button>
                    </div>
    </div>
    
    <footer>
        <div class="wrapper_l">
            푸터
        </div>
    </footer>

</body>

</html>