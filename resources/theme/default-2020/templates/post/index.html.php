                <article class="mb-4">
                    <header>
                        <?= $this->render('templates', $this->config->theme->post_header_prepend ?? []) ?>

                        <h2><?= $this->anchor(
                            $this->post->href,
                            $this->post->title
                        ) ?></h2>

                        <?= $this->render('templates', $this->config->theme->post_meta_prepend ?? []) ?>

                        <p class="text-muted">
                            by <?= $this->escape()->html($this->post->author) ?>
                            on <?= $this->dateTime()->html($this->post->created, 'D d M Y') ?>
                            (<?php foreach ($this->post->tags as $k => $tag) {
                                echo $this->anchor($tag->href, $tag->title) . ($k + 1 < count($this->post->tags) ? ', ' : '');
                            } ?>)
                        </p>

                        <?= $this->render('templates', $this->config->theme->post_meta_append ?? []) ?>

                        <?= $this->render('templates', $this->config->theme->post_header_append ?? []) ?>
                    </header>

                    <?= $this->render('templates', $this->config->theme->post_body_prepend ?? []) ?>
                    <?= $this->body($this->post); ?>
                    <?= $this->render('templates', $this->config->theme->post_body_append ?? []) ?>
                </article>

                <?= $this->render('prevnext') ?>
