<?php
    $conn = mysqli_connect("localhost", "root", "11111111", "goodsleep");
    $sql = $_POST['sql'];
    $result = mysqli_query($conn, $sql);


?>