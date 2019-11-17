<html><head>
<link href="css/admin_styles.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="tan">
<center><b><font color = "brown" size="6">Online Voting Portal</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>Logged Out Successfully </h1>
<p align="center">&nbsp;</p>
</div>
<?
session_start();
session_destroy();
?>
You have been successfully logged out of your control panel.<br><br><br>
Return to <a href="login.html">Admin Login</a>
or goto student <a href="../index.php">Login</a>
<div id="footer">
<div class="bottom_addr">&copy; 2018 Online Voting Portal. All Rights Reserved</div>
</div>
</div>
</body></html>