<?php 
// Lớp Cha
class DongVat
{
    // Động Vật Ăn
    public function An()
    {
        echo 'Động Vật Đang Ăn';
    }
}
  
// Lớp Con
class ConHeo extends DongVat
{
    public function An()
    {
        parent::An();
        echo 'Con Heo Đang Ăn Cám';
    }
}
  
// Khai Báo Lớp on
$conheo = new ConHeo();
  
// Gọi Hàm Ăn Trong Lớp ConHeo
$conheo->An();
?>

<?php 
// Lớp Hình Học
class HinhHoc
{
    // Hàm Vẽ Hình
    function Ve()
    {
        // Code
    }
  
    // Hàm Tính Diện Tích Của Hình
    function tinh_Dien_Tich()
    {
        // Code
    }
}
  
// Lớp hình Vuông
class HinhVuong extends HinhHoc
{
    // Độ Dài Cạnh
    public $canh = 0;
  
    // Định Nghĩa Lại Hàm Vẽ Hình Vuông
    function Ve()
    {
        echo 'Vẽ Hình Vuông';
    }
  
    //  Định Nghĩa Lại Hàm Tính Diện Tích
    function tinh_Dien_Tich()
    {
        return $this->canh*$this->canh;
    }
}
  
// Lớp hình chữ nhật
class HinhChuNhat extends HinhHoc
{
    // Chiều Dài Và Chiều Rộng
    public $dai = 0;
    public $rong = 0;
  
    // Định Nghĩa Lại Hàm Vẽ Hình Chữ Nhật
    public function Ve()
    {
        echo 'Vẽ Hình Chữ Nhật';
    }
  
    // Định Nghĩa Lại Hàm Tính Diện Tích
    public function tinh_Dien_Tich()
    {
        return $this->dai * $this->rong;
    }
}
  
// ------------------ //
// Chương Trình Chính //
// ------------------ //
  
// Hình Chữ Nhật
$HinhChuNhat = new HinhChuNhat();
$HinhChuNhat->Ve();
echo '<br/>';
 
$HinhChuNhat->dai = 25;
$HinhChuNhat->rong = 20;
echo $HinhChuNhat->tinh_Dien_Tich();
echo '<br/>';
  
// Hình Vuông
$HinhVuong = new HinhVuong();
$HinhVuong->Ve();
echo '<br/>';
$HinhVuong->canh = 20;
echo $HinhVuong->tinh_Dien_Tich();
?>