<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p><strong>Member Access  </strong></p>
<p>&nbsp;</p>
<?php
if(isset($_SESSION['login'])) {
    if($_SESSION['login'] <> "TRUE") { 
        echo "<p>This Content of the page is retricted to member only!</p>";
        echo "<p>&nbsp;</p><a href='login.html'>Login</a>";
        exit(1);
    }
}else {
    echo "<p>This Content of the page is retricted to member only!</p>";
    echo "<p>&nbsp;</p><a href='login.html'>Login</a>";
    exit(1);
}
?>
<p>Confidential Content - XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
        <p>&nbsp;</p>
        <a href="logout.php">Logout</a>
</body>
</html>