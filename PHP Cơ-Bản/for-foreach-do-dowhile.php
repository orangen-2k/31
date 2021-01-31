<!-- Dùng for: Liệt kê các số nguyên tố nhỏ hơn 100 -->
<?php
function checkfor($n) {
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $squareRoot = sqrt ( $n );
    for($i = 2; $i <= $squareRoot; $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
 
echo ("Các số nguyên tố nhỏ hơn 100 là: <br>");
for($i = 0; $i < 100; $i ++) {
    if (checkfor ( $i )) {
        echo ($i . " ");
    }
}
?>
<br><br>
<!-- Dùng foreach: Sắp xếp 1 mảng -->
<?php
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
  
foreach( $numbers as $n) {
    echo "$n <br>";
}
?>

<br><br>
<!-- Dùng while: kiểm tra biến lặp đến 10 -->
<?php
$i = 5; // Biến dùng để lặp
while ($i <= 10){ // Nếu $i <= 10 thì mới lặp
    echo $i . ' - '; // Xuất ra màn hình
    $i++; // Tăng biến $i lên 1
}
?>

<br><br>
<!-- Dùng do while chạy từ 10 đến 100 -->
<?php 
$i = 100;
do {
    echo "$i <br>";
    $i++;
} while ($i <= 200);
?>

<br><br>
<?php 
$sinhvien = array(
    'Nguyễn A',
    'Nguyễn B',
    'Nguyễn C',
    'Nguyễn D',
    'Nguyễn E',
    'Nguyễn F'
    );
    for ($i = 0; $i < 6; $i++){
        echo "$sinhvien[$i] <br/>";
    }
?>



<?php 
$i = 9;
while ($i <= 10) {
  echo $i;
  $i++;
}
?>

<?php 
$i = 0;
do{
    echo $i;
    $i++;
}while ($i < 1);
?>