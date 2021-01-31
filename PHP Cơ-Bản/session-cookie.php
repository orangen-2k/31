<?php session_start();
if (isset($_POST['save']))
{
    $_SESSION['name'] = $_POST['ten'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Section</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <p>
            <?php
            if (isset($_SESSION['name']))
            {
                echo 'Tên của bạn là: ' . $_SESSION['name'];
            }
            ?>
        </p>
        <form method="POST" action="">
            <a>Tên: </a>
            <input type="text" name="ten" value=""/> <br/><br/>
            <input type="submit" name="save" value="Lưu"/>
            <button>
                Xoá
                <?php 
                    unset($_SESSION['name']);
                ?>
            </button>
        </form>
    </body>
</html>


<!DOCTYPE html>
  
<?php
    setcookie('cookie', 'timeout', time() + 3600);
?>
  
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php 
        if (isset($_COOKIE['cookie']))
        {
        echo $_COOKIE['cookie'];
        }
        ?>
        <button>
            Xoá Cookie
            <?php 
                setcookie("cookie", "timeout", time()-3600);
            ?>
        </button>
    </body>
</html>