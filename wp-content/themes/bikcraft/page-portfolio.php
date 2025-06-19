<?php
// Template Name: Portfolio
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php include(get_template_directory() . "/inc/intro.php"); ?>

		<section class="container animar-interno">
			<ul class="rslides">

				<?php
				$items = get_post_meta(get_the_ID(), 'quotes', true);
				if (!empty($items) && is_array($items)): ?>
					<?php foreach ($items as $key => $item): ?>
						<li>
							<blockquote class="quote_clientes">
								<p><?php echo $item['quote'] ?></p>
								<cite><?php echo $item['author'] ?></cite>
							</blockquote>
						</li>
					<?php endforeach; ?>
				<?php endif; ?>
			</ul>
		</section>

		<section class="portfolio">
			<div class="container">
				<?php include(get_template_directory() . "/inc/clients-portfolio.php"); ?>
			</div>
		</section>

<?php endwhile;
else: endif; ?>

<?php get_footer(); ?>