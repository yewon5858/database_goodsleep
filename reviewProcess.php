<?php
session_start();
    
$conn = mysqli_connect("localhost", "root", "", "goodsleep");
$userId = $_SESSION['userId'];
$pos = $_SESSION['placePos'];


$sql_re = "SELECT idx FROM user WHERE email = '$userId'";
$result_re = mysqli_query($conn, $sql_re);
$row = mysqli_fetch_array($result_re);

$sql = "
    INSERT INTO comment
    (U_idx, P_idx, text)
    VALUES('$row[0]', '$pos','{$_POST['text']}'
    )";
    
echo $sql;
$result = mysqli_query($conn, $sql);

?>
<script>
location.href = "review.php";
</script>
<?php

?>