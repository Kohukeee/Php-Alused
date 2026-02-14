<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Alused</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>Harjutus 01 - Muutujad</h1>
    <?php
        $nimi = "Tere";
        $synniaasta = 1231;
        $Tahtkuju = "Jäär";

        echo $nimi,"<br>",$synniaasta,"<br>",$Tahtkuju;
        echo "<br>";
        echo $nimi,"<br>",$synniaasta,"<br>",$Tahtkuju;
        echo "<br>";
        echo '"It\'s my Life" - Dr. Alban';
    ?>
    <h2>Harjutus 02 - Vormid</h2>
    <form action="h01.php" class="get">
        Arv1: <input type="number" name="Arv1"><br>
        Arv2: <input type="number" name="Arv2"><br>
        <input type="submit" value="Liida"><br>
    </form>
    
    <?php
        if(!empty($nr1 = $_GET["Arv1"]) && !empty($nr2 = $_GET["Arv2"])){
            $nr1 = $_GET["Arv1"];
            $nr2 = $_GET["Arv2"];
            $liida = $nr1 + $nr2;

            echo $liida;
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>