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

            <div class="col-md-8">

<?= $this->getContent() ?>

            </div>

            <div class="col-md-4">

                <?= $this->render('layout/sidebar') ?>

            </div>
        </div>
    </div>

    <?= $this->render('layout/footer') ?>

    <script src="/theme/default-2020/vendor/jquery/jquery.min.js"></script>
    <script src="/theme/default-2020/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
