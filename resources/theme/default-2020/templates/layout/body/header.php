<header class="pt-4 pb-0 site-heading text-center bg-light">
    <?= $this->render('templates', $this->config->theme->layout_header_prepend ?? []) ?>
    <h1><?= $this->config->general->title; ?></h1>
    <p><?= $this->config->general->tagline; ?></p>
    <?= $this->render('templates', $this->config->theme->layout_header_append ?? []) ?>

    <nav class="navbar pb-0 navbar-expand-md bg-light">
        <ul id="navbar-menu" class="navbar-nav mx-auto text-center">
            <script async>Argo.shtml('/menu.shtml', 'navbar-menu')</script>
        </ul>
    </nav>
</header>
