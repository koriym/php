                <?php foreach ($this->postIndex->posts as $post): ?>

                <article class="mb-4">
                    <header>
                        <h2><?= $this->anchor(
                            $post->href,
                            $post->title
                        ) ?></h2>
                        <p class="text-muted">
                            by <?= $this->escape()->html($post->author) ?>
                            on <?= $this->dateTime()->html($post->created, 'D d M Y') ?>
                            (<?php foreach ($post->tags as $k => $tag) {
                                echo $this->anchor($tag->href, $tag->title) . ($k + 1 < count($post->tags) ? ', ' : '');
                            } ?>)
                        </p>
                    </header>
                    <?= $this->bodyLess($post); ?>
                    <hr />
                </article>

                <?php endforeach; ?>

                <?= $this->render('prevnext') ?>
