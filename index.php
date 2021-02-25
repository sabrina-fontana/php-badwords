<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php badwords</title>
  </head>
  <body>

    <?php

      $text = 'lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

      $textLength = strlen($text);

      $badWord = $_GET['badword'];

      $modText = str_replace($badWord, "***", $text);

      $modTextLength = strlen($modText);

    ?>

    <div><b>Il testo originale è il seguente:</b> <?php echo $text; ?></div><br>

    <div><b>La sua lunghezza è:</b> <?php echo $textLength; ?> caratteri</div><br>

    <div><b>La badword scelta è:</b> <?php echo $badWord; ?></div><br>

    <div><b>Il testo modificato è il seguente:</b> <?php echo $modText; ?></div><br>

    <div><b>La sua lunghezza è:</b> <?php echo $modTextLength; ?> caratteri</div><br>

  </body>
</html>
