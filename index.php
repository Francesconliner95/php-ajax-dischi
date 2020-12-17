<?php include 'dischi.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="dist/app.css">
    </head>
    <body>
        <header>

        </header>
        <main>
            <div class="container">
                <div class="cards-container">
                <?php  foreach ($dischi as $key => $value) {?>
                    <div class="card">

                        <div class="card-top">
                            <img src="<?php echo $value['poster'] ?>" alt="">
                        </div>
                        <div class="card-bottom">
                            <p><?php echo $value['title'] ?></p>
                            <p><?php echo $value['author'] ?></p>
                            <p><?php echo $value['genre'] ?></p>
                            <p><?php echo $value['year'] ?></p>        
                        </div>
                    </div>
                <?php
                }
                ?>
                </div>
            </div>
            <?php
            // var_dump($dischi);
            ?>
        </main>
        <footer>

        </footer>
    </body>
</html>
