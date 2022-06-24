<?php get_header() ?>
<main id="site-content" >
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<article class="single-post">
					<header>
						<h1 class="post-title"><?php the_title() ?></h1>
					</header>
					<div class="post-image">
						<?= get_the_post_thumbnail() ?>
					</div>
					<div class="post-content">
						<?php the_content() ?>
					</div>
					

					<footer>
						<div class="social-block">
							<h1>Partager :</h1>
							<ul>
								<li><a href="#"><?= getIcon('twitter'); ?></a></li>
								<li><a href="#"><?= getIcon('facebook'); ?></a></li>
								<li><a href="#"><?= getIcon('google'); ?></a></li>
								<li><a href="#"><?= getIcon('linkedin'); ?></a></li>
							</ul>
						</div>
					</footer>
				</article>
			</div>

			<?php
			if(get_theme_mod('has_sidebar', false)){ ?>
				<div class="col-md-2 offset-md-1">
					<?php get_sidebar(); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</main>
<?php get_footer() ?>