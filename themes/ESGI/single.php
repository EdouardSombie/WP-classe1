<?php get_header() ?>
<main id="site-content">
	<div class="container">
		<article>
			<header>
				<h1><?php the_title() ?></h1>
				<div class="post-meta">
					<div class="post-author">
						<?php
						$author_id = $post->post_author;
						$author_name = get_the_author_meta( 'nickname', $author_id );
						?>
						<img src="<?= get_avatar_url($author_id) ?>" alt="<?= $author_name ?>">
						<?= $author_name ?>
					</div>
					<time>
						<?= date_i18n( 'j F Y', $post->post_date); ?>
					</time>
				</div>
			</header>
			
			<?= get_the_post_thumbnail() ?>
			<?php the_content() ?>

			<footer>
				<h2>Partager :</h2>
				<ul>
					<li><a href="#"><?= getIcon('twitter'); ?></a></li>
					<li><a href="#"><?= getIcon('facebook'); ?></a></li>
					<li><a href="#"><?= getIcon('google'); ?></a></li>
					<li><a href="#"><?= getIcon('linkedin'); ?></a></li>
				</ul>
			</footer>
		</article>
	</div>
</main>
<?php get_footer() ?>