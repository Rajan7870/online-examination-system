

<?php



error_reporting(0);
session_start();
        if(!isset($_SESSION['stdname'])){
            $_GLOBALS['message']="Session Timeout.Click here to <a href=\"index.php\">Re-LogIn</a>";
        }
        else if(isset($_REQUEST['logout'])){
                unset($_SESSION['stdname']);
            $_GLOBALS['message']="You are Loggged Out Successfully.";
            header('Location: index.php');
        }
?>
<html>
    <head>
        <title>OES-DashBoard</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" href="oes.css"/>
    </head>
    <body>
        <?php

        if($_GLOBALS['message']) {
            echo "<div class=\"message\">".$_GLOBALS['message']."</div>";
        }
        ?>
        <div id="container">
           <div class="header">
                <img style="margin:10px 2px 2px 10px;float:left;" height="100" width="150" src="images/logo.gif" alt="OES"/><h3 class="headtext"> &nbsp;Online Examination System </h3><h4 style="color:#ffffff;text-align:center;margin:0 0 5px 5px;"><i>...because Examination Matters</i></h4>
            </div>
            <div class="menubar">

                <form name="stdwelcome" action="stdwelcome.php" method="post">
                    <ul id="menu">
                        <?php if(isset($_SESSION['stdname'])){ ?>
                        <li><input type="submit" value="LogOut" name="logout" class="subbtn" title="Log Out"/></li>
                        <?php } ?>
                    </ul>
                </form>
            </div>
            <div class="stdpage">
                <?php if(isset($_SESSION['stdname'])){ ?>


                <img height="600" width="100%" alt="back" src="images/trans.png" class="btmimg" />
                <div class="topimg">
                    <a href="viewresult.php" class="button">View Results</a><br>
                    <a href="stdtest.php" class="button">Take a New Test</a><br>
                    <a href="editprofile.php?edit=edit" class="button">Edit Your Profile</a><br>
                    <a href="practicetest.php" class="button">Practice Test</a><br>
                    <a href="resumetest.php" class="button">Resume Test</a><br>
                </div>
                <?php }?>

            </div>

            <div id="footer">
                      <p style="font-size:70%;color:#ffffff;"> Developed By-<b>Rajan Kumar</b><br/> </p><p>SRM University</p>
                  </div>
      </div>
  </body>
</html>
