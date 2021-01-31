<?php 
// Định nghĩa một hằng số bảo vệ project
define("IN_SITE", true);
 
// Lấy module và action trên URL
$module = isset($_GET['m']) ? $_GET['m'] : '';
$action = isset($_GET['a']) ? $_GET['a'] : '';
 
// Trường hợp người dùng không truyền module và action
// thì ta lấy module mặc định là Passport
// và action mặc định là login
if (empty($module) || empty($action)){
    $module = 'Passport';
    $action = 'login';
}
 
// Tạo đường dẫn và lưu vào biến $path
$path = 'Modules/'.$module . '/' . $action . '.php';
 
// Trường hợp URL chạy đúng
if (file_exists($path)) {
    include_once ('Funtion/DB.php');
    include_once ('Funtion/Session.php');
    include_once ('Funtion/Database.php');
    include_once ('Funtion/Role.php');
    include_once ('Funtion/Helper.php');
    include_once ($path);
} 
else {
    // Trường hợp URL không tồn tại thì thông báo lỗi
    include_once ('Modules/Passport/404.php');
}
?>