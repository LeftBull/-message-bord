str=request.getParameter("str")<br>
str= new String(str.getBytes(), "utf-8");<br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "messagebord";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "连接成功";

$name = $_POST["fname"];
$content1 = $_POST["con"];
$cue2 = $_POST["cue1"];

$sql = "insert into message (name, content, cue)
values ('$name','$content1','$cue2')";

if (mysqli_query($conn,$sql)){
    echo"留言成功";
}else{
    echo"留言失败";
}

mysqli_close($conn);

?>
<br>
<a href="bbb.php">点击转到留言板</a><br>
