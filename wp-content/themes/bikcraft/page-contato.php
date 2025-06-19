<?php
// Template Name: Contato
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php include(get_template_directory() . "/inc/intro.php"); ?>

		<section class="contato container animar-interno">
			<form action="<?php echo get_template_directory_uri(); ?>/enviar.php" method="post" name="form" class="formphp contato_form grid-8">
				<label for="nome">Nome</label>
				<input id="nome" name="nome" type="text">
				<label for="email">E-mail</label>
				<input id="email" name="email" type="text">
				<label for="telefone">Telefone</label>
				<input id="telefone" name="telefone" type="text">

				<label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
				<input type="text" class="nao-aparece" name="leaveblank">
				<label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
				<input type="text" class="nao-aparece" name="dontchange" value="http://" >

				<label for="mensagem">Mensagem</label>
				<textarea name="mensagem" id="mensagem"></textarea>

				<button id="enviar" name="enviar" type="submit" class="btn btn-preto">Enviar</button>
			</form>

			<div class="contato_dados grid-8">
				<h3>Dados</h3>
				<span><?php echo get_post_meta(get_the_ID(), 'phone', true) ?></span>
				<span><?php echo get_post_meta(get_the_ID(), 'email', true) ?></span>
				<span><?php echo get_post_meta(get_the_ID(), 'address', true) ?></span>
				<span><?php echo get_post_meta(get_the_ID(), 'city_state_country', true) ?></span>
				<h3>Redes Sociais</h3>
				<?php include(get_template_directory() . "/inc/socials.php"); ?>
			</div>
		</section>

		<section class="container contato_mapa">
			<a href="<?php echo get_post_meta(get_the_ID(), 'map_link', true); ?>" target="_blank" class="grid-16"><img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo get_post_meta(get_the_ID(), 'map_img', true); ?>" alt="<?php echo get_post_meta(get_the_ID(), 'map_text', true); ?>"></a>
		</section>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>