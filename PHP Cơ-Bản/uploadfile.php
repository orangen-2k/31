<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
<body>
    <form method="post" action="" enctype="multipart/form-data">
        <img src="../PHP-Cơ-Bản/images/default-image.jpg" style="width: 200px;">
        <label for="">Ảnh đại diện sản phẩm<span class="text-danger">*</span></label>
        <input type="file" onchange="encodeImageFileAsURL(this)" class="form-control" name="image">
        <input type="file" name="avatar"/>
        <input type="submit" name="uploadclick" value="Load"/>
    </form>
    <script>
    function encodeImageFileAsURL(element) {
        var file = element.files[0];
        if (file === undefined) {
            $('#preview-img').attr('src', "{{../PHP-Cơ-Bản/images/default-image.jpg'}}");
        } else {
            var reader = new FileReader();
            reader.onloadend = function() {
                $('#preview-img').attr('src', reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
    </script>
    <?php
    if (isset($_POST['uploadclick']))
    {
        if (isset($_FILES['avatar']))
        {
            if ($_FILES['avatar']['error'] > 0)
            {
                echo 'File Upload Bị Lỗi';
            }
            else{
                move_uploaded_file($_FILES['avatar']['tmp_name'], './images/'.$_FILES['avatar']['name']);
                echo 'File Uploaded';
            }
        }
        else{
            echo 'Bạn chưa chọn file upload';
        }
    }
?>
</body>
</html>