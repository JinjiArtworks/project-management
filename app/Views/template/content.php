<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?= view('template/header') ?>
    <?= view('template/css') ?>
    <?= $this->renderSection('content_css') ?>
</head>

<body class="  ">
    <?= view('template/preloader') ?>
    <?= view('template/side_nav') ?>
    <?= view('template/top_nav') ?>
    <div class="start-content">
        <?= $this->renderSection('content') ?>
    </div>
    <div class="start-js">
        <?= $this->renderSection('content_js') ?>
        <?= view('template/js') ?>
    </div>
    <?= view('template/footer') ?>
</body>

</html>