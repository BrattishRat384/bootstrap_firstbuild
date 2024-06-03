<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap_FirstBuild - Members</title>
    <!-- Required scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/style.css">    
  </head>
  <!-- Main code -->
  <body>
    <!-- Nav bar start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top"> <!-- defines navbar, sets nav to large, bg dark, and nav colour for dark bg, adds padding on y axis of 3 predefined, fix-top makes the nav always appear at the top-->
        <div class="container">
            <!-- Title -->
            <a href="./index.html" class="navbar-brand">Bootstrap_FirstBuild</a> <!-- Title text with href to index -->

            <!-- Hamburgur menu (Collapses navmenu when scaled)-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"> <!-- Responce for hamburgure menu and calls for nav bar-->
              <!-- Navbar Icon -->
              <span class="navbar-toggler-icon"></span> <!-- calls for predefined svg-->
            </button>

            <!-- Navmenu -->
            <!--
              ***********************
              * Fix Nav text colour *
              ***********************
            -->
            <div class="collapse navbar navbar-collapse" id="navmenu"> <!-- Makes nav into hamburger menu when width < x ammount and adds id-->
              <!-- Unordered list -->
              <ul class="navbar-nav ms-auto"> <!-- defines navbar -->
                <li class="nav-item">
                  <a href="./index#learn" class="nav-link">What you'll learn</a>
                </li>
                <li class="nav-item">
                  <a href="./index#questions" class="nav-link">Questions</a>
                </li>
                <li class="nav-item">
                  <a href="./index#instructors" class="nav-link">Instructures</a>
                </li>
                <li class="nav-item">
                  <a href="./members.php" class="nav-link">Members</a>
                </li>
              </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->
    <!-- Showcase start -->
    <section class="bg-dark text-light p-5 text-center">
      This is the home page.
    </section>
    <!-- Showcase End -->

  </body>
</html>