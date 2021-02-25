<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php bad words bonus</title>
  </head>
  <body>

    <!-- PHP IN CLI -->
    <?php

    $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

    echo "TESTO ORIGINALE " . $text . "\r\n\r\n";

    $badWord = $argv[1];

    echo "BADWORD " . $badWord . "\r\n\r\n";

    $modText = str_replace($badWord, '***', $text);

    echo "TESTO MODIFICATO " . $modText . "\r\n\r\n";

    $badWordLength = strlen($badWord);

    echo "LA BADWORD HA " . $badWordLength . " CARATTERI";

    ?>

  </body>
</html>
