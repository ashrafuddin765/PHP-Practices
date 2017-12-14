
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
            <h4>PHP Form Validation</h4>
            <hr>
            <?php
                var_dump(date_default_timezone_set(date_default_timezone_get()));
                echo date("h:i:sa");
            ?>
        </section>
        <section class="headeroption">
            <h2>Php fundamental training</h2>
        </section>
    </div>
</body>

</html>