<!-- this is my Firts Web Page-->
<?php

//echo "Conexion";
$host = "localhost";
$user = "root";
$pass = "";
$db = "electronics shop";
$port = 3306;

$mysqli = mysqli_connect($host,$user,$pass,$db,$port);

if($mysqli->connect_errno)
{

	echo "Error en la conexion No ($mysqli->connect_errno)
	descripcion: $mysqli->connect_error";
}
else
{
	echo "Conexion Exitosa";
}

?>
<!DOCTYPE html>

<head>
    <!--this is the title of the page-->
    <meta http-equiv="Contact type" content="text/html; charset= utf-8" />
    <link rel="stylesheet" type="text/css" href="" />
    <!-- this line code is for agree a icon in the webpage -->
    <link rel="icon" type="image/png" href="icons\icon.png" />
    <center>
        <title>Electronics Shop</title>
    </center>

    <!--body of the web page-->

<body>
    <center>
        <p>Electronics Shop</p>
        <!-- this a submenu of the page-->
        <div class = "menu">

            <li><a href="Index.php"><img src="icons/logo.png" height="45px"></a></li>
            <li><a href="">Categorys</a>
                <!-- this a submenu for the web page-->
                <ul class="sub-menu">
                    <li><a href="">All</a></li>
                    <li><a href="">Celphone</a></li>
                    <li><a href="">Laptops</a></li>
                    <li><a href="">Gamers</a></li>
                </ul>
                <!--this a submenu for the networks-->
            <li><a href="">Social networks</a></li>
            <ul class="sub-menu">
                <li><a href="#" category="#">Facebook</a></li>
                <li><a href="#" category="#">Twitter</a></li>
                <li><a href="#" category="#">GitHub</a></li>
            </ul>
        </div>
        <!-- in this part we can start sesion-->

        <div>
            <form action="validar.php" method="post" class="Form-registrer">
                <h2 class="form-title">Login </h2>
                <div class="contenedotr-inputs">
                    <input type="email" name="Email" placeholder="Email" class="input-100" required>
                    <input type="password" name="Password" placeholder="Password" class="input-48" required>
                    <center><input type="submit" value="Login" class="btn-enviar"></center>
                    <p class="form-link">You don't have a account ?<a href="Register_User.php">Join now</a></p>
                </div>

</body>


</head>

</html>