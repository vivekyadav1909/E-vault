<?php
        include("initialize.php");
        session_start();
		$uname = $_SESSION['uname'];
        $cat=$_REQUEST['txtlocation'];
       
  if($cat=="images")
  {
	$allowedExts = array("gif", "jpeg", "jpg", "png","bmp");
	$temp = explode(".", $_FILES["txtUpload"]["name"]);
	$extension = end($temp);
	if ((($_FILES["txtUpload"]["type"] == "image/gif")
		|| ($_FILES["txtUpload"]["type"] == "image/jpeg")
		|| ($_FILES["txtUpload"]["type"] == "image/jpg")
		|| ($_FILES["txtUpload"]["type"] == "image/pjpeg")
		|| ($_FILES["txtUpload"]["type"] == "image/x-png")
		|| ($_FILES["txtUpload"]["type"] == "image/png")
		|| ($_FILES["txtUpload"]["type"] == "image/bmp"))
		&& in_array($extension, $allowedExts))
	{
		if ($_FILES["txtUpload"]["error"] > 0)
    	{
 	        echo "<script type=text/javascript>";
    	    echo "if(confirm('Error in Uploading File ...'))";
            echo "{";
            echo "location.href='Account.php?upload=true'";
            echo "}";
            echo "</script>";
        	return;
    	}
		else
    	{
        move_uploaded_file($_FILES["txtUpload"]["tmp_name"], "Users/$uname/images/" . $_FILES["txtUpload"]["name"]);
   		$filename=$_FILES["txtUpload"]["name"];
      	$query1 = "insert into files(uname,file_cat,file_name) values('$_SESSION[uname]','$cat','$filename')";
            mysql_query($query1);
         	echo "<script type=text/javascript>";
            echo "if(confirm('Image File is Uploaded Successfully on the Server.'))";
            echo "{";
            echo "location.href='Account.php?upload=true'";
            echo "}";
            echo "</script>";
    	}
  	}
  }
  
	if($cat=="videos")
	{
    $allowedExts = array("avi", "mpeg", "mpg", "mov","wmv","rm","mp4");
	$temp = explode(".", $_FILES["txtUpload"]["name"]);
	$extension = end($temp);
	if ($_FILES["txtUpload"]["error"] > 0)
    {
                    echo "<script type=text/javascript>";
                    echo "if(confirm('Unsupported format...'))";
                    echo "{";
                    echo "location.href='Account.php?upload=true'";
                    echo "}";
                    echo "</script>";
                    return;
    }
  else
    {
    
      move_uploaded_file($_FILES["txtUpload"]["tmp_name"], "Users/$uname/documents/" . $_FILES["txtUpload"]["name"]);
      $filename=$_FILES["txtUpload"]["name"];
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
  
  if($cat=="documents")
  {
      echo $_FILES["txtUpload"]["type"];
      $allowedExts = array("doc", "docx", "txt", "pdf","rtf","odt");
$temp = explode(".", $_FILES["txtUpload"]["name"]);
$extension = end($temp);

  if ($_FILES["txtUpload"]["error"] > 0)
    {
                    echo "<script type=text/javascript>";
                    echo "if(confirm('Error in Uploading File ...'))";
                    echo "{";
                    echo "location.href='Account.php?upload=true'";
                    echo "}";
                    echo "</script>";
                    return;
    }
  else
    {
    
   
    
      move_uploaded_file($_FILES["txtUpload"]["tmp_name"],  "Users/$uname/videos/" . $_FILES["txtUpload"]["name"]);
      $filename=$_FILES["txtUpload"]["name"];
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
  
 if($cat != "")
 {
    echo $_FILES["txtUpload"]["type"];
    $allowedExts = array("doc", "docx", "txt", "pdf","rtf","odt","avi", "mpeg", "mpg", "mov","wmv","rm","mp4","gif", "jpeg", "jpg", "png","bmp");
	$temp = explode(".", $_FILES["txtUpload"]["name"]);
	$extension = end($temp);

  	if ($_FILES["txtUpload"]["error"] > 0)
    {
                    echo "<script type=text/javascript>";
                    echo "if(confirm('Error in Uploading File ...'))";
                    echo "{";
                    echo "location.href='Account.php?upload=true'";
                    echo "}";
                    echo "</script>";
                    return;
    }
 	else
    {    
      move_uploaded_file($_FILES["txtUpload"]["tmp_name"],  "Users/$uname/$cat/" . $_FILES["txtUpload"]["name"]);
      $filename=$_FILES["txtUpload"]["name"];
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
