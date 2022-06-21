<div class="post-list-wrapper">
	<?php
	$paged = (get_query_var('paged')) ? absint( get_query_var( 'paged' ) ) : 1;

	$args = [
		'post_type' => 'post',
		'posts_per_page' => 2,
		'post_status' => 'publish',
		'paged' => $paged
	];

	$the_query = new WP_Query($args);

	if($the_query->have_posts()){
		echo '<ul class="post-list">';
		while($the_query->have_posts()){
			$the_query->the_post();
			echo '<li><a href="' . get_permalink($post->ID) . '">';
			echo '<article>';
			echo '<h1>' . $post->post_title . '</h1>';
			echo ' <time>' . date_i18n('j F Y', get_post_timestamp($post)) . '</time>';
			echo '</article></a></li>';
		}
		echo '</ul>';
	}
	echo '<div class="post-list-pagination">';
	echo paginate_links([
		'total' => $the_query->max_num_pages,
		'current' => $paged
	]);
	echo '</div>';
	?>
</div>












