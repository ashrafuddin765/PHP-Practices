    <?php

            $name = $email = $website = $gender = $comment ='';
            $nameerror = $emailerror = $websiteerror = $gendererror = $commenterror ='';

              if($_SERVER["REQUEST_METHOD"] == "POST" ){
                    $name       = validate($_POST['name']);
                    $email      = validate($_POST['email']);
                    $website    = validate($_POST['website']);
                if(isset($_POST['gender'])){
                    $gender     = validate($_POST['gender']);
                }
                    $comment    = validate($_POST['comment']);

                    if(!empty($_POST['name'])){
                        $name = validate($_POST['name']);
                    }else{
                        $nameerror = 'Name is required';
                    }
                    if(empty($_POST['email'])){
                        $emailerror = 'E-mail is required';
                    }elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                        $emailerror = 'Invalid Email address';
                    }else{
                        $email = validate($_POST['email']);
                    }
                    if(empty($_POST['website'])){
                        $websiteerror = 'Website is required';
                    }elseif (! filter_var($_POST['website'], FILTER_VALIDATE_URL)) {
                        $websiteerror = 'Invalid website address';
                    }else{
                        $website = validate($_POST['website']);
                    }
                    if(!empty($_POST['gender'])){
                        $gender = validate($_POST['gender']);
                    }else{
                        $gendererror = 'Gender is required';
                    }
              }

              function validate($value){
                trim($value);
                htmlspecialchars($value);
                stripslashes($value);

                return $value;
              }
    ?>
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

            <p style="color: red;">* Required field</p>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <table>
                    <tr>
                        <td>Name </td>
                        <td><input type="text" name="name">* <span style="color: red"><?php echo $nameerror ?></span></td>
                    </tr>
                    <tr>
                        <td>Email </td>
                        <td><input type="text" name="email">* <span style="color: red"><?php echo $emailerror ?></span></td>
                    </tr>
                    <tr>
                        <td>Website </td>
                        <td><input type="text" name="website">* <span style="color: red"><?php echo $websiteerror ?></span></td>
                    </tr>
                    <tr>
                        <td>Gendear </td>
                        <td>
                            <input type="radio" name="gender" value="Male">Male
                            <input type="radio" name="gender" value="Female">Female
                            * <span style="color: red"><?php echo $gendererror ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Comment</td>
                        <td><textarea name="comment" cols="30" rows="5"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" name="submit"> Submit</button></td>
                    </tr>
                </table>
            </form>
        </section>
        <section class="headeroption">
            <h2>Php fundamental training</h2>
        </section>
    </div>
</body>

</html>