<?php
$uri = $_SERVER['REQUEST_URI'];
?>

<dl>
  <dt><a href="<?= $baseFolder ?>" class="<?= $uri == $baseFolder  ? "active" : "" ?>">Home</a></dt>
  <dt><a href="<?= $baseFolder . "htmlbasic/index.php" ?>" class=" <?= $uri == $baseFolder . "htmlbasic/index.php"  ? "active" : ""   ?>">HTML Basic</a></dt>
  <dt><a href="<?= $baseFolder . "cssbasic/" ?>" class=" <?= $uri == $baseFolder . "cssbasic/"  ? "active" : ""   ?>">CSS Basic</a></dt>
  <dt><a href="<?= $baseFolder . "javascriptbasic/" ?>" class=" <?= $uri == $baseFolder . "javascriptbasic/"  ? "active" : ""   ?>">JavaScript Basic</a></dt>
</dl>