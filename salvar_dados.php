<?php
echo $_GET ["login"];
echo "<br/>";
echo $_GET ["senha"];

echo "<br>";

echo $_POST ["login"];
echo "<br/>";
echo $_POST ["senha"];
echo"<br>";



echo $_GET ["nome"];
echo "<br/>";
echo $_GET ["idade"];

echo "<br>";


        if (isset($_GET['nome'])) {
            $nome = htmlspecialchars($_GET['nome']);
            echo "<h2>Olá, $nome!</h2>";
        }
    ?>
 <br>



