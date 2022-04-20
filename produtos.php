<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Produtos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<header>
<?php 
include_once "./include/navbar.php";
?>
</header>
<body>
    <div class="center">
        <h1>Buscar produtos</h1>
        <div class="search-container input-group">
            <span class="search-icon material-icons">search</span>
            <input type="search" class="search-input form-control" placeholder="Nomes ou marca de sneakers" aria-label="Nomes ou marcas de sneakers" aria-describedby="search-addon" />
        </div>

        <div class="products">
            <div class="container">
                <?php
                    for ($i = 1; $i <= 2; $i++) {
                        ?>

                        <div class="row">

                        <?php
                            for ($j = 1; $j <= 5; $j++) {
                                ?>
                                <div class="col-sm">
                                    <img src="https://droper-media.us-southeast-1.linodeobjects.com/642022144319647.webp" class="img-fluid">
                                    <p>Air Jordan 1 High Heritage</p>
                                </div>
                            <?php
                            }
                        ?>

                        </div>

                        <?php
                    }
                ?>
                

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>