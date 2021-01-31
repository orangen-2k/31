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

// Câu SQL Insert
$sql = "INSERT INTO testcrud (familyName, displayName, emailAddress, birthYear, phoneNumber) 
VALUES ('Nguyễn Thị Thu ', 'Thủy', 'nguyenthithuthuy@gmail.com', '04/03/1998', '09439584553');";
$sql .= "INSERT INTO testcrud (familyName, displayName, emailAddress, birthYear, phoneNumber) 
VALUES ('Trần Trung ', 'Hiếu', 'trantrunghieu@gmail.com', '05/06/1998', '0348357584');";
 
// Thực hiện thêm record
if ($conn->multi_query($sql) === TRUE) {
    echo "Successfully added record with ID is $conn->insert_id";
    // echo "Successfully added record with ID is $conn->insert_id $conn->insert_title $conn->insert_content";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}
 
// Ngắt kết nối
$conn->close();
?>

<!-- PDO ( PHP Data Object )-->
<?php 
try {
    // Kết nối
    $conn = new PDO("mysql:host=localhost;dbname=phptraining_v2", 'root', '');
    // Thiết lập exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    // Bắt đầu transaction
    $conn->beginTransaction();
     
    // Thực thi từng câu truy vấn
    $sql = "INSERT INTO testcrud_v2 (familyName, displayName, emailAddress, birthYear, phoneNumber) 
    VALUES ('Nguyễn Thị Thu ', 'Thủy', 'nguyenthithuthuy@gmail.com', '04/03/1998', '09439584553');";
    $sql .= "INSERT INTO testcrud_v2 (familyName, displayName, emailAddress, birthYear, phoneNumber) 
    VALUES ('Trần Trung ', 'Hiếu', 'trantrunghieu@gmail.com', '05/06/1998', '0348357584');";
 
    // Nếu mọi thứ thành công thì commit
    $conn->exec($sql);
     
    $last_id = $conn->lastInsertId();
     
    echo "Thêm record thành công có ID là $last_id";
} 
catch (PDOException $e) {
    // Nếu xuất hiện lỗi thì rollback lại các thao tác
    $conn->rollback();
    echo "Lỗi: " . $e->getMessage();
}
 
 
// Ngắt kết nối
$conn = null;
?>