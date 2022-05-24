<?php get_header(); ?>

<main id="site-content">
	<div class="container">
		<?php include('template-parts/identity-card.php'); ?>

		<?php 
		//Afficher les derniers articles si la page n'est pas la page d'accueil
		if(!is_front_page()){
			$args = [
				'post_type' => 'post',
				'numberposts' => 6,
				'post_status' => 'publish'
			];
			$posts = get_posts($args);
			include('template-parts/post-list.php');
		}
		?>
	</div>
</main>

<?php get_footer(); ?>