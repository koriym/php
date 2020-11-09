                <div class="card mb-4">
                    <div class="card-header">
                        <?= $this->render('templates', $this->config->theme->post_header_prepend ?? []) ?>

                        <h2 class="card-title"><?= $this->anchor(
                            $this->post->href,
                            $this->post->title
                        ) ?></h2>

                        <?= $this->render('templates', $this->config->theme->post_meta_prepend ?? []) ?>

                        <p class="card-subtitle text-muted">
                            by <?= $this->escape()->html($this->post->author) ?>
                            on <?= $this->dateTime()->html($this->post->created, 'l, d M Y') ?>
                        </p>

                        <p>in <?php foreach ($this->post->tags as $k => $tag): ?>
                            <?= $this->anchor($tag->href, $tag->title) . ($k + 1 < count($this->post->tags) ? ', ' : ''); ?>
                        <?php endforeach; ?></p>

                        <?= $this->render('templates', $this->config->theme->post_meta_append ?? []) ?>

                        <?= $this->render('templates', $this->config->theme->post_header_append ?? []) ?>
                    </div>
                    <div class="card-body card-text">
                        <?= $this->render('templates', $this->config->theme->post_body_prepend ?? []) ?>
                        <?= $this->body($this->post); ?>
                        <?= $this->render('templates', $this->config->theme->post_body_append ?? []) ?>
                    </div>
                </div>

                <?= $this->render('prevnext') ?>
