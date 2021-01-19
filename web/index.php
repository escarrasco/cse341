<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>CS 313 Assignment Portal | Esther S. Carrasco E. | BYU-Idaho</title>
    <meta name="author" content="Esther Carrasco | CS 313 BYU-Idaho">
    <meta name="description" content="Assignment portal page for Esther Carrasco in CS 313: Web Development II at Brigham Young University-Idaho.">
    <link rel="shortcut icon" type="image/png" href="/img/favicon.ico"/>
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
  </head>
  <body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/common/header.php'; ?> 
    </header>      
    <main class="flip-card">
        <div class="container flip-card-inner">
          <div class="row flip-card-front">
            <div class="col-sm">
              <img class="rounded-circle" src="/img/profile.jpg" alt="My Profile Picture">
              <h2>Hi, I'm Esther.</h2>
              <p>Hover the card to know more about me</p>
            </div>
          </div>
          <div class="row flip-card-back">
            <div class="col-sm">
              <h2>Esther Silvia Carrasco Escobar</h2>
              <p>I'm from Bolivia, a beautiful country with a wide cultural diversity.</p>
              <p>My major is Web Development. I discovered that I join solving algorithm problems more than the design and visual part of a development project.</p>
              <p>Another think I like is reading horror novels. Stephen King is one of my favorite writers.</p>
            </div>
          </div>

        </div>
        
    </main>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/common/footer.php'; ?> 
    </footer>
    <script src="/js/menu.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
