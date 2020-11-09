                <?php foreach ($this->postIndex->posts as $post): ?>

                <!-- Blog Post -->
                <div class="card mb-4">
                    <!-- <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> -->
                    <div class="card-header">
                        <h2 class="card-title"><?= $this->anchor(
                            $post->href,
                            $post->title
                        ) ?></h2>
                        <p class="card-subtitle text-muted">
                            by <?= $this->escape()->html($post->author) ?>
                            on <?= $this->dateTime()->html($post->created, 'Y-m-d') ?>
                        </p>
                        <p><?php foreach ($post->tags as $k => $tag): ?>
                            <?= $this->anchor($tag->href, $tag->title) . ($k + 1 < count($post->tags) ? ', ' : ''); ?>
                        <?php endforeach; ?></p>
                    </div>
                    <div class="card-body card-text">
                        <?= $this->bodyLess($post); ?>
                    </div>
                </div>

                <?php endforeach; ?>

                <?= $this->render('prevnext') ?>
