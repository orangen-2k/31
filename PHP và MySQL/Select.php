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
 
// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
 
// Câu SQL lấy danh sách
$sql = "SELECT id, familyName, displayName, emailAddress, birthYear, phoneNumber FROM testcrud";
 
// Thực thi câu truy vấn và gán vào $result
$result = $conn->query($sql);
 
// Kiểm tra số lượng record trả về có lơn hơn 0
// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
if ($result->num_rows > 0) 
{
    // Sử dụng vòng lặp while để lặp kết quả
    while($row = $result->fetch_assoc()) {
        echo "Họ và tên: " . $row["familyName"]. $row["displayName"]."<br>";
    }
} 
else {
    echo "Không có record nào";
}
 
// ngắt kết nối
$conn->close();
?>
<br><br>
<!-- PDO ( PHP Data Object )-->
<?php 
try {
    // Kết nối CSDL
    $conn = new PDO("mysql:host=localhost;dbname=phptraining", 'root', '');
     
    // Khai báo exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
    // Sử đụng Prepare 
    $stmt = $conn->prepare("SELECT id, familyName, displayName, emailAddress, birthYear, phoneNumber FROM testcrud");
     
    // Thực thi câu truy vấn
    $stmt->execute();
 
    // Khai báo fetch kiểu mảng kết hợp
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    // Lặp kết quả
    foreach ($result as $item){
        echo "Họ và tên _v2:".$item['familyName'] .$item['displayName']."<br>";
    }
}
catch(PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}
 
// Ngắt kết nối
$conn = null;
?>