<?php



/* Procedure
*********************************************
 * ----------- *
 * PHP Section *
 * ----------- *
Step 1: Perform Session Validation.
 * ------------ *
 * HTML Section *
 * ------------ *
Step 2: Display the Dashboard.

*********************************************
*/

error_reporting(0);
/********************* Step 1 *****************************/
session_start();
        if(!isset($_SESSION['admname'])){
            $_GLOBALS['message']="Session Timeout.Click here to <a href=\"index.php\">Re-LogIn</a>";
        }
        else if(isset($_REQUEST['logout'])){
           unset($_SESSION['admname']);
            $_GLOBALS['message']="You are Loggged Out Successfully.";
            header('Location: index.php');
        }
?>

<html>
    <head>
        <title>OES-DashBoard</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" href="../oes.css"/>
    </head>
    <body>
        <?php
       /********************* Step 2 *****************************/
        if(isset($_GLOBALS['message'])) {
            echo "<div class=\"message\">".$_GLOBALS['message']."</div>";
        }
        ?>
        <div id="container">
            <div class="header">
                <img style="margin:10px 2px 2px 10px;float:left;" height="100" width="150" src="../images/logo.gif" alt="OES"/><h3 class="headtext"> &nbsp;Online Examination System </h3><h4 style="color:#ffffff;text-align:center;margin:0 0 5px 5px;"><i>...because Examination Matters</i></h4>
            </div>
            <div class="menubar">

                <form name="admwelcome" action="admwelcome.php" method="post">
                    <ul id="menu">
                        <?php if(isset($_SESSION['admname'])){ ?>
                        <li><input type="submit" value="LogOut" name="logout" class="subbtn" title="Log Out"/></li>
                        <?php } ?>
                    </ul>
                </form>
            </div>
            <div class="admpage">
                <?php if(isset($_SESSION['admname'])){ ?>


                <img height="600" width="100%" alt="back" class="btmimg" src="../images/trans.png"/>
                <div class="topimg">
                    <a href="usermng.php"class="button">Manage Users</a><br>
                    <a href="submng.php"class="button">Manage Subjects</a><br>
                    <a href="rsltmng.php" class="button">Manage Test Results</a><br>
                    <a href="testmng.php?forpq=true" class="button">Prepare Questions</a><br>
                    <a href="testmng.php" class="button">Manage Tests</a><br>
                </div>
                <?php }?>

            </div>

            <div id="footer">
                      <p style="font-size:70%;color:#ffffff;"> Developed By-<b> Rajan Kumar</b><br/> </p><p>SRM University</p>
                  </div>
      </div>
  </body>
</html>
