<?php
    // Read File
    echo readfile('../File_PHP/text.txt') ;

    // Open va cross cho user

    $myFile = fopen('../File_PHP/text.txt', 'r') or die("File Error");

    echo fread($myFile, filesize('../File_PHP/text.txt')); // read  file

    fclose($myFile); //close file

    // Loop File
    $myFile = fopen('../File_PHP/text.txt', 'r') or die("File Error");

    while (!feof($myFile)) {
        echo fgets($myFile);
    }

    fclose($myFile); //close file

    // CREATE FILE

    $newFile = fopen("../File_PHP/newFile.txt", "w") or die("create file error");

    // Write File

    $writeFile = fopen("../File_PHP/newFile", "a") or die("Open File Fail <((");

    fwrite($writeFile, "Thong baos");

    fclose($writeFile);

    // Write de len File

    $myFile = fopen('../File_PHP/text.txt', 'w') or die("File Error");
    fwrite($myFile, "Xoa het");
    fclose($myFile);

    // Upload File base




?>
