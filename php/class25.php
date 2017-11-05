<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php Practice</title>

	<style>
		.phpcoding{
			width: 900px;
			margin: 0 auto;
			background: #ddd;
			padding: 20px;
			min-height: 600px;
		}

		.headeroption{
			background: #444;
			color: #fff;
			text-align: center;
			padding: 20px;
		}
		.headeroption h2{
			margin: 0;
		}
		.maincontent{
			min-height: 400px;
		}
	</style>
</head>
<body>
	<div class="phpcoding">
		<section class="headeroption">
			<h2>Php fundamental training</h2>
		</section>
		<section class="maincontent">

		<hr>
		<h4>PHP SuperGlobals Variable[$GLOBALS & $SERVER]</h4>
		<hr>
			<pre>
		
<?php

	$x = 15;
	$y = 10;

	function sum(){ 
		$GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
	}

	sum();
	echo $z;

	echo $_SERVER['REMOTE_ADDR'];
	echo "</br>";
	var_dump($_SERVER);

?>
			</pre>



		</section>
		<section class="headeroption">
			<h2>Php fundamental training</h2>
		</section>
	</div>
</body>
</html>