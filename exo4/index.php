<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <header>

  </header>
  <main>
          <?php
              $string = "Romain";
              $int = 20;
              $float = 40.7;
              $bolean = true;
          ?>
          <h2>Mes variables:</h2>
          <ul>
              <li><?php echo "\$string = "; var_dump($string) ?></li>
              <li><?php echo "\$int = "; var_dump($int) ?></li>
              <li><?php echo "\$float = "; var_dump($float) ?></li>
              <li><?php echo "\$bolean = "; var_dump($bolean) ?></li>
          </ul>
</main>
  <footer>

  </footer>
</body>
</html>
