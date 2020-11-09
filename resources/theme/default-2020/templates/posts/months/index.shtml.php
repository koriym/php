
                    <?php foreach ($this->months as $month): ?>

                    <li><?= $this->anchor($month->href, $month->title); ?></li>

                    <?php endforeach; ?>
