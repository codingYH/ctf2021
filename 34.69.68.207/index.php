<!DOCTYPE html>

<?php
	if (!empty($_GET["quote"])) {
		$quote = $_GET["quote"];
		if ($quote == 'GME') {
			$str = '<p><img src="gme.jpg" alt ="GME" /></p>';
		}
		else if ($quote == 'AMC') {
			$str = '<p><img src="amc.jpg" alt ="AMC" /></p>';
		}
		else {
			$str = "<h1>Sorry, the stock ticker symbol could not be found..." . eval($quote) . "</h1>";
		}
	}
?>
<html>
<head>
<title>The Gamestonk Terminal 💎🙌</title>
</head>

<body>
	<h1>The Gamestonk Terminal 💎🙌</h1>
	<div id="results">
		<p>Set the <code>quote</code> parameter in query string to be a stock ticket symbol (e.g., <code>quote=GME</code>)...</p>
	<?php
		if (isset($str)) {
			echo "$str";
		}
	?>
	</div>
</body>
</html>
