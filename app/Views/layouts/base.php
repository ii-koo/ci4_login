<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= ('css/bootstrap.min.css')?>" rel="stylesheet">

    <? if (isset($title)):?>
        <title>Test | <?= $title ?></title>
    <? else: ?>
        <title>CI4 Index</title>
    <? endif ?>
  </head>
  <body>
    <?= $this->renderSection('content')?>
    <script src="<?= ('js/bootstrap.bundle.min.js')?>"></script>
  </body>
</html>
