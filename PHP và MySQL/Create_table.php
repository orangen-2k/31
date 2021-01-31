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

// Tạo table
$sql = "CREATE TABLE testcrud (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    familyName VARCHAR(30) NOT NULL,
    displayName TEXT,
    emailAddress TEXT,
    birthYear TEXT,
    phoneNumber TEXT
)";

// Thực thi câu truy vấn
if ($conn->query($sql) === TRUE) {
    echo "Successfully created table login<br><br>";
} else {
    echo "Failed to create table login: " . $conn->error + "<br><br>";
}
 
// // Ngắt kết nối
$conn->close();
?>

<!-- PDO ( PHP Data Object )-->
<?php 
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
     
    echo "Tạo table thành công";
} 
catch (PDOException $e) {
    echo $e->getMessage();
}
 
// Ngắt kết nối
$conn = null;
?>