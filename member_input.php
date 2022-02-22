<?php 

$name = $_POST[ 'name' ];
$password = $_POST[ 'password' ];
$age = $_POST[ 'age' ];


$host = 'localhost';
$user = 'root';
$pw = 'alstjr5587';
$dbName = 'test';
$mysqli = new mysqli($host, $user, $pw, $dbName);


$sql = "INSERT INTO test.member(name,age,password) VALUES('$name','$age','$password');";

$result = mysqli_query($mysqli,$sql);

if($result){
    echo "아이디: " . $name. " 나이:" . $age. " 비번:" . $password. "<br>";


}else{
    echo '<h1>실패<h1>';
}
 mysqli_close($mysqli); 
?>