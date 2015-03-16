<?php
// Creation Date: May 21, 2011 5:20:09 PM

// Cookie setting
$value="underage";
/* expire in 1 week */
setcookie("ageverification", $value, time()+604800, "/", ".gnrtnz.com", 0);
?>
<html>
<head>
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="css/main.css" />
<title>gnrtn Z coaching | Invalid Student Registration</title>
</head>
<body>
<?php
include("header.php");
?>
<div class="headerimgpos"><img src="images/registration_header.png"></img>

<div class="mainbodycontainer">
<div class="dotteddashes">&nbsp;</div>
<div class="headingstyle">
Sorry, you are ineligible to register for gnrtn Z coaching. Please have your parents email us at
 ask@gnrtnz.com to connect with a coach.
</div>

</div>
<?php
include("footer.php");

?>

</body>
</html>
