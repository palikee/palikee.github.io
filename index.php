<?php
session_start();

if ((isset($_SESSION['logged'])) && ($_SESSION['logged'] == true)) {
    header('Location: /platforma/views/start/account.php');
    exit();
}
?>

<!DOCTYPE HTML>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link href="https://fonts.googleapis.com/css?family=Pacifico&amp;subset=latin-ext" rel="stylesheet"> 
        <title>Logowanie do platformy</title>
    </head>

    <body>

        <div id="logo">
            <p class="p p1">contigo	</p>
            <p class="p p2">PLATFORMA DO NAUKI JĘZYKÓW</p>
        </div>

        <div id="menu">

            </br></br>
            <div style="clear:both;"></div>

        </div>

        <div id="container">

            <form action="views/start/loging.php" method="post"> 

                <input type="text" name="login" placeholder="login" onfocus="this.placeholder = ''" onblur="this.placeholder = 'login'" /> 
                <input type="password" name="password"  placeholder="hasło" onfocus="this.placeholder = ''" onblur="this.placeholder = 'hasło'" />
                <input type="submit" value="Zaloguj się" />

            </form>
            <form action="views/start/registration.php" method="post">

                <p>
                    <button class="button button2"> Zarejestruj się</button>
                </p>

            </form>

            <!-- <form action="index.php" method="post"> 
                    Wygeneruj hasha:
                    <br /> <input type="text" name="hash" /> <br />
                    <input type="submit" value="Podaj hasha" />
            </form> -->

        </div>

<?php
if ((!isset($_POST['hash']))) {
    /// header('Location: index.php');
    exit();
}

$passToHash = $_POST['hash'];

$hash = password_hash($passToHash, PASSWORD_DEFAULT);
echo $hash;
?>

        <?php
        if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
        }
        ?>

    </body>
</html>