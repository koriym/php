            <div class="col-md-3">
                <?php foreach ($this->config->theme->sidebar as $widget): ?>
                    <div class="card my-4">
                        <?= $this->render($widget); ?>
                    </div>
                <?php endforeach; ?>
            </div>
