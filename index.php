<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">

    <title>Razor Products<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet">
    <link rel="stylesheet" href="inc/main.css?<?php echo filemtime('inc/main.css'); ?>">

    <script type="text/javascript" src="inc/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http']").not("[href*='" + window.location.host + "']").prop('target','new');
        $("a[href$='.pdf']").prop('target', 'new');
      });
    </script>
  </head>
  <body>

    <header>
      <img src="images/logo.png" alt="Razor Products" class="logo">
    </header>

    <div id="hero" role="img" aria-label="Give yourself an edge with Razor PVC moulding & trim"></div>

    <div class="ribbon">
      The most cost-effective PVC trim &amp; mouldings in the marketplace
    </div>

    <div id="trim">
      <div class="site-width">
        <div class="text">
          <h2 class="razor">Razor</h2>
          <h1 class="title">PVC Trim</h1>

          <div>
            Your attention to quality and detail has never been more important. Razor Trim is the most cost effective PVC trim available. Contractors, architects and homeowners all see the benefits of PVC over wood and wood composites.<br>
            <br>

            <ul>
              <li>Available in standard 16' lengths</li>
              <li>Our trim is cut to keep the edges clean and dimensionally accurate with true 90&deg; angles.</li>
              <li>We offer two finishes, Smooth Matte and Wood Grain. Our trim boards can be ordered either Smooth/Smooth or Smooth/Wood Grain.</li>
              <li>Wood Grain is designed with a more natural surface texture to compliment cedar or fiber cement siding.</li>
            </ul>
            <br>

            <a href="#" class="button">Download Brochure</a>
          </div>
        </div> <!-- /.text -->
      </div> <!-- /.site-width -->

      <img src="images/trim.png" alt="" id="trim-image">
    </div> <!-- /#trim -->

    <div id="mouldings">
      <div class="site-width">
        <div class="text">
          <h2 class="razor">Razor</h2>
          <h1 class="title">Mouldings</h1>

          <div>
            Take your home exterior to the next level. Razor Moulding highlights the architectural features of your home and makes for head turning curb appeal &mdash; without rotting, peeling or fading. Competitively priced for best value.<br>
            <br>

            <ul>
              <li>Matte Finish allows for one coat paint application</li>
              <li>Extruded (not machined) using the finest exterior grade cellular PVC material</li>
              <li>Millwork, Railing, Window &amp; Door Profiles </li>
              <li>Fastens and installs like wood</li>
              <li>Ready to install, saving on time & labor</li>
            </ul>
            <br>

            <a href="#" class="button">Download Brochure</a>
          </div>
        </div> <!-- /.text -->
      </div> <!-- /.site-width -->
    </div> <!-- /#mouldings -->

    <div class="ribbon bigger">
      What is the Razor edge?
    </div>

    <div id="edge">
      <div class="site-width">
        ICONS HERE<br>
        It is virtually maintenance free and it complements all exterior cladding materials, including vinyl, wood, stucco, fiber cement, and brick. Installers prefer it because cellular PVC trim is lightweight and durable and it can be installed using ordinary woodworking tools.
      </div>
    </div>

    <div id="email">
      <div class="site-width">
        EMAIL HERE
      </div>
    </div>

    <footer>
      <img src="images/logo.png" alt="Razor Products" class="logo">

      Copyright &copy; <?php echo date("Y"); ?><br>
      <br>

      800.330.2239<br>
      3402 Stanwood Boulevard<br>
      Huntsville, AL 35811
    </footer>

  </body>
</html>