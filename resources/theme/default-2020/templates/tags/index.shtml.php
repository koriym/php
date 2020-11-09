
                                    <?php foreach ($this->tags as $tag): ?>

                                    <li><?= $this->anchor($tag->href, $tag->title); ?></li>

                                    <?php endforeach; ?>
