<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF_8">
        <meta name="viewport" content="width=device-width, initial-scale-1.0">
        <title>Home Page</title>
        <!--link rel="stylesheet" href="css/index.css"-->
        <link rel="stylesheet" href="/css/style.css">
        <!--Normalize css file -->
        <link rel="stylesheet" href="/css/normalize.css">
        
        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,400;0,500;0,600;0,700;0,800;1,200&display=swap" rel="stylesheet">
        <!--Font awesome library -->
        <link rel="stylesheet" href="css/all.css">
    </head>
    <body>
    <nav>
    <div class="menu">
      <div class="logo">
          <!-- about page -->
        <a href="#">Benha Clinics</a>
      </div>
      <ul>
        <li><a href="/home">Home</a></li>
        <li><a href="/book">Make an appointment</a></li>
        <!--sign up as patient or as a clinic-->
        <li><a href="/contact">Contact us</a></li>
        <li><a href="#">about us</a></li>
      </ul>
    </div>
  </nav>
  <div class="img">
  @yield('content')
  </div>
 
  
</body>
</html>