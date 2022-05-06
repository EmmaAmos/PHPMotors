<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Content Title | PHP Motors</title>
    <!-- device-width is the width of the screen in CSS pixels -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- screen is used for computer screens, tablets, smart-phones etc. -->
    <link href="/phpmotors/css/mobilestyle.css" type="text/css" rel="stylesheet" media="screen">
    <link href="/phpmotors/css/desktopstyle.css" type="text/css" rel="stylesheet" media="screen">  
  </head>
  <body>
    <div id="wrapper">
      <header>
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/snippets/header.php" ?>
      </header>
      <nav id="navbar">
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/snippets/nav.php" ?>
      </nav>
      <main>
        <h1 class="boldPrint">Welcome to PHP Motors!</h1>
        <div id="picstack">
          <div id="pic-details">
            <img src="/phpmotors/images/delorean.jpg" alt="delorean">
            <div id="text-top-right">
              <h2 class="blueText">DMC Delorean</h2>
              <p class="blueText">
                3 Cup holders <br>
                Super doors <br>
                Fuzzy dice!
              </p>
            </div>
          </div>
          <div id="own-botton-div">
            <input id="own_button" type="image" src="/phpmotors/images/site/own_today.png" alt="own_today"/> 
          </div>
        </div>
        <div id="stact">
          <div id="reviews">
              <h2 class="boldPrint">DMC Deloren Reviews</h2>
              <ul>
                  <li>"So fast it's almost like traveling in time." [4/5]</li>
                  <li>"Coolest ride on the road." [4/5]</li>
                  <li>"I'm feeling Marty McFly" [5/5] </li>
                  <li> "Most furturistic ride of our day"</li>
                  <li>"80's livin' and I love it!" [5/5]</li>
              </ul> 
          </div>
          <div id="upgrades">
            <h2>Delorean Upgrades</h2>
            <div id="grid-upgrades-top">
                <div id="item-cap">
                  <img src="/phpmotors/images/upgrades/flux-cap.png" alt="flux-cap">
                </div>
                <div id="item-flame">
                  <img src="/phpmotors/images/upgrades/flame.jpg" alt="flame">
                </div>
            </div>
            <div id="grid-upgrades-text-top">
              <div id="grid-upgrades-text-top-text-cap">
                <a href="#">Flux Capacitor</a>
              </div>
              <div id="grid-upgrades-text-top-text-flame">
                <a href="#">Flame Decals</a>
              </div>
            </div>
            <div id="grid-upgrades-bottom">
              <div id="item-bumper">
                <img src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="bumper_sticker">
              </div>
              <div id="item-hubcap">
                <img src="/phpmotors/images/upgrades/hub-cap.jpg" alt="hub-cap">
              </div>
            </div>
            <div id="grid-upgrades-text-bottom">
              <div id="grid-upgrades-text-bottom-text-sticker">
                <a href="#">Bumper Stickers</a>
              </div>
              <div id="grid-upgrades-text-bottom-text-hubcap">
                <a href="#">Hub Cap</a>
              </div>
            </div>
          </div>
        </div>
      </main>
      <hr>
      <footer id="footer">
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/snippets/footer.php" ?>
      </footer>
    </div>
  </body>
</html>