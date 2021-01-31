<!-- Switch case -->

<?php
$number = 1;
switch ($number)
{
    case $number > 0 :
        echo 'Số không';
        break;
    case 1:
        echo 'Số một';
        break;
    case 2:
        echo 'Số hai';
        break;
    case 3:
        echo 'Số ba';
        break;
    case 4 :
        echo 'Số bốn';
        break;
    default:
        echo 'Không tìm thấy';
        break;
}
?>

<!-- Lồng switch -->
<?php
$number = 13;
$midle = null;
switch ($number)
{
    case 13 : // nếu $number = 12
        $midle = $number % 2; // lấy số dư
        switch ($midle)
        {
            case 0 : // nếu số dư = 0
                echo 'Số chẵn <br/><br/>';
                break;
            default :
                echo 'Số lẽ <br/><br/>';
                break;
        }
        break;
    default: // nếu không phải 12 thì không làm gì
        break;
}
?>

<!-- If else -->

<?php
$nam = 2014;
$so_du = $nam % 2;
if ($so_du == 0) {
    $so_du = false;
} else {
    $so_du = true;
}

// So sánh == và ===

// ==
if ($so_du == 0){
    echo 'Năm ' . $nam . ' Là Năm Chẵn <br/><br/>';
}
else{
    echo 'Năm ' . $nam . ' Là Năm Lẻ <br/><br/>';
}
// ===
if ($so_du === 0){
    echo 'Năm ' . $nam . ' Là Năm Chẵn <br/><br/>';
}
else{
    echo 'Năm ' . $nam . ' Là Năm Lẻ <br/><br/>';
}
?>