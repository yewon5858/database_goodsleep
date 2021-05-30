<?php
$conn = mysqli_connect("localhost", "root", "11111111", "goodsleep");
$hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "
    INSERT INTO user
    (email, password)
    VALUES('{$_POST['email']}', '{$hashedPassword}'
    )";
echo $sql;
$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
?>
<script>
    alert("회원가입이 완료되었습니다");
    location.href = "index.php";
</script>
<?php
}
?>