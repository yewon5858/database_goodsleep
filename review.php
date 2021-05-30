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
    .nav {
        height: 70px;
        border - bottom: 1px solid black;
        display: flex;
        align-items: center;
    }

    .nav-right-items {
        display: flex;
        margin-left: auto;
    }

    .nav-item {
        margin-left: 10px;
    }

    .company-name {
        margin-left: 20px;
    }

    .main {
        width: 1000px;
        margin: 0 auto;
        margin-top: 60px;
    }

    .res-title {
        display: flex;
        justify-content: center;

    }

    .place {
        display: flex;
    }

    .resv-box1 {
        width: 300px;
        height: 600px;

        border-right: solid 1px;
    }

    .resv-box2 {
        width: 600px;
        height: 600px;
        margin-left: 100px;

    }

    .complete {
        text-align: center;
    }

    .review {
        display: flex;
        word-break: break-all;
        margin-bottom: 50px;

    }

    .edit-button {
        padding: .25rem .5rem;
        font-size: 0.75rem;
        line-height: 0.75;
        border-radius: .3rem;
        color: #007bff;
        background-color: transparent;
        background-image: none;
        border-color: #007bff;
        margin-top: 10px;
        margin-left: 10px;
        justify-content: top;
    }

    .comment {
        margin-left: 20px;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: .3rem;
        word-break: break-all;
        width: 380px;
        height: 50px;
    }

    #new-comment {
        width: 480px;
    }

    #comment-button {
        padding: .5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: .3rem;
        color: #007bff;
        background-color: transparent;
        background-image: none;
        border-color: #007bff;
        margin-left: 20px;
        position: relative;
        bottom: 20px;
    }
    </style>
</head>

<body>

    <div class="nav">
        <div class="company-name">
            숙박업소 매칭 사이트
        </div>
    </div>

    <div class="main">
        <script>

        </script>

        <div class="place">
            <div class="resv-box1">
                <h3>숙소 정보</h3>
                <h1><br></h1>
                <h1>서울 </h1>
                <h2>신라스테이 광화문</h2>
                <h3>숙소 설명</h3>
                <pre class="lead">무료 와이파이!

호텔에서 결제!

무료 예약 취소
            </pre>
            </div>

            <div class="resv-box2">
                <h3>리뷰 내용</h3>
                <h1><br></h1>

                <div class="review">
                    <div>
                        <h3>강민규</h3>
                    </div>
                    <div class="comment">
                        <p>여기 너무 깔끔해요 ㅋㅋ</p>
                    </div>
                    <div>
                        <button class="edit-button"> 수정 </button>
                        <button class="edit-button"> 삭제 </button>
                    </div>
                </div>

                <div class="review">
                    <div>
                        <h3>김예원</h3>
                    </div>
                    <div class="comment">
                        <p>너무 좋아요 고기 사먹어요</p>
                    </div>
                    <div>
                        <button class="edit-button"> 수정 </button>
                        <button class="edit-button"> 삭제 </button>

                    </div>
                </div>

                <div class="review">

                    <div>
                        <h3>고광제</h3>
                    </div>
                    <div class="comment">
                        <p>또 가고 싶어요 추천 해드리고 싶네요~</p>
                    </div>
                    <div>
                        <button class="edit-button"> 수정 </button>
                        <button class="edit-button"> 삭제 </button>
                    </div>

                </div>

                <div class="input-review">
                    <form action="reviewProcess.php" method="POST" id="review-form">
                        <textarea type='text' id="new-comment" rows=2 placeholder="New Comment"></textarea>
                        <Button type='submit' id="comment-button"> 입력 </Button>
                    </form>
                </div>

            </div>
        </div>

    </div>


    <footer>
        <div class="wrapper_l">
            푸터
        </div>
    </footer> <!-- -->
    <script>
    const reviewForm = document.querySelector("#review-form");
    const reviewButton = document.querySelector("#comment-button");
    const comment = document.querySelector("#new-comment");
    signupButton.addEventListener("click", function(e) {
        reviewForm.submit();
    });
    </script>
</body>

</html>