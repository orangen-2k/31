<!-- WHAT WHY WHERE WHEN WHO HOW -->

<!-- MySQL không thể sử dụng đối mới PHP7 trở lên -->

<!-- MySQLI ( MySQL improved) -->
<?php
// Kết lối SQL
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
// $conn = mysqli_connect($servername, $username, $password);

// Tạo database
$sql = "CREATE DATABASE phptraining";
// Thực thi câu truy vấn
if (mysqli_query($conn, $sql)) {
    echo "Successfully added database<br><br>";
} else {
    echo "Failed to add database: " . mysqli_error($conn) + "<br><br>";
}

// Ngắt kết nối
$conn->close();
?>

<!-- PDO ( PHP Data Object )-->
<?php
try {
    // Chuỗi kết nối
    $conn = new PDO("mysql:host=localhost", 'root', '');
     
    // Thiết lập chế độ exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
    // Câu truy vấn
    $sql = "CREATE DATABASE phptraining_v2";
     
    // Thực thi câu truy vấn
    $conn->exec($sql);
     
    // Thông báo thành công
    echo "Tạo database thành công";
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
 
// Ngắt kết nối
$conn = null;
 ?>