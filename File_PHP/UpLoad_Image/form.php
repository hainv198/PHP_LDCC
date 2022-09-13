<?php
    /*// upload image
    $image = $_FILES["upload"];
    print_r($image);*/
    $folder = 'C:/xampp/htdocs/PHP_LDCC/File_PHP/Upload_Image/image/';

    $checkImage = $folder.basename($_FILES['upload']['name']);

    if (isset($_POST['btn'])) {

        if (isset($_FILES['upload'])) {
            if ($_FILES['upload']['size'] == 0) {
                echo " vui long chon file";
            }
            elseif (file_exists($checkImage)) {
                echo "File da ton tai";
            }

            elseif ($_FILES['upload']['size'] > 2000000) {
                echo "File up load qua dung luong, vui long chon lai";
            }
            else {
                move_uploaded_file($_FILES['upload']['tmp_name'], 'C:/xampp/htdocs/PHP_LDCC/File_PHP/Upload_Image/image/' .$_FILES['upload']['name']);
                echo "thanh cong";
            }
        }
        else {
            echo "upload file bi loi";
        }
    }
?>

