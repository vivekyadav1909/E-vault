<?php
        include_once 'HeaderAccount.php';
        session_start();
        include("initialize.php");
        $query="select * from users where uname='$_SESSION[uname]'";
        $r=mysql_query($query);
        $result=mysql_fetch_array($r);
		$username = $_SESSION['uname'];
		$custfolder = $_REQUEST['foldername'];
		
		$direc = scandir("users/$uname");
        unset($direc[0], $direc[1]);
		foreach ($direc as $subdir) 
		{
                		if($subdir == "$custfolder")
						{	
							echo "<script type=text/javascript>";
                    		echo "if(confirm('Folder already exists!'))";
                   			echo "{";
                    		echo "location.href='Account.php?settings=true'";
                   			echo "}";
                    		echo "</script>";
						}
						else
						{
							mkdir("users/$username/$custfolder");
							echo "<script type=text/javascript>";
                    		echo "location.href='Account.php?settings=true'";
                    		echo "</script>";
						}
		}
?>
