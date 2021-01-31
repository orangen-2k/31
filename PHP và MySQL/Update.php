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


// Lệnh update
$sql = "UPDATE testcrud SET displayName='Bình' WHERE id=1";
 
// Thực hiện update
if ($conn->query($sql) === TRUE) {
    echo "Successfully updated<br><br>";
} else {
    echo "Update failedi: " . $conn->error + "<br><br>";
}
 
// ngắt kết nối
$conn->close();
?>

<!-- PDO ( PHP Data Object )-->
<?php 
try {
    // Kết nối
    $conn = new PDO("mysql:host=localhost;dbname=phptraining", 'root', '');
    // Thiết lập Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    // Câu SQL
    $sql = "UPDATE testcrud SET familyName='Tâm' WHERE id=2";
 
    // Prepared câu SQL
    $stmt = $conn->prepare($sql);
 
    // Thực thi câu SQL
    $stmt->execute();
 
    // Xuất kết quả tổng số record đã update
    echo $stmt->rowCount() . " records thành công";
} 
catch (PDOException $e) {
    echo 'Lỗi'. "<br>" . $e->getMessage();
}
 
// Ngắt kết nối
$conn = null;
?>