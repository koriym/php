                <div class="card mb-4">
                    <!-- <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> -->
                    <div class="card-header">
                        <h2 class="card-title"><?= $this->anchor(
                            $this->post->href,
                            $this->post->title
                        ) ?></h2>
                        <p class="card-subtitle text-muted">
                            by <?= $this->escape()->html($this->post->author) ?>
                            on <?= $this->dateTime()->html($this->post->created, 'Y-m-d') ?>
                        </p>
                        <p><?php foreach ($this->post->tags as $k => $tag): ?>
                            <?= $this->anchor($tag->href, $tag->title) . ($k + 1 < count($this->post->tags) ? ', ' : ''); ?>
                        <?php endforeach; ?></p>
                    </div>
                    <div class="card-body card-text">
                        <?= $this->body($this->post); ?>
                    </div>
                </div>

                <?= $this->render('prevnext') ?>
