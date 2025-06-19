<?php $portfolio = get_page_by_title('Portfólio'); ?>

<ul class="portfolio_lista rslides_portfolio">

    <?php
        $items = get_post_meta($portfolio->ID, 'portfolio_item', true);
        if (!empty($items) && is_array($items)): ?>
            <li>
                <?php foreach ($items as $key => $item): ?>
                    <div class="<?php echo ($key == 2) ? 'grid-16' : 'grid-8'; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/<?php echo esc_attr($item['img']); ?>" alt="<?php echo esc_attr($item['alt']); ?>">
                    </div>
                <?php endforeach; ?>
            </li>
    <?php endif; ?>

</ul>

<?php if (!is_page('portfolio')) : ?>
    <div class="call">
        <p><?php echo get_post_meta($portfolio->ID, 'portfolio-calling', true); ?></p>
        <a href="/bikcraft/portfolio/" class="btn">Portfólio</a>
    </div>
<?php endif; ?>