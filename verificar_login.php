<?php
        if (isset ($_Post["email"]) && empty($_POST["email"])== false)
        {
            echo "o email é:".$_POST["email"];
        }else
        {
            echo "Email não existe";
        }

        if (isset ($_Post["senha"]) && empty($_POST["senha"])== false)
        {
            echo "o senha é:".$_POST["senha"];
        }else
        
           header ('location: login.php?erro=senha não pode  estar  em branco ');
        

        ?>