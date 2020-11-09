<!DOCTYPE html>
<html lang="en">
<head>
<?php
    echo $this->render('layout/head/meta');
    echo $this->render('layout/head/title');
    echo $this->render('layout/head/links');
    echo $this->render('layout/head/styles');
    echo $this->render('layout/head/scripts');
?>
</head>
<body>

    <?= $this->render('layout/header') ?>

    <div class="container">
        <div class="row">
            <?= $this->render('layout/content') ?>
            <?= $this->render('layout/sidebar') ?>
        </div>
    </div>

    <?= $this->render('layout/footer') ?>

</body>
</html>
