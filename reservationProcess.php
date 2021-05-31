<?php
session_start(); 
$conn = mysqli_connect("localhost", "root", "", "goodsleep"); //데이터 베이스 접속
echo $_POST['fromDate'] . $_POST['toDate'] ;
$userId = $_SESSION['userId'];
$placePos = $_SESSION['placePos'];
echo $placePos."read-me";

$sql_re = "SELECT idx FROM user WHERE email = '$userId'";

echo $sql_re;
$result_re = mysqli_query($conn, $sql_re);
$row = mysqli_fetch_array($result_re);
echo $row[0];

$sql = "
    INSERT INTO reservation
    (U_idx,P_idx,checkin, checkout)
    VALUES('{$row[0]}','{$_SESSION['placePos']}','{$_POST['fromDate']}','{$_POST['toDate']}'
    )";
echo $sql;
$result = mysqli_query($conn, $sql);
echo $sql;
?>
<script>
        alert("숙소 예약이 완료되었습니다");
        location.href = "reservation.php";
</script>
