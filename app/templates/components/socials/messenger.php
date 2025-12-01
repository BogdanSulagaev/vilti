<?php
$socials = [
    [
        'url'    => '#',
        'label'  => 'Telegram',
        'main'   => 'img/icons/telegram.svg',
        'letter' => 'img/icons/t.svg',
    ],
    [
        'url'    => '#',
        'label'  => 'WhatsApp',
        'main'   => 'img/icons/whatsapp.svg',
        'letter' => 'img/icons/w.svg',
    ],
    [
        'url'    => '#',
        'label'  => 'Max',
        'main'   => 'img/icons/max.svg',
        'letter' => 'img/icons/m-2.svg',
    ],
   
];

if (!empty($socials)):
?>
<div class="contact-socials">
    <div class="contact-socials">
        <?php foreach ($socials as $item): ?>
            <a href="<?= $item['url'] ?>" class="contact-socials__icon" aria-label="<?= $item['label'] ?>" target="_blank">
                <img class="lazyload main" src="img/default.png" data-src="<?= $item['main'] ?>" alt="img">
                <img class="lazyload letter" src="img/default.png" data-src="<?= $item['letter'] ?>" alt="img">
            </a>
        <?php endforeach; ?>
    </div>
</div>
<?php
endif;