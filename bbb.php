<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "messagebord";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "select name,content,cue,time from message";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) >0  ){
    while($row = mysqli_fetch_assoc($result)){
        echo "用户名：".$row["name"]."<br>";
        echo "留言内容:".$row["content"]."<br>";
        echo "cue：".$row["cue"]."<br>";
        echo "留言时间:".$row["time"]."<br>";
        echo "<br>";}
    }else{
    echo"0";
}

mysqli_close($conn);
?>
