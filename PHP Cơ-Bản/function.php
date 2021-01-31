<!-- Kiểm tra số chẵn lẻ với funtion -->
<?php
// Số cần kiểm tra
$number = 12;
  
// gọi đến hàm kiem_tra_so_chan và truyền biến cần kiểm tra vào
// vì hàm kiem_tra_so_chan trả về true/false nên ta có thể đặt nó trong câu điều
// kiện if như thế này
if (kiem_tra_so_chan($number)) {
    echo 'Số chẵn';
} else {
    echo 'Số lẽ';
}
  
// Hàm kiểm tra số chẵn sẽ trả về true nếu $number là số chẵn và ngược lại.
// biến $number gọi là biến truyền vào hàm, đó chính là biến cần kiểm tra
function kiem_tra_so_chan($number)
{
    if ($number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
?>
<br>
<br>
<!-- Sắp xếp mảng giảm dần -->
<?php
$mang = array(1, 5, 9, 2, 4, 9); // mảng theo đề bài
  
  $sophantu = 6; // hoặc dùng hàm $sophantu = count($mang);
    
  // Sắp xếp mảng
  for ($i = 0; $i < ($sophantu - 1); $i++) {
      for ($j = $i + 1; $j < $sophantu; $j++) { // lặp các phần tử phía sau
          if ($mang[$i] < $mang[$j]) { // nếu phần tử $i bé hơn phần tử phía sau
              // hoán vị
              $tmp = $mang[$j];
              $mang[$j] = $mang[$i];
              $mang[$i] = $tmp;
          }
      }
  }
    
  // Hiển thị các phần tử của mảng đã sắp xếp
  for ($i = 0; $i < $sophantu; $i++) {
      echo $mang[$i] . ' ';
  }
  ?>
  <br>
  <br>
  <!-- Tìm kiếm  -->
  <?php
   // Hàm tìm các số chia hết cho 3
function tim_so_chia_het_cho_3($mang)
{
    foreach ($mang as $key => $val) {
        if ($val % 3 == 0) {
            echo 'Ví trí thứ ' . $key . '<br/>';
        }
    }
}
  
// Chương trình chính
//-----------------------------------------------
// Lặp từ 1 đến 100 để gán giá trị vào mảng
$mang = array();
for ($i = 1; $i <= 100; $i++) {
    $mang[$i] = $i;
}
  
// Gọi hàm để xuất ra vị trí chia hết cho 3
tim_so_chia_het_cho_3($mang);
?>