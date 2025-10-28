<html> 
<body> 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
setcookie("username", $_POST['username'],time()+(10*30),"/");
if (isset ($_COOKIE ["username"]))
echo "<p> Welcome back. ".$_COOKIE [ "username"]."</p>";
else
echo "<p> Welcome Guest <p>";
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
Enter your Name : <input type="text" name="username"> 
<input type="submit" value="Set COOKIE">
</form>
</body>
</html>