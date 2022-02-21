<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'alstjr5587';
    $dbName = 'test';
    $mysqli = new mysqli($host, $user, $pw, $dbName);


    $sql = "SELECT name,age FROM member";

    $result = mysqli_query($mysqli,$sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
        echo "아이디: " . $row["name"]. " 나이:" . $row["age"]. "<br>";
        }
        }else{
        echo "테이블에 데이터가 없습니다.";
        }


    mysqli_close($conn); 

    
?>

