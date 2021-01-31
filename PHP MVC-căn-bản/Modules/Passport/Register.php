
 <?php 
 // Biến chứa lỗi
 $error = array();
  
 // VI TRI 1: CODE SUBMIT FORM
 // Nếu người dùng submit form
 if (is_submit('add_user'))
 {
     // Lấy danh sách dữ liệu từ form
     $data = array(
         'username'  => input_post('username'),
         'password'  => input_post('password'),
         're-password'  => input_post('re-password'),
         'email'     => input_post('email'),
         'fullname'  => input_post('fullname'),
         'level'     => input_post('level'),
     );
      
     // require file xử lý database cho user
     require_once('database/user.php');
      
     // Thực hiện validate
     $error = db_user_validate($data);
      
     // Nếu validate không có lỗi
     if (!$error)
     {
         // Xóa key re-password ra khoi $data
         unset($data['re-password']);
          
         // Nếu insert thành công thì thông báo
         // và chuyển hướng về trang danh sách user
         if (db_insert('tb_user', $data)){
             ?>
             <script language="javascript">
                 alert('Thêm người dùng thành công!');
                 window.location = '<?php echo create_link(base_url(''), array('m' => 'Manage-User', 'a' => 'List')); ?>';
             </script>
             <?php
             die();
         }
     }
 }
 ?>
     <?php include_once('Layout/Header.php'); ?>
  
  
 <h1>Thêm thành viên</h1>
  
 <div class="controls">
     <a class="button" onclick="$('#main-form').submit()" href="#">Lưu</a>
     <a class="button" href="<?php echo create_link(base_url(''), array('m' => 'Manage-User', 'a' => 'List')); ?>">Trở về</a>
 </div>
  
 <form id="main-form" method="post" action="<?php echo create_link(base_url('index.php'), array('m' => 'Passport', 'a' => 'Register')); ?>">
     <input type="hidden" name="request_name" value="add_user"/>
     <table cellspacing="0" cellpadding="0" class="form">
         <tr>
             <td width="200px">Tên đăng nhập</td>
             <td>
                 <input type="text" name="username" value="<?php echo input_post('username'); ?>" />
                 <?php show_error($error, 'username'); ?>
             </td>
         </tr>
         <tr>
             <td>Mật khẩu</td>
             <td>
                 <input type="password" name="password" value="<?php echo input_post('password'); ?>" />
                 <?php show_error($error, 'password'); ?>
             </td>
         </tr>
         <tr>
             <td>Nhập lại mật khẩu</td>
             <td>
                 <input type="password" name="re-password" value="<?php echo input_post('re-password'); ?>" />
                 <?php show_error($error, 're-password'); ?>
             </td>
         </tr>
         <tr>
             <td>Email</td>
             <td>
                 <input type="text" name="email" value="<?php echo input_post('email'); ?>" class="long" />
                 <?php show_error($error, 'email'); ?>
             </td>
         </tr>
         <tr>
             <td>Họ tên</td>
             <td>
                 <input type="text" name="fullname" value="<?php echo input_post('fullname'); ?>" class="long" />
                 <?php show_error($error, 'fullname'); ?>
             </td>
         </tr>
         <tr>
             <td>Level</td>
             <td>
                <input type="text" name="level" value="1" <?php echo (input_post('level') == 2) ? 'selected' : ''; ?> readonly/>
                <?php show_error($error, 'level'); ?>
             </td>
         </tr>
     </table>
 </form>
  
 <?php include_once('Layout/Footer.php'); ?>