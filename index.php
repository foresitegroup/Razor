<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">

    <title>Razor Products<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <meta name="description" content="The most cost-effective PVC trim and mouldings in the marketplace.">
    <meta name="keywords" content="">

    <link href="https://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet">
    <link rel="stylesheet" href="inc/main.css?<?php echo filemtime('inc/main.css'); ?>">

    <script type="text/javascript" src="inc/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="inc/jquery.cycle2.min.js"></script>
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

            <a href="pdf/Razor_PVC_Trim.pdf" class="button">Download Brochure</a>
          </div>
        </div> <!-- /.text -->
      </div> <!-- /.site-width -->
      
      <img src="images/trim-table.svg" alt="" id="trim-table">
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

            <a href="pdf/Razor_Mouldings.pdf" class="button">Download Brochure</a>
          </div>
        </div> <!-- /.text -->

        <div id="slides">
          <div class="cycle-slideshow" data-cycle-slides="> div" data-cycle-timeout="0" data-cycle-fx="scrollHorz" data-cycle-caption="#custom-caption" data-cycle-caption-template="{{slideNum}}<span>/{{slideCount}}</span><div>Click through to see our <span>30+ available profiles</span>">
            <div>
              <img src="images/mouldings/bed-moulding.png" alt="Bed Moulding">
              <img src="images/mouldings/rams-crown.png" alt="Ram's Crown">
              <img src="images/mouldings/imperial-rake.png" alt="Imperial Rake">
            </div>

            <div>
              <img src="images/mouldings/rake-mould.png" alt="Rake Mould">
              <img src="images/mouldings/shingle-mould.png" alt="Shingle Mould">
              <img src="images/mouldings/base-cap.png" alt="Base Cap">
            </div>

            <div>
              <img src="images/mouldings/crown-mould-1.png" alt="Crown Mould 1">
              <img src="images/mouldings/crown-mould-2.png" alt="Crown Mould 2">
              <img src="images/mouldings/crown-mould-3.png" alt="Crown Mould 3">
            </div>

            <div>
              <img src="images/mouldings/quarter-round.png" alt="Quarter Round">
              <img src="images/mouldings/scotia-cove.png" alt="Scotia Cove">
              <img src="images/mouldings/drip-cap.png" alt="Drip Cap">
            </div>

            <div>
              <img src="images/mouldings/adams-casing.png" alt="Adam's Casing">
              <img src="images/mouldings/backband-casing.png" alt="Backband Casing">
              <img src="images/mouldings/backband.png" alt="Backband">
            </div>

            <div>
              <img src="images/mouldings/brickmould.png" alt="Brickmould">
              <img src="images/mouldings/brickmould-j.png" alt="Brickmould + J">
              <img src="images/mouldings/beadboard.png" alt="Beadboard">
            </div>

            <div>
              <img src="images/mouldings/weatherstop.png" alt="Weatherstop">
              <img src="images/mouldings/water-table.png" alt="Water Table">
              <img src="images/mouldings/louver.png" alt="Louver">
            </div>

            <div>
              <img src="images/mouldings/sill.png" alt="Sill">
              <img src="images/mouldings/attic-sill.png" alt="Attic Sill">
              <img src="images/mouldings/historic-sill.png" alt="Historic Sill">
            </div>

            <div>
              <img src="images/mouldings/sill-nose.png" alt="Sill Nose">
              <img src="images/mouldings/transom-sill-nose.png" alt="Transom Sill Nose">
              <img src="images/mouldings/historic-sill-nose.png" alt="Historic Sill Nose">
            </div>

            <div class="two-images">
              <img src="images/mouldings/top-rail.png" alt="Top Rail">
              <img src="images/mouldings/bottom-rail.png" alt="Bottom Rail">
            </div>

            <div class="two-images">
              <img src="images/mouldings/1-14-square.png" alt='1-1/4" Square'>
              <img src="images/mouldings/1-12-square.png" alt='1-1/2" Square'>
            </div>

            <p class="cycle-prev"><img src="images/arrow-left.png" alt="<"></p>
            <p class="cycle-next"><img src="images/arrow-right.png" alt=">"></p>
            <p id="custom-caption"></p>
          </div>
        </div>
      </div> <!-- /.site-width -->
    </div> <!-- /#mouldings -->

    <div class="ribbon bigger">
      What is the Razor edge?
    </div>

    <div id="edge">
      <div class="site-width">
        <img src="images/icon-easy-to-install.svg" alt="Easy to install with basic tools">
        <img src="images/icon-clean.svg" alt="Just soap and water to clean">
        <img src="images/icon-water-resistant.svg" alt="Water resistant">
        <img src="images/icon-bug-resistant.svg" alt="Bug and insect resistant">
        <img src="images/icon-rot-resistant.svg" alt="Rot and mold resistant">
        <br>

        It is virtually maintenance free and it complements all exterior cladding materials, including vinyl, wood, stucco, fiber cement, and brick. Installers prefer it because cellular PVC trim is lightweight and durable and it can be installed using ordinary woodworking tools.
      </div>
    </div>

    <div id="contact">
      <div class="site-width">
        Want to know more? Get in touch with a
        <h3>Razor Specialist</h3>

        <script type="text/javascript">
          $(document).ready(function() {
            var form = $('#contact-form');
            var formMessages = $('#contact-form-messages');
            $(form).submit(function(event) {
              event.preventDefault();

              function formValidation() {
                if ($('#name').val() === '') { alert('Name required.'); $('#name').focus(); return false; }
                if ($('#email').val() === '') { alert('Email Address required.'); $('#email').focus(); return false; }
                if ($('#message').val() === '') { alert('Message required.'); $('#message').focus(); return false; }
                return true;
              }

              if (formValidation()) {
                var formData = $(form).serialize();
                formData += '&src=ajax';

                $.ajax({
                  type: 'POST',
                  url: $(form).attr('action'),
                  data: formData
                })
                .done(function(response) {
                  $(formMessages).html(response);

                  $(form).find('input:text, textarea').val('');
                  $('#email').val('');
                })
                .fail(function(data) {
                  if (data.responseText !== '') {
                    $(formMessages).html(data.responseText);
                  } else {
                    $(formMessages).text('Oops! An error occured and your message could not be sent.');
                  }
                });
              }
            });
          });
        </script>

        <?php
        // Settings for randomizing form field names
        $ip = $_SERVER['REMOTE_ADDR'];
        $timestamp = time();
        $salt = "RazorContactForm";
        ?>

        <noscript>
        <?php
        $feedback = (!empty($_SESSION['feedback'])) ? $_SESSION['feedback'] : "";
        unset($_SESSION['feedback']);
        ?>
        </noscript>

        <form action="form-contact.php" method="POST" id="contact-form">
          <div>
            <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name" placeholder="Name">

            <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="Email Address">

            <textarea name="<?php echo md5("message" . $ip . $salt . $timestamp); ?>" id="message" placeholder="Message"></textarea>

            <input type="hidden" name="referrer" value="index.php">
            <input type="text" name="confirmationCAP" style="display: none;">
            <input type="hidden" name="ip" value="<?php echo $ip; ?>">
            <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

            <input type="submit" name="submit" value="Submit">
          </div>
        </form>

        <div id="contact-form-messages"><?php echo $feedback; ?></div>
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