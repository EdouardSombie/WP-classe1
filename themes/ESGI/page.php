<?php get_header() ?>
<main id="site-content">
	<div class="container">
		<?php if(is_front_page()){ 
			include('template-parts/identity-card.php');
		}else{
			echo '<h1>' . $post->post_title . '</h1>';
			the_content();
		}
		?>
	</div>
</main>
<?php get_footer() ?>