<ul class="post-list">
	<?php foreach ($posts as $post) {
		echo '<li><a href="' . get_permalink($post->ID) . '">' . $post->post_title . ' <time>' . date_i18n( 'j F Y', $post->post_date) . '</time></a></li>';
	}
	?>
</ul>