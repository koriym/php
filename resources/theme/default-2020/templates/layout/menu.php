        <?= $this->render('templates', $this->config->theme->layout_header_prepend ?? []) ?>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><?= $this->config->general->title ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul id="menu-widget" class="navbar-nav ml-auto">
                    </ul>
                    <script async>Argo.shtml('/menu.shtml', 'menu-widget')</script>
                </div>
            </div>
        </nav>

        <?= $this->render('templates', $this->config->theme->layout_header_append ?? []) ?>


