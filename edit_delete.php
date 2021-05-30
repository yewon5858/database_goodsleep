<?php
    $conn = mysqli_connect("localhost", "root", "", "goodsleep");
    $sql = $_POST['sql'];
    $result = mysqli_query($conn, $sql);


?>