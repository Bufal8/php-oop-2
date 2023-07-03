<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
            require_once("./data/db.php");
        ?>
        <title>Il mio shop</title>
    </head>

    <body>
        <h1>Il mio shop</h1>

        <div class="container">
            <div class="card">
                <div class="immagine">
                    <img src="<?php echo $croccantini -> getProductType() -> getImage();?>" alt="croccantini">  
                </div>
                <div class="info">
                    <div class="titolo_prezzo">
                        <h2>
                            <?php echo $croccantini -> getName(); ?>
                        </h2>
                        <div class="prezzo">
                            <?php echo $croccantini -> getPrice(); ?>
                        </div>
                    </div>
                    <div>
                        Tipo di articolo: <b><?php echo $croccantini -> getProductType() -> getType(); ?></b>
                    </div>
                    <div class="icona_categoria">
                        <img src="<?php echo $croccantini -> getProductType() -> getCategoryIcon();?>" alt="icona categoria - cibo">
                    </div>
                    <div>
                        Categoria: <b><?php echo $croccantini -> getCategory();?></b>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="immagine">
                    <img src="<?php echo $cannaDaPesca -> getProductType() -> getImage();?>" alt="croccantini">  
                </div>
                <div class="info">
                    <div class="titolo_prezzo">
                        <h2>
                            <?php echo $cannaDaPesca -> getName(); ?>
                        </h2>
                        <div class="prezzo">
                            <?php echo $cannaDaPesca -> getPrice(); ?>
                        </div>
                    </div>
                    <div>
                        Tipo di articolo: <b><?php echo $cannaDaPesca -> getProductType() -> getType(); ?></b>
                    </div>
                    <div class="icona_categoria">
                        <img src="<?php echo $cannaDaPesca -> getProductType() -> getCategoryIcon();?>" alt="icona categoria - gioco">
                    </div>
                    <div>
                        Categoria: <b><?php echo $cannaDaPesca -> getCategory();?></b>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="immagine">
                    <img src="<?php echo $ciotola -> getProductType() -> getImage();?>" alt="croccantini">  
                </div>
                <div class="info">
                    <div class="titolo_prezzo">
                        <h2>
                            <?php echo $ciotola -> getName(); ?>
                        </h2>
                        <div class="prezzo">
                            <?php echo $ciotola -> getPrice(); ?>
                        </div>
                    </div>
                    <div>
                        Tipo di articolo: <b><?php echo $ciotola -> getProductType() -> getType(); ?></b>
                    </div>
                    <div class="icona_categoria">
                        <img src="<?php echo $ciotola -> getProductType() -> getCategoryIcon();?>" alt="icona categoria - accessorio">
                    </div>
                    <div>
                        Categoria: <b><?php echo $ciotola -> getCategory();?></b>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="immagine">
                    <img src="<?php echo $tiragraffi -> getProductType() -> getImage();?>" alt="croccantini">  
                </div>
                <div class="info">
                    <div class="titolo_prezzo">
                        <h2>
                            <?php echo $tiragraffi -> getName(); ?>
                        </h2>
                        <div class="prezzo">
                            <?php echo $tiragraffi -> getPrice(); ?>
                        </div>
                    </div>
                    <div>
                        Tipo di articolo: <b> <?php echo $tiragraffi -> getProductType() -> getType(); ?> </b>
                    </div>
                    <div class="icona_categoria">
                        <img src="<?php echo $tiragraffi -> getProductType() -> getCategoryIcon();?>" alt="icona categoria - cuccia">
                    </div>
                    <div>
                        Categoria: <b><?php echo $tiragraffi -> getCategory();?></b>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
