<?php get_header() ?>
<main id="site-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<?php if(is_front_page()){ 
					include('template-parts/identity-card.php');
				}else{
					echo '<h1 class="page-title">' . $post->post_title . '</h1>';
					echo '<div class="page-content">';
					the_content();
					echo '</div>';
				}
				?>
			</div>
		</div>
	</div>
		
</main>
<?php get_footer() ?>