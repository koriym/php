        <header class="jumbotron col-12 mx-auto site-heading text-center">
            <?= $this->render('templates', $this->config->theme->layout_header_prepend ?? []) ?>
            <h1 class="display-1"><?= $this->config->general->title; ?></h1>
            <p class="subheading"><?= $this->config->general->tagline; ?></p>
            <?= $this->render('templates', $this->config->theme->layout_header_append ?? []) ?>
        </header>