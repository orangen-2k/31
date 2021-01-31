<!-- WHAT WHY WHERE WHEN WHO HOW -->

<!-- MySQL không thể sử dụng đối mới PHP7 trở lên -->

<!-- MySQLI ( MySQL improved ) -->
<?php
// Kết lối SQL
$servername = "localhost";
$database = "phptraining";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);


// Câu SQL delete
$sql = "DELETE FROM testcrud WHERE id=1";

// Thực hiện câu truy vấn
if ($conn->query($sql) === TRUE) {
    echo "Xóa thành công<br><br>";
} else {
    echo "Xóa thất bại: " . $conn->error +"<br><br>";
}

// Ngắt kết nối
$conn->close();
?>

<!-- PDO ( PHP Data Object )-->
<?php 
try {
    // Kết nối
    $conn = new PDO("mysql:host=localhost;dbname=phptraining", 'root', '');
 
    // Thiết lập exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    // Câu SQL
    $sql = "DELETE FROM testcrud WHERE id=2";
 
    // Thực thi câu truy vấn
    $conn->exec($sql);
 
    echo "Xóa thành công!";
} 
catch (PDOException $e) {
    echo 'Lỗi' . "<br>" . $e->getMessage();
}
 
// Ngắt kết nối
$conn = null;
?>