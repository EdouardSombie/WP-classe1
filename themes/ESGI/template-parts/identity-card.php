<article class="identity-card">
	<figure>
		<?= get_custom_logo() ?>
	</figure>
	<h1><?= bloginfo('name') ?></h1>
	<h2><?= bloginfo('description') ?></h2>
	<footer>
		<nav>
			<ul>
				<li>
					<a href="#"><?= getIcon('twitter'); ?></a>
				</li>
				<li>
					<a href="#"><?= getIcon('facebook'); ?></a>
				</li>
				<li>
					<a href="#"><?= getIcon('google'); ?></a>
				</li>
				<li>
					<a href="#"><?= getIcon('linkedin'); ?></a>
				</li>
			</ul>
		</nav>
	</footer>
</article>