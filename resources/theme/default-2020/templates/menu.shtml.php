<?php foreach ($this->config->menu as $title => $href): ?>
    <li class="nav-item"><?= $this->anchorRaw(
        $href,
        $title,
        [
            'class' => 'nav-link px-3'
        ]
    ); ?></li>
<?php endforeach; ?>
