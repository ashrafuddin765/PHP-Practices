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
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <table>
                    <tr>
                        <td>Name </td>
                        <td>
                            <input type="text" name="name">
                        </td>
                    </tr>
                    <tr>
                        <td>Email </td>
                        <td>
                            <input type="text" name="email">
                        </td>
                    </tr>
                    <tr>
                        <td>Website </td>
                        <td>
                            <input type="text" name="website">
                        </td>
                    </tr>
                    <tr>
                        <td>Gender </td>
                        <td>
                            <input type="radio" name="gender" value="male"> Male
                            <input type="radio" name="gender" value="female"> FeMale
                        </td>
                    </tr>
                    <tr>
                        <td>Comments </td>
                        <td>
                            <textarea name="comment" rows="5" cols="50"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" name="submit">Submit</button>
                        </td>
                    </tr>
                </table>
            </form>
            <?php
                $name = $email = $website = $comment = $gender ='';
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                   $name =      validate($_POST["name"]);
                   $email =     validate($_POST["email"]);
                   $website =   validate($_POST["website"]);
                   $gender =    validate($_POST["gender"]);
                   $comment =   validate($_POST["comment"]);
                 
                    echo 'name : '.$name.'</br>';
                    echo 'email : '.$email.'</br>'; 
                    echo 'website : '.$website.'</br>';
                    echo 'gender : '.$gender.'</br>'; 
                    echo 'comment : '.$comment.'</br>';


                    var_dump($gender);
                } 

                function validate($data){
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);

                    return $data;
                }  


            ?>
        </section>
        <section class="headeroption">
            <h2>Php fundamental training</h2>
        </section>
    </div>
</body>

</html>