<?php
 include 'dischi_php.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="dist/app.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js">
        </script>
    </head>
    <body>
        <header>
            <h1>
                Brani caricati tramite file PHP
            </h1>
            <div class="choise">
                <input type="radio" name="call" value="php">
                <label for="php">PHP</label>
                <input type="radio" name="call" value="ajax">
                <label for="ajax">AJAX</label>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="cards-container" id="php">
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
                <div class="cards-container" id="ajax">
                    <script id="card" type="text/x-handlebars-template">
                        <div class="card">
                            <div class="card-top">
                                <img src="{{poster}}" alt="">
                            </div>
                            <div class="card-bottom">
                                <p>{{title}}</p>
                                <p>{{author}}</p>
                                <p>{{genre}}</p>
                                <p>{{year}}</p>
                            </div>
                        </div>
                    </script>
                </div>
            </div>
        </main>
        <footer>

        </footer>
        <script src="main.js" charset="utf-8"></script>
    </body>
</html>
