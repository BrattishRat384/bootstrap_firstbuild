<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap_FirstBuild</title>
    <!-- Required scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/style.css">    
  </head>
  <!-- Main code -->
  <body>
    <!-- Nav bar start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <!-- Title -->
            <a href="./index.html" class="navbar-brand">Bootstrap_FirstBuild</a>

            <!-- Hamburgur menu (Collapses navmenu when scaled)-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
              <!-- Navbar Icon -->
              <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navmenu -->
            <div class="collapse navbar navbar-collapse" id="navmenu">
              <!-- Unordered list -->
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a href="./index.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                  <a href="./members.php" class="nav-link">Members</a>
                </li>
                <li class="nav-item">
                  <a href="./index.html" class="nav-link">Social</a>
                </li>
                <li class="nav-item">
                  <a href="./index.html" class="nav-link">Contact</a>
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