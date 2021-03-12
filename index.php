<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="dist/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.0/cerulean/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

</head>
<body>

  <?php include "header.php";?>
  
  <section id="home">

    <div id="my-carousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators">

        <li class="active" data-target="#my-carousel" data-slide-to="0" aria-current="location"></li>

        <li data-target="#my-carousel" data-slide-to="1"></li>

        <li data-target="#my-carousel" data-slide-to="2"></li>

      </ol>

      <div class="carousel-inner">

        <div class="carousel-item carousel-item-1 active">
          <div class="carousel-item__inner">
            <div class="p-2 text-center">
              <h1><strong>Welcome To Agwe<span class='text-amber'>Bryan</span></strong></h1>
              <h3 class='text-light px-5 my-4'><strong>The Tale Of A Beatiful Young Boy From The University Of Buea</strong></h3>
              <a href="#" class="btn btn-danger btn-lg mt-3">Get Started >></a>
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-item-2">
          <div class="carousel-item__inner">
            <div class="p-2 text-center">
              <h1><strong>Everything With Agwe<span class='text-amber'>Bryan</span></strong></h1>
              <h3 class='text-light px-5 my-4'><strong>The Tale Of A Beatiful Young Boy From The University Of Buea</strong></h3>
              <a href="#" class="btn btn-danger btn-lg mt-3">Learn More >></a>
            </div>
          </div>
        </div>
        
        <div class="carousel-item carousel-item-3">
          <div class="carousel-item__inner">
            <div class="p-2 text-center">
              <h1><strong>Capable With Agwe<span class='text-amber'>Bryan</span></strong></h1>
              <h3 class='text-light px-5 my-4'><strong>The Tale Of A Beatiful Young Boy From The University Of Buea</strong></h3>
              <a href="#" class="btn btn-danger btn-lg mt-3">The Dealings >></a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#my-carousel" data-slide="prev" role="button">
        <span class="carousel-control-prev-icon" aria-hidden="true">
          <i class="fas fa-arrow-left fa-lg" aria-hidden="true"></i>
        </span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#my-carousel" data-slide="next" role="button">
        <span class="carousel-control-next-icon" aria-hidden="true">
          <i class="fas fa-arrow-right fa-lg" aria-hidden="true"></i>
        </span>
        <span class="sr-only">Next</span>
      </a>

    </div>

  </section>

  <?php include"news.php";?>

  
  <section class="portfolio collapse show">
    <br><br><br><br>
    <div class="container">
      <div class="portHeader text-center">
        <h2 class='text-amber'><strong>Our Other Sites</strong></h2>
      </div>
      <br><br><br>

      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 text-center px-2">
          <i class="fab fa-html5 fa-6x text-danger" aria-hidden="true"></i>
          <h4 class='text-amber my-3'>HTML5 Markup</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea doloribus perferendis quis aperiam? Adipisci, facilis?</p>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 text-center px-2">
          <i class="fab fa-css3 fa-6x text-primary" aria-hidden="true"></i>
          <h4 class='text-amber my-3'>CSS3 Styling</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea doloribus perferendis quis aperiam? Adipisci, facilis?</p>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 text-center px-2">
          <i class="fas fa-pen-nib fa-6x" aria-hidden="true"></i>
          <h4 class='text-amber my-3'>Graphic Design</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea doloribus perferendis quis aperiam? Adipisci, facilis?</p>
        </div>
      </div>
    
    </div>
    <br><br><br><br>
  </section>
  

  <?php include"footer.php";?>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="js/carousel.js"></script>
  
</body>
</html>