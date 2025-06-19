<?php
// Template Name: Sobre
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php include(get_template_directory() . "/inc/intro.php"); ?>

		<section class="missao_sobre container animar-interno">
			<div class="grid-10">
				<h2 class="subtitulo-interno">História, Missão e Visão</h2>
				<p><?php echo get_post_meta(get_the_ID(), 'mission', true); ?></p>
				<p>Conheça os nossos produtos, pergunte para os nossos clientes e descubra a maravilha de ter uma Bikcraft na sua casa.</p>
			</div>
			<div class="grid-6">
				<h2 class="subtitulo-interno">Valores</h2>
				<ul>
					<li>- Qualidade no processo com</li>
					<li>- Foco no cliente sem perder a</li>
					<li>- Diversão, preservando a</li>
					<li>- Natureza com sustentabilidade</li>
				</ul>
			</div>

			<div class="grid-16 foto-equipe">
				<img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo get_post_meta(get_the_ID(), 'team_img', true); ?>" alt="Equipe Bikcraft">
			</div>

		</section>

		<?php include(get_template_directory() . "/inc/quality.php"); ?>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>