<?php get_header() ?>
<?php $term = get_queried_object(); ?>
<h1><?= $term->name ?></h1>
<?= $term->description ?>
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
		<h2><?= ucfirst(__('projects', 'ESGI')) ?></h2>
		<ul>
			<?php foreach ($projects as $p) { ?>
				<li><a href="<?= get_permalink($p) ?>"><?= $p->post_title ?></a></li>
			<?php } ?>
		</ul>
	<?php } ?>

</section>

<?php get_footer() ?>