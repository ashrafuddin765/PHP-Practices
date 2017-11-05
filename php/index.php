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
<!-- 			<pre> -->
		
					<?php
						$ages = array(
							"shahin" 	=> 22,
							"mashok" 	=> 27,
							"Mushahid" 	=> 29,
							"saddam"	=> 22,
							"ashraf"	=> 19,	
						);

						foreach ($ages as $age => $value) {
							
							echo "key = $age, value = $age <br>";

						}

					?>
<!-- 			</pre> -->



		</section>
		<section class="headeroption">
			<h2>Php fundamental training</h2>
		</section>
	</div>
</body>
</html>