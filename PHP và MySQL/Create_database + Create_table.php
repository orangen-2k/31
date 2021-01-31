<!-- WHAT WHY WHERE WHEN WHO HOW -->

<!-- MySQL không thể sử dụng đối mới PHP7 trở lên -->

<!-- MySQLI ( MySQL improved) -->
<?php 
// BƯỚC 1: TẠO DATABASE
// Tạo kết nối
$conn = mysqli_connect('localhost', 'root', '');
  
// Nếu kết nối thất bại
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error() + "<br><br>");
}
  
// Lệnh tạo database
$sql = "CREATE DATABASE phptraining";
  
// Thực thi câu truy vấn
if (mysqli_query($conn, $sql)) 
{
    echo 'Tạo database thành công!<br><br>';
     
    // BƯƠC 2: TẠO TABLE
    // Chọn database
    mysqli_select_db($conn, 'phptraining');
     
    // Câu lệnh SQL
    $sql = "CREATE TABLE testcrud (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        familyName VARCHAR(30) NOT NULL,
        displayName TEXT,
        emailAddress TEXT,
        birthYear TEXT,
        phoneNumber TEXT
    )";
     
    // Thực thi câu truy vấn
    if (mysqli_query($conn, $sql)) {
        echo "Tạo table thành công<br><br>";
    } else {
        echo "Tạo table thất bại: " . mysqli_error($conn)+"<br><br>";
    }
     
} else {
    echo "Tạo database thất bại: " . mysqli_error($conn)+"<br><br>";
}
  
// Tạo xong thì ngắt kết nối
mysqli_close($conn);
?>


<!-- PDO ( PHP Data Object )-->
<?php 
// BƯỚC 1: TẠO DATABASE
// Tạo kết nối
    $conn = new PDO("mysql:host=localhost", 'root', '');
  
    // Thiết lập chế độ exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Lệnh tạo database
    $sql = "CREATE DATABASE phptraining_v2";
  
// Thực thi câu truy vấn
    $conn->exec($sql);
    echo 'Tạo database thành công!<br><br>';
     
try {
    // Kết nối
    $conn = new PDO("mysql:host=localhost;dbname=phptraining_v2", 'root', '');
     
    // Thiết lập chế độ exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    // Câu lệnh SQL
    $sql = "CREATE TABLE testcrud_v2 (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        familyName VARCHAR(30) NOT NULL,
        displayName TEXT,
        emailAddress TEXT,
        birthYear TEXT,
        phoneNumber TEXT
    )";
 
    // Thực thi câu truy vấn
    $conn->exec($sql);
     
    echo "Tạo table thành công<br>";
} 
catch (PDOException $e) {
    echo $e->getMessage();
}
 
// Ngắt kết nối
$conn = null;
?>