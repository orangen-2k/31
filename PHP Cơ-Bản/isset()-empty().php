<form method="post">
  
Tên :<input type="text" name="username"><br/>
Pass :<input type="text" name="password"><br/>
<input type="submit" value="Sum" name="click"><br/><br/></pre>
</form>
 
<?php
$username = empty($_POST['username']);
$password = empty($_POST['password']);
if ($username == ' ') {
echo 'Bạn chưa nhập tên đăng nhập<br/>';
}
 
if ($password == ' ') {
echo 'Bạn chưa nhập mật khẩu';
}
?>
<html>
<head>
<title> Ví dụ isset PHP </title>
</head>
<body>
 
<form method="post">
 
Giá trị 1 :<input type="text" name="str1"><br/>
Giá trị 2 :<input type="text" name="str2"><br/>
<input type="submit" value="Sum" name="click"><br/><br/>
 
</form>
<?php
if(isset($_POST["click"]))
{
$sum=$_POST["str1"] + $_POST["str2"];
echo "Kết quả = ". $sum;
 
}
?>
 
</body>
</html>