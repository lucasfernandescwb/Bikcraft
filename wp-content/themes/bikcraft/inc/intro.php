<style type="text/css">
.introducao-interna {
    background: url("<?php echo get_template_directory_uri(); ?>/img/<?php echo get_post_meta(get_the_ID(), 'background', true); ?>") no-repeat center;
    background-size: cover;
}
</style>

<section class="introducao-interna">
    <div class="container">
        <h1><?php echo the_title(); ?></h1>
        <p><?php echo get_post_meta(get_the_ID(), 'subtitle', true) ?></p>
    </div>
</section>