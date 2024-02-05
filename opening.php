<?php
$baseFolder = "/";

if (!isset($title)) {
  $title = 'Web Basic';
}

if (!isset($description)) {
  $description = 'This webpage aims to provide complete beginners information about HTML fundamentals';
}

if (!isset($keywords)) {
  $keywords = 'HTML,CSS,JavaScript,Basic';
}

if (!isset($author)) {
  $author = 'Gary Ecleo';
}

if (!isset($viewport)) {
  $viewport = 'width=device-width, initial-scale=1.0';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="<?= $description ?>">
  <meta name="keywords" content="<?= $keywords ?>">
  <meta name="author" content="<?= $author ?>">
  <meta name="viewport" content="<?= $viewport ?>">
  <title><?= $title ?></title>
  <link rel="icon" type="image/x-icon" href="/favicon-32x32.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="<?= $baseFolder ?>css/style.css" />
  <link rel="stylesheet" href="<?= $baseFolder ?>css/prism.css" />
  <script src="<?= $baseFolder ?>js/prism.js"></script>
</head>

<body>