<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once 'HeaderAccount.php';
        include("initialize.php");
        session_start();
        ?>
        <center>
            <h1><u>Files Uploaded</u></h1>
        </center>
        &nbsp;&nbsp;

        <fieldset style="color: #8A0808; background:#A4A4A4; border:2px groove;">
            <table style="border-style: double" width="100%" align="center">
                <tr>
                    <td align="center" width="13%"><u><b>S.No.</b></u></td>
                    <td align="center" width="20%"><u><b>File Category</b></u></td>
                    <td align="center" width="20%"><u><b>File Name</b></u></td>
                    <td align="center" width="15%"><u><b>Action</b></u></td>
                </tr>
                <tr>
                    <td colspan="5"><b><hr></b></td>
                </tr>
                <?php
				
                $query = "select * from files where uname='$_SESSION[uname]'";
                $r = mysql_query($query);
                $index = 0;

                while ($result = mysql_fetch_array($r)) {
                    $index++;
                    ?>

                    <tr>

                        <td align="center" width="13%"><b><?php echo $index; ?></b></td>

                        <td align="center" width="20%"><b><?php echo $result["file_cat"]; ?></b></td>
                        <td align="center" width="20%"><b><?php echo $result["file_name"]; ?></b></td>
                        <td align="center"><b><a style="text-decoration:none; color:Brown" href="users/test/images/<?php echo $result["file_name"] ?>">Download</a><img src="images1/dwnld.png" style="width:14px;height:14px;"></b></td>

                    </tr>

                <?php } ?>

            </table>
        </fieldset>
        <br /><br /><br />

        <?php include_once 'Footer.php'; ?>
    </body>
</html>
