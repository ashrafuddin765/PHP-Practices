<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Php Practice</title>
    <style>
    .phpcoding {
        width: 900px;
        margin: 0 auto;
        background: #ddd;
        padding: 20px;
        min-height: 600px;
    }

    .headeroption {
        background: #444;
        color: #fff;
        text-align: center;
        padding: 20px;
    }

    .headeroption h2 {
        margin: 0;
    }

    .maincontent {
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

            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                Username:
                <input type="text" name="username">
                <input type="submit" value="submit">
            </form>
            <?php

			if($_SERVER['REQUEST_METHOD'] == "POST"){
				$name = $_REQUEST['username'];
				if(empty($name)){
					echo '<p style="color: red;">It must be filled ?</p>';
				}else{
				echo "$name Your are good man";
				}
			}

			?>
        </section>
        <section class="headeroption">
            <h2>Php fundamental training</h2>
        </section>
    </div>
</body>

</html>