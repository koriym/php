                        <?php foreach ($this->config->menu as $title => $href): ?>
                            <li class="nav-item"><?= $this->anchor(
                                $href,
                                $title,
                                [
                                    'class' => 'nav-link'
                                ]
                            ); ?></li>

                        <?php endforeach; ?>
