<?php
	session_start();
	if ($_SESSION['login'] == null)
	{
		header("Location: admin.php");
		exit;
	}
	if (!isset($_COOKIE['admin'])) {
	   setcookie('admin', 'false');
	   $_COOKIE['admin'] = 'false';
	   echo '
<html>
<head><title>404 Not Found</title></head>
<body bgcolor="white">
<center><h1>404 Not Found</h1></center>
<center><p><a href="https://34.69.68.207/">Have you played with The Eval Gamestonk Terminal yet?</a></p></center>
<hr><center>nginx/1.14.0</center>
</body>
</html>
<!-- Hmmm, the plot thickens... key{0f0dd5db8521ac971151f8009c7432741b174d3f6245e5472b6d36c32f904c4f}-->';
     }
     elseif (isset($_COOKIE['admin']) && strcmp($_COOKIE['admin'], 'true') == 0) {
     	    echo "<!DOCTYPE html><html><head><title>Main</title></head><body><p>Congratulations! Here you go: key{46175325b71cd137d922355d1e57f9e278f1444c002080d54bbd5cf1f0066008}</p></body></html>";
     }
     else {
                echo '
<html>
<head><title>404 Not Found</title></head>
<body bgcolor="white">
<center><h1>404 Not Found</h1></center>
<center><p><a href="https://34.69.68.207/">Have you played with The Eval Gamestonk Terminal yet?</a></p></center>
<hr><center>nginx/1.14.12</center>
</body>
</html>
<!-- Hmmm, the plot thickens... key{0f0dd5db8521ac971151f8009c7432741b174d3f6245e5472b6d36c32f904c4f}-->';}
?>
