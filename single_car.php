<?php include('config.php'); ?>
<?php include('header.php'); ?>

<!-- Sisu -->
 <div class="container">

    <a href="index.php" class="btn btn-outline-dark"> Tagasi </a>

    <div class="row">
           <?php
    $id = $_GET['id'];
    $paring = "SELECT * FROM `cars` WHERE id=".$id."";
    $valjund = mysqli_query($yhendus, $paring);
    $rida = mysqli_fetch_assoc($valjund);

   ?>
        <div class="col">
            <h1><?php echo $rida["mark"]; ?> <?php echo $rida["model"]; ?></h1>
            <p>Staatus: <?php echo $rida["status"] ?></p>
            <p>Mootor: <?php echo $rida["engine"] ?></p>
            <p>Kütus: <?php echo $rida["fuel"] ?></p>
            <p>Aasta: <?php echo $rida["year"] ?></p>
            <p>Istmeid: <?php echo $rida["seats"] ?></p>
            <p>Käigukast: <?php echo $rida["transmission"] ?></p>
            <p>Hind: <?php echo $rida["price"] ?>€/päev</p>
            <a href="#" class="btn btn-dark w-100">Rendi auto</a>
        </div>
        <div class="col">
             <img src="https://loremflickr.com/800/500/<?php echo str_replace(" ","", $rida["mark"]) ?>" class="card-img-top img-fluid" alt="<?php echo str_replace(" ","", $rida["mark"]) ?>">
        </div>
    </div>
</div>