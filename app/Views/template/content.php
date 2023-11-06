<!doctype html>
<html lang="en">

<head>
    <?= view('template/header') ?>
    <?= view('template/css') ?>
    <?= $this->renderSection('content_css') ?>
</head>

<body class="  ">
    <?= view('template/preloader') ?>
    <?= view('template/side_nav') ?>
    <?= view('template/top_nav') ?>
    <?= $this->renderSection('content') ?>
    <?= view('template/footer') ?>
    <?= view('template/js') ?>
    <?= $this->renderSection('content_js') ?>

</body>

</html>