<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
   
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <!-- maak hier de opdracht -->
        <form method="post">
        keuze: <input type="text" name="bestel">
        <button>submit</button>
        </form>
        
        <?php
        $a = "#1";
        $b = "#2";
        $c = "#3";
     
        setcookie ("#1", $a);
        setcookie ("#2", $b);
        setcookie ("#3", $c);

        session_start();

        if(isset($_POST["bestel"])){
            $bestel = "#" . $_POST["bestel"];
            if(isset($_COOKIE[$bestel])){
                echo "gekozen item:". $_COOKIE[$bestel];
            }
        }
        ?>
    </body>
</html>