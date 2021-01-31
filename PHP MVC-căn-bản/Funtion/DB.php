<?php 
// BƯỚC 1: TẠO DATABASE
// Tạo kết nối
$conn = mysqli_connect('localhost', 'root', '');
  
// Nếu kết nối thất bại
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error() + "<br><br>");
}
  
// Lệnh tạo database
$sql = "CREATE DATABASE php_example";
  
// Thực thi câu truy vấn
if (mysqli_query($conn, $sql)) 
{
     
    // BƯƠC 2: TẠO TABLE
    // Chọn database
    mysqli_select_db($conn, 'php_example');
     
    // Câu lệnh SQL
    $sql = "CREATE TABLE IF NOT EXISTS `tb_user` (
        `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
        `username` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
        `password` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
        `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
        `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
        `birthYear` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
        `phoneNumber` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
        `province` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
        `streetInformation` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
        `summary` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
        `avatar` varchar(1200) COLLATE utf8_unicode_ci DEFAULT NULL,
        `level` tinyint(1) DEFAULT NULL,
        `add_date` datetime DEFAULT NULL,
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;";
     
    // Thực thi câu truy vấn
    if (mysqli_query($conn, $sql)) {
    }
}
  
// Tạo xong thì ngắt kết nối
mysqli_close($conn);
?>
<?php
// Kết lối SQL
$servername = "localhost";
$database = "php_example";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

// Câu SQL Insert
$sql = "INSERT INTO `tb_user` (`id`, `username`, `password`, `email`, `fullname`, `level`, `add_date`) VALUES
(1, 'admin', '123', 'chien2k@gmail.com', 'Nguyễn Quyết Chiến', 1, NULL),
(2, 'User2', '123', 'User2@gmail.com', 'User2 Name', 2, NULL),
(3, 'User3', '123', 'User3@gmail.com', 'User3 Name', 2, NULL),
(4, 'User4', '123', 'User4@gmail.com', 'User4 Name', 2, NULL),
(5, 'User5', '123', 'User5@gmail.com', 'User5 Name', 2, NULL),
(6, 'User6', '123', 'User6@gmail.com', 'User6 Name', 2, NULL),
(7, 'User7', '123', 'User7@gmail.com', 'User7 Name', 2, NULL),
(8, 'User8', '123', 'User8@gmail.com', 'User8 Name', 2, NULL),
(9, 'User9', '123', 'User9@gmail.com', 'User9 Name', 2, NULL),
(10, 'User10', '123', 'User10@gmail.com', 'User10 Name', 2, NULL),
(11, 'User11', '123', 'User11@gmail.com', 'User11 Name', 2, NULL),
(12, 'User12', '123', 'User12@gmail.com', 'User12 Name', 2, NULL),
(13, 'User13', '123', 'User13@gmail.com', 'User13 Name', 2, NULL),
(14, 'User14', '123', 'User14@gmail.com', 'User14 Name', 2, NULL),
(15, 'User15', '123', 'User15@gmail.com', 'User15 Name', 2, NULL),
(16, 'User16', '123', 'User16@gmail.com', 'User16 Name', 2, NULL),
(17, 'User17', '123', 'User17@gmail.com', 'User17 Name', 2, NULL),
(18, 'User18', '123', 'User18@gmail.com', 'User18 Name', 2, NULL),
(19, 'User19', '123', 'User19@gmail.com', 'User19 Name', 2, NULL),
(20, 'User20', '123', 'User20@gmail.com', 'User20 Name', 2, NULL),
(21, 'User21', '123', 'User21@gmail.com', 'User21 Name', 2, NULL),
(22, 'User22', '123', 'User22@gmail.com', 'User22 Name', 2, NULL),
(23, 'User23', '123', 'User23@gmail.com', 'User23 Name', 2, NULL);";
 
// Thực hiện thêm record
if ($conn->multi_query($sql) === TRUE) {
}
// Ngắt kết nối
$conn->close();
?>
