<?php include 'dischi.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="dist/app.css">
        <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js">
        </script>
    </head>
    <body>
        <header>
            <input type="radio" name="call" value="php">
            <label for="php">PHP</label>
            <input type="radio" name="call" value="ajax">
            <label for="ajax">AJAX</label>
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
                <!-- <script id="card" type="text/x-handlebars-template">
                    <div class="card">
                        <div class="card-top">
                            <img src="{{context[0].poster}}" alt="">
                        </div>
                        <div class="card-bottom">
                            <p>{{context[0].title}}</p>
                            <p>{{context[0].author}}</p>
                            <p>{{context[0].genre}}</p>
                            <p>{{context[0].year}}</p>
                        </div>
                    </div>
                </script> -->
                </div>
            </div>
        </main>
        <footer>

        </footer>
        <script src="main.js" charset="utf-8"></script>
    </body>
</html>
