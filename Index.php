<!-- this is my Firts Web Page-->
<!DOCTYPE html>
<link rel="icon" type="image/png" href="icons/icon.png">
<link rel="stylesheet" type="text/css" href="Style.css" />
<?php

echo "Conexion";
$host = "localhost";
$user = "root";
$pass = "";
$db = "electronics shop";
$port = 3306;

$mysqli = mysqli_connect($host, $user, $pass, $db, $port);

if ($mysqli->connect_errno) {

    echo "Error en la conexion No ($mysqli->connect_errno)
	descripcion: $mysqli->connect_error";
} else {
    echo "Conexion Exitosa";
}

?>
<head>
    <!--this is the title of the page-->
    <meta http-equiv="Contact type" content="text/html; charset= utf-8" />
    
    <!-- this line code is for agree a icon in the webpage -->
    
<center>
    <title>Electronics Shop</title>
</center>

<!--body of the web page-->

<body>
    <center>
        <p>Electronics Shop</p>
        <!-- this a submenu of the page-->
        <div id="menu wrapper">

            <li><a href="Index.php"><img src="icons/logo.png" height="45px"></a></li>
            <li><a href="Login.php">Mi Account</a></li>
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
            <li><a href="Admin.php">Admin</a></li>
        </div>
        <!-- this is the list of the products-->
        <div class="products-list">
            <?php
            while ($data = mysqli_fetch_assoc($result)) {
                $productname = $data['ProductName'];
                $price = $data['Price'];
                $Brand = $data['Brand'];

            ?>

                <!-- this is the class box for the called products-->
                <div class="box">
                    <h2>
                        <?php
                        echo $productname

                        ?>
                    </h2>
                    <p>
                        <?php
                        echo $price
                        ?>
                    </p>



                    <form action="agree.php" method="POST">
                        <input type="hidden" name="txtName" value="
            <?php
                $productname = $data['ProductName'];
            ?>">
                        <input type="hidden" name="txtprice" value="
            <?php
                $price = $data['Price'];
            ?>">
                        <input type="number" name="txtQuantity">
                        <input type="submit" name="btnAdd" value="Add">

                    </form>
                </div>
            <?php
            }
            ?>



</body>
  

</head>

</html>