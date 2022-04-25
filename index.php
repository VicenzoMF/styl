<?php 
include_once "./include/head.php"
?>
<header>
<?php 
include_once "./include/navbar.php";
?>
</header>
<body>

<!-- Carousel -->

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/foto1.gif" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/foto2.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/foto3.gif" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

<div class="center">
    <h1>Escolhidos para você</h1>
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

    <h1>Novas coleções</h1>
    <div class="products">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/jordan.gif" class="d-block w-100" alt="...">
          </div>
        </div>  
      </div>
        <div class="container">
            <?php
                for ($i = 1; $i <= 1; $i++) {
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

    <h1>Novo drop</h1>
    <div class="products">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/jordanheritage.webp" class="d-block w-100" alt="...">
          </div>
        </div>  
      </div>
        <div class="container">
            <?php
                for ($i = 1; $i <= 1; $i++) {
                    ?>

                    <div class="row">

                    <?php
                        for ($j = 1; $j <= 1 ; $j++) {
                            ?>
                            <div class="col-sm">
                                <img src="https://droper-media.us-southeast-1.linodeobjects.com/642022144319647.webp" width="140rem" class="img-fluid">
                                Air Jordan 1 High Heritage
                                <button type="button" class="btn btn-dark border-light">Comprar</button>
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




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
