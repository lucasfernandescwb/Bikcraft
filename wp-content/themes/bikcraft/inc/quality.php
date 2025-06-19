<?php $about = get_page_by_title('sobre'); ?>

<section class="qualidade container">
    <h2 class="subtitulo"><?php echo get_post_meta($about->ID, 'quality-title', true); ?></h2>
    <img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo get_post_meta($about->ID, 'bikcraft_logo', true); ?>" alt="Bikcraft">
    <?php
    $qualities = get_post_meta($about->ID, 'quality_item', true);
    if (!empty($qualities) && is_array($qualities)): ?>
        <ul class="qualidade_lista">
            <?php foreach ($qualities as $item): ?>
                <li class="grid-1-3">
                    <h3><?php echo $item['quality_item_title']; ?></h3>
                    <p><?php echo $item['quality_item_description']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <?php if (!is_page('sobre')) : ?>
        <div class="call">
            <p><?php get_post_meta($about->ID, 'quality-call', true); ?></p>
            <a href="/bikcraft/sobre/" class="btn btn-preto">Sobre</a>
        </div>
    <?php endif; ?>
</section>