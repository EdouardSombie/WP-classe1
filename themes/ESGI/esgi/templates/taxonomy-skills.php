<?php get_header() ?>
<?php 
$term = get_queried_object(); ?>
<main id="site-content" >
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<article class="single-post">
					<header>
						<h1 class="post-title"><?= $term->name ?></h1>
					</header>
					<div class="post-content">
						<?= $term->description ?>
					</div>
					<section>
						<?php 
						$args = [
							'post_type' => 'esgi_project',
							'post_status' => 'publish',
							'tax_query' => array(
							    array(
							      'taxonomy' => 'skills',
							      'field' => 'term_id', 
							      'terms' => $term->term_id,
							      'include_children' => false
							    )
							  )
						];

						$projects = get_posts($args);

						if(!empty($projects)){ ?>
							<ul>
								<?php foreach ($projects as $p) { ?>
									<li><a href="<?= get_permalink($p) ?>"><?= $p->post_title ?></a></li>
								<?php } ?>
							</ul>
						<?php } ?>

					</section>

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