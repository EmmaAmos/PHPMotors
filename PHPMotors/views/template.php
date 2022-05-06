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
        <h1>Content Title Here</h1>
      </main>
      <hr>
      <footer id="footer">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/snippets/footer.php" ?>
      </footer>
    </div>
  </body>
</html>