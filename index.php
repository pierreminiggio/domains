<?php

$domains = [
    'copypasta.fr',
    'ggio.be',
    'ggio.eu',
    'ggio.fr',
    'ggio.fun',
    'ggio.info',
    'ggio.link',
    'ggio.live',
    'ggio.me',
    'ggio.online',
    'ggio.shop',
    'ggio.site',
    'ggio.space',
    'ggio.store',
    'ggio.tech',
    'ggio.uno',
    'ggio.website',
    'ggio.xyz',
    'gitgud.fr',
    'jesuisboosted.com',
    'jesuisboosted.fr',
    'miniggio.art',
    'miniggio.best',
    'miniggio.cloud',
    'miniggio.digital',
    'miniggio.eu',
    'miniggio.fr',
    'miniggio.fun',
    'miniggio.link',
    'miniggio.me',
    'miniggio.net',
    'miniggio.online',
    'miniggio.ovh',
    'miniggio.shop',
    'miniggio.site',
    'miniggio.space',
    'miniggio.store',
    'miniggio.tech',
    'miniggio.uno',
    'miniggio.website',
    'miniggio.xyz',
    'miniggiodev.fr',
    'œil.fr',
    'œuf.fr',
    'pierre.cash',
    'pierre.uno',
    'pierreminiggio.fr',
    'tué.fr',
];
?>

Réservés par <a href="https://miniggiodev.fr" target="blank">Pierre</a> :
<ul>
    <?php foreach ($domains as $domain): ?>
        <li><a
            href="https://<?php echo $domain ?>"
            <?php if (strpos($_SERVER['HTTP_HOST'], $domain) !== false): ?>
                style="font-weight: bold;"
            <?php endif; ?>
        ><?php echo $domain ?></a></li>
    <?php endforeach; ?>
</ul>
