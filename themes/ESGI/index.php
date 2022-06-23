<?php get_header(); ?>

<main id="site-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<?php include('template-parts/identity-card.php'); ?>
				<div id="post-list-wrapper">
					<?php 
					//Afficher les derniers articles si la page n'est pas la page d'accueil
					if(!is_front_page()){
						include('template-parts/post-list.php');
					}
					?>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>