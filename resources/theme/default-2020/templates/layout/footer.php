
    <footer class="py-5 bg-dark">
        <div class="container">
            <?= $this->render('templates', $this->config->theme->layout_footer_prepend ?? []) ?>

            <p class="m-0 text-center text-white">Built with <?= $this->anchor('https://github.com/getargo/app', 'Argo'); ?></p>

            <?= $this->render('templates', $this->config->theme->layout_footer_append ?? []) ?>
        </div>
    </footer>
