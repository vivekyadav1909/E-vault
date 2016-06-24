<?php

include("initialize.php");
session_start();
$upload = $_SESSION['uname'];

$cat = $_REQUEST['txtCategory'];



if ($cat == "Images") {
    echo $_FILES["txtUpload"]["type"];
    $allowedExts = array("gif", "jpeg", "jpg", "png", "bmp");
    $temp = explode(".", $_FILES["txtUpload"]["name"]);
    $extension = end($temp);
    if ((($_FILES["txtUpload"]["type"] == "image/gif") || ($_FILES["txtUpload"]["type"] == "image/jpeg") || ($_FILES["txtUpload"]["type"] == "image/jpg") || ($_FILES["txtUpload"]["type"] == "image/pjpeg") || ($_FILES["txtUpload"]["type"] == "image/x-png") || ($_FILES["txtUpload"]["type"] == "image/png") || ($_FILES["txtUpload"]["type"] == "image/bmp")) && in_array(strtolower($extension), $allowedExts)) {
        move_uploaded_file($_FILES["txtUpload"]["tmp_name"], "users/$upload/images/" . $_FILES["txtUpload"]["name"]);
        $filename = $_FILES["txtUpload"]["name"];
        $query1 = "insert into files(uname,file_cat,file_name) values('$_SESSION[uname]','$cat','$filename')";
        mysql_query($query1);
        echo "<script type=text/javascript>";
        echo "if(confirm('Image File is Uploaded Successfully on the Server.'))";
        echo "{";
        echo "location.href='Account.php?upload=true'";
        echo "}";
        echo "</script>";
    } else {
        echo "<script type=text/javascript>";
        echo "if(confirm('Error in Uploading File ...'))";
        echo "{";
        echo "location.href='Account.php?upload=true'";
        echo "}";
        echo "</script>";
        return;
    }
}



if ($cat == "Videos") {
    echo $_FILES["txtUpload"]["type"];
    $allowedExts = array("avi", "mkv", "mpeg", "mpg", "mov", "wmv", "rm", "mp4", "mp3");
    $temp = explode(".", $_FILES["txtUpload"]["name"]);
    $extension = end($temp);
    if (!in_array(strtolower($extension), $allowedExts)) {

        echo "<script type=text/javascript>";
        echo "if(confirm('Unsupported format...'))";
        echo "{";
        echo "location.href='Account.php?upload=true'";
        echo "}";
        echo "</script>";
        return;
    } else {

        move_uploaded_file($_FILES["txtUpload"]["tmp_name"], "users/$upload/videos/" . $_FILES["txtUpload"]["name"]);
        $filename = $_FILES["txtUpload"]["name"];
        $query1 = "insert into files(uname,file_cat,file_name) values('$_SESSION[uname]','$cat','$filename')";
        mysql_query($query1);
        echo "<script type=text/javascript>";
        echo "if(confirm('Video File is Uploaded Successfully on the Server.'))";
        echo "{";
        echo "location.href='Account.php?upload=true'";
        echo "}";
        echo "</script>";
    }
}



if ($cat == "Documents") {
    echo $_FILES["txtUpload"]["type"];
    $allowedExts = array("doc", "docx", "txt", "pdf", "rtf", "odt");
    $temp = explode(".", $_FILES["txtUpload"]["name"]);
    $extension = end($temp);
    if (!in_array(strtolower($extension), $allowedExts)) {

        echo "<script type=text/javascript>";
        echo "if(confirm('Error in Uploading File ...'))";
        echo "{";
        echo "location.href='Account.php?upload=true'";
        echo "}";
        echo "</script>";
        return;
    } else {

        move_uploaded_file($_FILES["txtUpload"]["tmp_name"], "users/$upload/documents/" . $_FILES["txtUpload"]["name"]);
        $filename = $_FILES["txtUpload"]["name"];
        $query1 = "insert into files(uname,file_cat,file_name) values('$_SESSION[uname]','$cat','$filename')";
        mysql_query($query1);
        echo "<script type=text/javascript>";
        echo "if(confirm('Document File is Uploaded Successfully on the Server.'))";
        echo "{";
        echo "location.href='Account.php?upload=true'";
        echo "}";
        echo "</script>";
    }
}
?>
