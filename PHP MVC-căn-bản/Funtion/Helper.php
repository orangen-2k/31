<?php 
# BÀI THỨ 07
// Hàm tạo URL
function base_url($uri = ''){
    return 'http://localhost/PHPTraining/PHP MVC-căn-bản/'.$uri;
}
 
// Hàm redirect
function redirect($url){
    header("Location:{$url}");
    exit();
}
 
// Hàm lấy value từ $_POST
function input_post($key){
    return isset($_POST[$key]) ? trim($_POST[$key]) : false;
}
 
// Hàm lấy value từ $_GET
function input_get($key){
    return isset($_GET[$key]) ? trim($_GET[$key]) : false;
}
 
// Hàm kiểm tra submit
function is_submit($key){
    return (isset($_POST['request_name']) && $_POST['request_name'] == $key);
}
 
// Hàm show error
function show_error($error, $key){
    echo '<span style="color: red">'.(empty($error[$key]) ? "" : $error[$key]). '</span>';
}
// Tạo chuỗi query string
function create_link($uri, $filter = array()){
    $string = '';
    foreach ($filter as $key => $val){
        if ($val != ''){
            $string .= "&{$key}={$val}";
        }
    }
    return $uri . ($string ? '?'.ltrim($string, '&') : '');
}
// Hàm phân trang
function paging($link, $total_records, $current_page, $limit)
{    
    // Tính tổng số trang
    $total_page = ceil($total_records / $limit);
     
    // Giới hạn current_page trong khoảng 1 đến total_page
    if ($current_page > $total_page){
        $current_page = $total_page;
    }
    else if ($current_page < 1){
        $current_page = 1;
    }
     
    // Tìm Start
    $start = ($current_page - 1) * $limit;
 
    $html = '';
     
    // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
    if ($current_page > 1 && $total_page > 1){
        $html .= '<a href="'.str_replace('{page}', $current_page-1, $link).'">Prev</a>';
    }
 
    // Lặp khoảng giữa
    for ($i = 1; $i <= $total_page; $i++){
        // Nếu là trang hiện tại thì hiển thị thẻ span
        // ngược lại hiển thị thẻ a
        if ($i == $current_page){
            $html .= '<span>'.$i.'</span>';
        }
        else{
            $html .= '<a href="'.str_replace('{page}', $i, $link).'">'.$i.'</a>';
        }
    }
 
    // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
    if ($current_page < $total_page && $total_page > 1){
        $html .= '<a href="'.str_replace('{page}', $current_page+1, $link).'">Next</a>';
    }
     
    // Trả kết quả
    return array(
        'start' => $start,
        'limit' => $limit,
        'html' => $html
    );
}
// Hàm insert dữ liệu vào table
function db_insert($table, $data = array())
{
    // Hai biến danh sách fields và values
    $fields = '';
    $values = '';
     
    // Lặp mảng dữ liệu để nối chuỗi
    foreach ($data as $field => $value){
        $fields .= $field .',';
        $values .= "'".addslashes($value)."',";
    }
     
    // Xóa ký từ , ở cuối chuỗi
    $fields = trim($fields, ',');
    $values = trim($values, ',');
     
    // Tạo câu SQL
    $sql = "INSERT INTO {$table}($fields) VALUES ({$values})";
     
    // Thực hiện INSERT
    return db_execute($sql);
}
// Hàm validate dữ liệu bảng User
function db_user_validate($data)
{
    // Biến chứa lỗi
    $error = array();
     
    /* VALIDATE CĂN BẢN */
    // Username
    if (isset($data['username']) && $data['username'] == ''){
        $error['username'] = 'Bạn chưa nhập tên đăng nhập';
    }
     
    // Email
    if (isset($data['email']) && $data['email'] == ''){
        $error['email'] = 'Bạn chưa nhập email';
    }
    if (isset($data['email']) && filter_var($data['email'], FILTER_VALIDATE_EMAIL) === false){
        $error['email'] = 'Email không hợp lệ';
    }
     
    // Password
    if (isset($data['password']) && $data['password'] == ''){
        $error['password'] = 'Bạn chưa nhập mật khẩu';
    }
     
    // Re-password
    if (isset($data['password']) && isset($data['re-password']) && $data['password'] != $data['re-password']){
        $error['re-password'] = 'Mật khẩu nhập lại không đúng';
    }
     
    // Level
    if (isset($data['level']) && !in_array($data['level'], array('1', '2'))){
        $error['level'] = 'Level bạn chọn không tồn tại';
    }
     
    /* VALIDATE LIÊN QUAN CSDL */
    // Chúng ta nên kiểm tra các thao tác trước có bị lỗi không, nếu không bị lỗi thì mới
    // tiếp tục kiểm tra bằng truy vấn CSDL
    // Username
    if (!($error) && isset($data['username']) && $data['username']){
        $sql = "SELECT count(id) as counter FROM tb_user WHERE username='".addslashes($data['username'])."'";
        $row = db_get_row($sql);
        if ($row['counter'] > 0){
            $error['username'] = 'Tên đăng nhập này đã tồn tại';
        }
    }
     
    // Email
    if (!($error) && isset($data['email']) && $data['email']){
        $sql = "SELECT count(id) as counter FROM tb_user WHERE email='".addslashes($data['email'])."'";
        $row = db_get_row($sql);
        if ($row['counter'] > 0){
            $error['email'] = 'Email này đã tồn tại';
        }
    }
     
    return $error;
}
?>